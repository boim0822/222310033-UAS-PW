<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('mainpage.Create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'list' => 'required|string',
            'reminder_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ]);

        Task::create($request->all());

        return redirect()->route('home');
    }

    public function index()
    {
        $tasks = Task::with('Category')->get();
        return view('mainpage.Home', compact('tasks'));
    }
}
