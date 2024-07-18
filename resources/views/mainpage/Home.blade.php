<!-- resources/views/mainpage/Show.blade.php -->

@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="../assets/media/css/Home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="col-10">
    <div class="main-content">
        <div class="header">
            <input type="text" placeholder="Search by lists...">
            <i class="bi bi-search"></i>
        </div>
        <div class="tasks">
            <h2>Your Tasks for Today</h2>
            <div class="task-grid">
                    @foreach($tasks as $task)
                        @foreach($task->lists as $taskList)
                            @php
                                $due_date = \Carbon\Carbon::parse($taskList->due_date);
                                $is_today = $due_date->isToday();
                            @endphp
                            <a href="{{ route('lists.edit', $taskList->id) }}" class="edit-list-link">
                                <div class="task-list">
                                    <div class="task-item">
                                        <span>{{ $taskList->title }}</span>
                                        <div class="task-date {{ $is_today ? 'task-today' : '' }}">
                                            <input type="checkbox" class="checkbox-green" data-title="{{ $taskList->title }}">
                                            {{ $due_date->format('d M, Y') }}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('.checkbox-green');

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const taskDate = this.closest('.task-date');
                const taskTitle = this.dataset.title;
                if (this.checked) {
                    taskDate.classList.add('checkbox-checked');
                    alert(taskTitle + ' is marked as completed!');
                } else {
                    taskDate.classList.remove('checkbox-checked');
                    alert(taskTitle + ' is marked as not completed!');
                }
            });
        });
    });
</script>

@endsection
