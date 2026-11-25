<?php

namespace App\Actions\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

final readonly class LogoutAction
{
    public function logout(): RedirectResponse
    {

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        Inertia::flash('toast', [
            'type' => 'success',
            'message' => 'Successfully Logout!',
        ]);

        return to_route('login.index');
    }
}
