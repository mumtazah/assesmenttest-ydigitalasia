<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class AuthMutator
{
    public function login($_, array $args)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $args['email'])->first();

        if (! $user || ! Hash::check($args['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        Auth::login($user);

        return "Login successful";
    }
}