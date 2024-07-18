@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="{{ asset('assets/media/css/CreateList.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="col-10">
    <div class="main-content">
        <h2>Add List to Task: {{ $task->title }}</h2>
        <form action="{{ route('lists.store', $task->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="listTitle" class="form-label">Title</label>
                <input type="text" class="form-control" id="listTitle" name="title" required>
            </div>
            <div class="mb-3">
                <label for="dueDate" class="form-label">Due Date</label>
                <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="dueDate" name="due_date" value="{{ old('due_date') }}">
                @error('due_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dueDateField = document.getElementById('dueDate') || document.getElementById('due_date');
        var form = dueDateField.closest('form');
        var errorMessage = document.createElement('div');
        errorMessage.classList.add('invalid-feedback');
        dueDateField.parentNode.appendChild(errorMessage);

        form.addEventListener('submit', function (event) {
            var dueDateValue = dueDateField.value;
            var today = new Date().toISOString().split('T')[0];

            if (dueDateValue < today) {
                errorMessage.textContent = 'Date cannot be in the past';
                dueDateField.classList.add('is-invalid');
                event.preventDefault();
            } else {
                errorMessage.textContent = '';
                dueDateField.classList.remove('is-invalid');
            }
        });
    });
</script>



@endsection
