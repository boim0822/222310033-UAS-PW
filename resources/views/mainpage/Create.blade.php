@extends('layouts.indexnav')

@section('main-content-nav')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="..\assets\media\css\Create.css">

<div class="container">
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="title" placeholder="Title" aria-label="Lorem Ipsum">
        </div>
        <div class="input-group mb-3">
            <textarea class="form-control" name="list" placeholder="Task List"></textarea>
        </div>
        <div class="categories mb-3">
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="date mb-3">
            <label class="form-label">Date</label>
            <input type="date" class="form-control" name="reminder_date">
        </div>
        <div class="buttons">
            <button class="btn btn-secondary" type="reset">Cancel</button>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>
</div>

@endsection
