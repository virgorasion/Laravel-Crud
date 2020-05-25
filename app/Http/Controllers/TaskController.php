<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();

        return view('index', compact('task'));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        
        return view('edit', compact('task'));
    }

    public function update($id, Request $req)
    {
        $task = Task::find($id)->update([
            'title' => $req->title,
            'body' => $req->body
        ]);

        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::find($id)->delete();

        return redirect('/');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $req)
	{
		$createTask = Task::create([
			'title' => $req->title,
			'body'  => $req->body
		]);

        return redirect('/');
    }
}
