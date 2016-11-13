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
        return $this->belongsToMany(\App\Models\Task::class, 'project_tasks');
    }

    /**
     * Get all users who are members of this project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function members()
    {
        return $this->belongsToMany(\App\Models\User::class, 'project_members');
    }

    /**
     * Get the stage this project is in
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stage()
    {
        return $this->belongsTo(\App\Models\ProjectStage::class, 'project_stage_id');
    }

    /**
     * Get the status for this project
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo(\App\Models\ProjectStatus::class, 'project_status_id');
    }

    /**
     * Get all sequences involving this project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sequences()
    {
        return $this->hasMany(\App\Models\TaskSequence::class);
    }
}
