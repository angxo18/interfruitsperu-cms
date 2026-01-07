<?php

namespace App\Enums\Admin;

enum DateFilterOperator: string
{
    case ON = 'on';
    case NOT_ON = 'not_on';
    case AFTER_OR_ON = 'after_or_on';
    case BEFORE_OR_ON = 'before_or_on';
    case BETWEEN = 'between';

    public function sqlOperator(): ?string
    {
        return match ($this) {
            self::ON => '=',
            self::NOT_ON => '!=',
            self::AFTER_OR_ON => '>=',
            self::BEFORE_OR_ON => '<=',
            default => null,
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::ON => 'En la fecha',
            self::NOT_ON => 'No en la fecha',
            self::AFTER_OR_ON => 'Desde',
            self::BEFORE_OR_ON => 'Antes',
            self::BETWEEN => 'Entre',
            default => '',
        };
    }
}
