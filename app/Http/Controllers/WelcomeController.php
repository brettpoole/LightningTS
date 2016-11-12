<?php

namespace App\Http\Controllers;

use Password;
use Illuminate\Http\Request;
use App\Events\NewUserRegistered;

class WelcomeController extends Controller
{
    /**
     * Verifies an account validation token
     */
    public function index(Request $request, string $token = null)
    {
        if (! $user = \App\Models\User::findByToken($request->token)) {
            return redirect('/login')->with('error', 'The link you clicked is not valid');
        }

        $user->activated_at = \Carbon\Carbon::now();
        $user->save();

        return view('/home')->with([
            'user' => $user
        ]);
    }

    public function activate(Request $request)
    {
        event(new NewUserRegistered($request->session()->get('user')));

        return view('auth.activate')->with([
            'user' => $request->session()->get('user'),
        ]);
    }
}
