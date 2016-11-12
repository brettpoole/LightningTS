<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskStatus
 * @package App\Models
 */
class TaskStatus extends Model
{
    /**
     * Get all the tasks with this status
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class);
    }
}
