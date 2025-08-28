<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Contact\SendRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('web.pages.contact');
    }

    public function send(SendRequest $request): RedirectResponse
    {
        // return redirect()->route('contact')->with('success', 'se envió con éxito.');
        return to_route('contact')->with('success', 'se envió con éxito.');
    }
}
