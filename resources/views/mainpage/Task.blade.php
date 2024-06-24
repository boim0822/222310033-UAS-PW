@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="..\assets\media\css\Task.css">

<div class="col-10">
    <div class="main-content">
<div class="header">
    <div>
        <h1>Lupa.inc</h1>
    </div>
    <input type="text" placeholder="Search...">
</div>
<div class="tasks">
    <div class="task-list">
        <h3>Completed</h3>
        <h4>Title Categories</h4>
        <div class="task">
            <input type="checkbox" checked>
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox" checked>
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox" checked>
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox" checked>
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
    </div>
    <div class="task-list">
        <h3>Incompleted</h3>
        <h4>Title Categories</h4>
        <div class="task">
            <input type="checkbox">
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox">
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox">
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
        <div class="task">
            <input type="checkbox">
            <span>Lorem Ipsum Lorem</span>
            <span class="task-date">15 May, 2024</span>
        </div>
    </div>
</div>
    </div>
</div>

@endsection
