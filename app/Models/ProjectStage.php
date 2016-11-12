<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStage extends Model
{
    protected $table = 'project_stages';

    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class);
    }
}
