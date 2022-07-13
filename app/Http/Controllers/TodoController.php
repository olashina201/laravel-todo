<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }

    public function addTodo()
    {
        $body = request()->validate([
            'title' => 'required',
            'description' => 'nullable'
        ]);

        Todo::create($body);
    }
}
