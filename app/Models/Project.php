<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * @package App\Models
 */
class Project extends Model
{
	/**
	 * Get all tasks associated with this project
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function tasks()
    {
	    return $this->belongsToMany(App\Models\Task::class, 'project_tasks');
    }

	/**
	 * Get all users who are members of this project
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function members()
    {
	    return $this->belongsToMany(App\Models\User::class, 'project_memberships');
    }
}
