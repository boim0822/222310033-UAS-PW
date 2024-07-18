<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function create()
    {
        return view('mainpage.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.show');
    }

    public function show()
    {
        $tasks = Task::with('category', 'lists')->where('user_id', Auth::id())->get();
        return view('mainpage.Show', compact('tasks'));
    }

    public function edit(Task $task)
{
    if ($task->user_id != Auth::id()) {
        return redirect()->route('tasks.show')->with('error', 'You are not authorized to edit this task');
    }

    $categories = Category::all();

    return view('mainpage.Edit', compact('task', 'categories'));
}


    public function update(Request $request, Task $task)
    {
        if ($task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to update this task');
        }

        $request->validate([
            'task_title' => 'required|max:255',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $task->title = $request->task_title;
        $task->category_id = $request->category_id;

        $task->save();

        return redirect()->route('tasks.show')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        if ($task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to delete this task');
        }

        $task->delete();

        return redirect()->route('tasks.show')->with('success', 'Task deleted successfully');
    }
}
