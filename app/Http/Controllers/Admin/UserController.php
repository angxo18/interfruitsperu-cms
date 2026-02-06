<?php

namespace App\Http\Controllers\Admin;

use App\Filters\Admin\DateRangeFilter;
use App\Helpers\Admin\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\IndexRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    public function index(IndexRequest $request): View
    {
        $perPage = PaginationHelper::perPage();

        $users = QueryBuilder::for(User::class)
            ->allowedFilters([
                AllowedFilter::partial('name'),
                AllowedFilter::partial('email'),
                AllowedFilter::custom('created_at', new DateRangeFilter('created_at')),
                AllowedFilter::callback('search', function (Builder $query, $value) {

                    $query->where(function ($q) use ($value) {
                        $q->where('name', 'like', "%{$value}%")
                            ->orWhere('email', 'like', "%{$value}%");
                    });

                }),
            ])
            ->paginate($perPage)
            ->withQueryString();

        return view('admin.pages.users.index', ['users' => $users]);
    }
}
