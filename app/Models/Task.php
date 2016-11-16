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

    /**
     * Get the status for this task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(\App\Models\TaskStatus::class, 'task_status_id');
    }

    /**
     * Get the priority for this task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function priority()
    {
        return $this->belongsTo(\App\Models\TaskPriority::class, 'task_priority_id');
    }

    /**
     * Get the sequences this task belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sequences()
    {
        return $this->hasMany(\App\Models\TaskSequence::class);
    }

    /**
     * Get all users who have a role in this task
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany(\App\Models\User::class, 'task_members');
    }
}
