<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Get all tasks
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks')->with(['tasks' => $tasks]);
    }

    public function show(Task $task)
    {
        return view('task')->with(['task' => $task]);
    }
}
