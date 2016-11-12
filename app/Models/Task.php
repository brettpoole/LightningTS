<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * @package App\Models
 */
class Task extends Model
{
	/**
	 * Get associated Projecs
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function projects()
	{
		return $this->belongsToMany(\App\Models\Project::class, 'project_tasks');
	}

	/**
	 * Get all users who are watching this task
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function watchers()
	{
		return $this->belongsToMany(\App\Models\User::class, 'task_watchers');
	}
}
