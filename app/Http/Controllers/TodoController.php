<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class TodoController extends Controller
{
    /**
     * Display the main To-Do list page.
     * @return \Illuminate\View\View
     */
    public function index(Request $request): View
    {
        $todos = $request->session()->get('todos', []);

        return view('todos.index', ['todos' => $todos]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['description'=> 'required|string|max:255']);
        $todos = $request->session()->get('todos',[]);
        array_unshift($todos, $validated['description']);
        $request->session()->put('todos',$todos);

        return redirect()->route('todos.index')->with('success','Task added successfully!');
    }
}