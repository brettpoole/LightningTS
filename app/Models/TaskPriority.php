<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaskPriority
 * @package App\Models
 */
class TaskPriority extends Model
{
    /**
     * Get all tasks with this priority
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany(\App\Models\Task::class);
    }
}
