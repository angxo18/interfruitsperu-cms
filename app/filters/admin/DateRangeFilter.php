<?php

namespace App\Filters\Admin;

use App\Enums\Admin\DateFilterOperator;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class DateRangeFilter implements Filter
{
    protected string $column;

    public function __construct(string $column)
    {
        $this->column = $column;
    }

    public function __invoke(Builder $query, $value, string $property): void
    {
        $operator = $value['operator'] ?? null;
        $from = $value['from'] ?? null;
        $to = $value['to'] ?? null;

        if (! $operator || ! $from) {
            return;
        }

        $operatorEnum = DateFilterOperator::tryFrom($operator);

        if (! $operatorEnum) {
            return;
        }

        if ($operatorEnum === DateFilterOperator::BETWEEN) {
            if ($to) {
                $query->whereBetween($this->column, [$from, $to]);
            }

            return;
        }

        $sqlOperator = $operatorEnum->sqlOperator();

        if ($sqlOperator) {
            $query->whereDate($this->column, $sqlOperator, $from);
        }

    }
}
