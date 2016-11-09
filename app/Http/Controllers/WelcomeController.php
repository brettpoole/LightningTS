<?php

namespace App\Http\Controllers;

use Password;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Verifies an account validation token
     */
    public function index(Request $request, string $token = null)
    {
        if (! $user = \App\User::findByToken($token)) {
            return redirect('/login')->with('error', 'The link you clicked is not valid');
        }

        return view('/home')->with([
            'user' => $user
        ]);
    }
}
