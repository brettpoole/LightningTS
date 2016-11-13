<?php

namespace App\Models;

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
     * Get all projects of which this user is a member
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(\App\Models\Project::class, 'project_members');
    }

    /**
     * Retrieve the user associated with a reset token
     *
     * @param string $token
     */
    public static function findByToken($token)
    {
        $reset = \DB::table('password_resets')->where('token', $token)->first();

        if (! isset($reset->email)) {
            return false;
        }

        if ($user = \App\Models\User::where('email', $reset->email)->first()) {
            \Password::getRepository()->delete($token);

            return \App\Models\User::where('email', $reset->email)->firstOrFail();
        }

        return false;
    }
}
