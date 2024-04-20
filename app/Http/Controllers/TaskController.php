<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $search = request()->search;
        if ($search) {
            $tasks = $tasks->filter(function ($task) use ($search) {
                return str_contains(strtolower($task->name), $search) or
                    str_contains(strtolower($task->description), $search) or
                    str_contains(strtolower($task->label), $search);
            });
        }
        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function store()
    {
        request()->validate([
            'name' => 'required'
        ]);

        Task::create([
            'name' => \request()->name,
            'description' => \request()->description,
            'label' => \request()->label
        ]);
        return redirect('/');
    }

    public function show(Task $task)
    {
        return view('task', [
            'task' => $task
        ]);
    }

    function done(Task $task)
    {
        $task->done = true;
        $task->save();
        return redirect('/');
    }

    function delete(Task $task)
    {
        $task->delete();
        return redirect('/');
    }
}
