<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodosController extends Controller
{
     public function index()
    {
        $todos = Todo::all();
        return Inertia::render('Todos/Index',['todos' => $todos]);
    }

     public function create()
    {
        return Inertia::render('Todos/Create');
    }

      public function store(Request $request)
    {
        $request->validate(['title' => 'required|max:100']);
        $todos = new Todo($request->input());
        $todos->save();
        return redirect('todos');
    }

    public function edit(Todo $todo)
    {
        return Inertia::render('Todos/Edit',['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate(['title' => 'required|max:100']);
        $todo->update($request->all());
        return redirect('todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('todos');
    }
}
