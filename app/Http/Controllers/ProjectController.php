<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Get all projects
     */
    public function index()
    {
        $projects = Project::all();

        return view('projects')->with(['projects' => $projects]);
    }

    /**
     * Get details for a given project
     */
     public function show(Project $project)
     {
         return view('project')->with(['project' => $project]);
     }
}
