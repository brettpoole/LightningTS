<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProjectStage
 * @package App\Models
 */
class ProjectStage extends Model
{
    /**
     * Get all projects in this stage
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class);
    }
}
