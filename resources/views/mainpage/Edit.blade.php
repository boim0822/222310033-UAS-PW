@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="{{ asset('assets/media/css/Edit.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="col-10">
    <div class="main-content">
        <div class="header">
            <h2>Edit Task: {{ $task->title }}</h2>
        </div>
        <div class="edit-container">
            <form action="{{ route('tasks.update', $task->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="taskTitle" class="form-label">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="task_title" value="{{ $task->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="categoryTitle" class="form-label">Category Title</label>
                    <select class="form-control" id="categoryTitle" name="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $task->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>

@endsection
