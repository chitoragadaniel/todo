<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', [
            'tasks' => Task::all()
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
