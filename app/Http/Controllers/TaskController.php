<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class TaskController extends Controller
{
    public function index()
    {
        $task = task::all();

        return view('index', compact('task'));
    }

    public function edit($id)
    {
        $task = task::find($id);
        
        return view('edit', compact('task'));
    }

    public function update($id)
    {
        $task = task::find($id)->update([
            'title' => request()->title,
            'body' => request()->body
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        $task = task::find($id)->delete();

        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $task = new task;

        $task->title = request()->title;
        $task->body = request()->body;

        $task->save();

        return redirect('/');
    }
}
