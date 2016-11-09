<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'activated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Retrieve the user associated with a reset token
     *
     * @param string $token
     */
    public static function findByToken($token)
    {
        if ( \Password::getRepository()->exists(new \App\User(), $token)) {
            $reset = \DB::table('password_resets')->where('token', $token)->first();

            \Password::getRepository()->delete($token);

            return \App\User::where('email', $reset->email)->firstOrFail();
        }

        return false;
    }
}
