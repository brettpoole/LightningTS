<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectStatus
 * @package App\Models
 */
class ProjectStatus extends Model
{
    /**
     * Get all projects with this status
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class);
    }
}
