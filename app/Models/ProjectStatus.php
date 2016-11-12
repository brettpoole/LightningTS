<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    protected $table = 'project_statuses';

    public function projects()
    {
        return $this->hadMany(\App\Models\Project::class);
    }
}
