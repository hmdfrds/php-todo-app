<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    /**
     * Display the main To-Do list page.
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $todos = [];
        return view('todos.index', ['todos' => $todos]);
    }
}