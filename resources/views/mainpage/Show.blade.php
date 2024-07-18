@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="{{ asset('assets/media/css/Show.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="col-10">
    <div class="main-content">
        <div class="header">
            <input type="text" placeholder="Search by tasks...">
            <i class="bi bi-search"></i>
        </div>
        <div class="tasks-container">
            <div class="tasks">
                @foreach($tasks as $task)
                    <a href="{{ route('tasks.edit', $task->id) }}" class="task-list-link">
                        <div class="task-card {{ count($task->lists) > 0 ? 'has-lists' : 'no-lists' }}" id="task-card-{{ $task->id }}">
                            <div class="task-header">
                                <h3>{{ $task->title }}</h3>
                                @if($task->category)
                                    <span class="category-label">{{ $task->category->title }}</span>
                                @endif
                            </div>
                            <div class="task-items-container">
                                <div class="task-items">
                                    @foreach($task->lists as $list)
                                        <a href="{{ route('lists.edit', $list->id) }}" class="edit-list-link">
                                            <div class="task-item">
                                                <input type="checkbox">
                                                <span>{{ $list->title }}</span>
                                            </div>
                                        </a>
                                    @endforeach
                                    <div class="task-item add-list">
                                        <a href="{{ route('lists.create', $task->id) }}" class="add-list-link">
                                            <i class="bi bi-plus"></i>
                                            <span>Add list</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
