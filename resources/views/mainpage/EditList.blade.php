@extends('layouts.indexnav')

@section('main-content-nav')

<link rel="stylesheet" href="{{ asset('assets/media/css/EditList.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div class="col-10">
    <div class="main-content">
        <div class="header">
            <h2>Edit List: {{ $list->title }}</h2>
        </div>
        <form action="{{ route('lists.update', $list->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ $list->title }}" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dueDate" class="form-label">Due Date</label>
                <input type="date" class="form-control @error('due_date') is-invalid @enderror" id="dueDate" name="due_date" value="{{ old('due_date', $list->due_date) }}">
                @error('due_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description"><i class="bi bi-justify-left"></i> Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Add a more detailed description">{{ $list->description }}</textarea>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Update List</button>
        </form>
        <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            </div>
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
