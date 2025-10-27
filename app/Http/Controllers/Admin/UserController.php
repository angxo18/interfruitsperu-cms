<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Admin\PaginationHelper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $perPage = PaginationHelper::perPage();
        $users = User::paginate($perPage)->withQueryString();

        return view('admin.pages.users.index', ['users' => $users]);
    }
}
