<?php

namespace App\Http\Controllers\Admin;

use App\Filters\Admin\DateRangeFilter;
use App\Helpers\Admin\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\IndexRequest;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdatePasswordRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends Controller
{
    public function index(IndexRequest $request): View
    {
        $filterCount = $request->filterCounter();
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
            ->orderByDesc('created_at')
            ->paginate($perPage)
            ->withQueryString();

        return view('admin.pages.users.index', ['users' => $users, 'filterCount' => $filterCount]);
    }

    public function create(): View
    {
        return view('admin.pages.users.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit(User $user): View
    {
        return view('admin.pages.users.edit', ['user' => $user]);
    }

    public function update(UpdateRequest $request, User $user): RedirectResponse
    {
        $user->update($request->validated());

        return redirect()->route('admin.users.edit', $user)->with('success', 'Usuario actualizado exitosamente.');
    }

    public function updatePassword(UpdatePasswordRequest $request, User $user): RedirectResponse
    {
        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users.edit', $user)->with('success', 'Contraseña actualizada exitosamente.');
    }
}
