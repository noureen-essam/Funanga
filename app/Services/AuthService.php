<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public static function generateToken (User $user){

        return   $user->createToken('Personal Access Token');
    }

    public static function verifyCredentials($credentials){

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid Email or Password'
            ], 401);
        }

    }
}
