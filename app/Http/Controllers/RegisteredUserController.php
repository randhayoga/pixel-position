<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $userValidated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 
            Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()],
        ]);

        $employerValidated = $request->validate([
            'employer_name' => ['required'],
            'employer_logo' => ['required', File::image()]
        ]);

        $user = User::create($userValidated);
        $logoPath = $employerValidated['employer_logo']->store('logo');
        $user->employer()->create([
            'name' => $employerValidated['employer_name'],
            'logo' => $logoPath
        ]);

        Auth::login($user);
        return redirect()->intended();
    }
}
