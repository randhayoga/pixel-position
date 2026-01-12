<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        # Validate input
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 
            Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()],
        ]);

        if (! Auth::attempt($validated)) {
            throw ValidationException::withMessages([
                'password' => 'Email or password is incorrect'
            ]);
        }
        request()->session()->regenerate();

        return redirect()->intended();
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return redirect()->intended();
    }
}
