<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SessionsRequest;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class SessionsController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('auth/Login');
    }

    public function login(SessionsRequest $request, LoginAction $action): RedirectResponse
    {
        return $action->login(...$request->safe()->only(['email', 'password']));
    }

    public function logout(LogoutAction $action): RedirectResponse
    {
        // for the sake of consistency i will also make it an action
        return $action->logout();
    }
}
