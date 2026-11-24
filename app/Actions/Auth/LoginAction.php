<?php


namespace App\Actions\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use SensitiveParameter;

final readonly class LoginAction{


    public function login(string $email,#[SensitiveParameter()] string $password): RedirectResponse {
        if(! Auth::attempt(['email' => $email, 'password' => $password])){
            Inertia::flash('toast', [
                'type' => 'error',
                'message' => 'Sorry Wrong Credentials Please Try Again!',
            ]);

            return back();
        }
        request()->session()->regenerate();

        Inertia::flash('toast',[
            'type' => 'success',
            'message' => 'Login Successfully Welcome'
        ]);
        $role = Auth::user()->role;
        return match($role->value){
            //will add the routes when i created the role
        };
    }
}