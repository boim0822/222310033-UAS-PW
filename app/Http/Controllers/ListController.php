<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
            ->with(['lists' => function($query) {
                $query->orderByRaw("due_date = CURRENT_DATE DESC, due_date ASC");
            }])
            ->get();

        return view('mainpage.Home', [
            'tasks' => $tasks,
        ]);
    }

    public function create(Task $task)
    {
        if ($task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to add lists to this task');
        }

        return view('mainpage.CreateList', compact('task'));
    }

    public function store(Request $request, Task $task)
    {
        if ($task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to add lists to this task');
        }

        $request->validate([
            'title' => 'required|max:255',
            'due_date' => [
                'nullable',
                'date',
                function ($attribute, $value, $fail) {
                    if ($value < date('Y-m-d')) {
                        $fail('The due date cannot be in the past.');
                    }
                },
            ],
            'description' => 'nullable|string',
        ]);

        $task->lists()->create([
            'title' => $request->title,
            'due_date' => $request->due_date,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.show')->with('success', 'List added successfully');
    }

    public function edit(TaskList $list)
    {
        if ($list->task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to edit this list');
        }

        return view('mainpage.EditList', compact('list'));
    }

    public function update(Request $request, TaskList $list)
    {
        if ($list->task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to update this list');
        }

        $request->validate([
            'title' => 'required|max:255',
            'due_date' => [
                'nullable',
                'date',
                function ($attribute, $value, $fail) {
                    if ($value < date('Y-m-d')) {
                        $fail('The due date cannot be in the past.');
                    }
                },
            ],
            'description' => 'nullable|string',
        ]);

        $list->update([
            'title' => $request->title,
            'due_date' => $request->due_date,
            'description' => $request->description,
        ]);

        return redirect()->route('tasks.show')->with('success', 'List updated successfully');
    }

    public function destroy(TaskList $list)
    {
        if ($list->task->user_id != Auth::id()) {
            return redirect()->route('tasks.show')->with('error', 'You are not authorized to delete this list');
        }

        $list->delete();
        return redirect()->route('tasks.show')->with('success', 'List deleted successfully');
    }

    public function events()
    {
        $lists = TaskList::whereHas('task', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();

        $events = [];

        foreach ($lists as $list) {
            $events[] = [
                'title' => $list->title,
                'start' => $list->due_date,
                'url' => route('lists.edit', $list->id),
            ];
        }

        return response()->json($events);
    }
}
