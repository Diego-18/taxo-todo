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
}
