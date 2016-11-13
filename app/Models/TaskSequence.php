<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskSequence
 * @package App\Models
 */
class TaskSequence extends Model
{
    /**
     * Get the project for this sequence
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
        return $this->belongsToMany(\App\Models\Project::class, 'task_sequences');
    }

    /**
     * Get the tasks in this sequence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class, 'id', 'task_id');
    }

    /**
     * Get the task in this sequence entry
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task()
    {
        return $this->belongsTo(\App\Models\Task::class);
    }
}
