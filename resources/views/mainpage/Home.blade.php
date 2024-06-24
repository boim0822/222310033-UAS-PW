@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="..\assets\media\css\Home.css">

<div class="col-10">
    <div class="main-content">
        <div class="header">
            <div>
                <h1>Lupa.inc</h1>
            </div>
            <input type="text" placeholder="Search...">
        </div>
        <div class="tasks">
            <h2>My Tasks</h2>
            @foreach($tasks as $task)
                <div class="task-list">
                    <h3>{{ $task->title }}</h3>
                    <h4>{{ $task->category->name }}</h4>
                    @foreach(explode("\n", $task->list) as $item)
                        <div class="task">
                            <input type="checkbox">
                            <span style="font-size: 20px">{{ $item }}</span>
                            <span class="task-date">{{ \Carbon\Carbon::parse($task->reminder_date)->format('d M, Y') }}</span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
