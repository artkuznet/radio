<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ], true)) {
            /** @var User $user */
            $user = Auth::user();
            $user->setApiToken($user->getRememberToken());
            $user->save();

            return redirect('/');
        }

        return back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}