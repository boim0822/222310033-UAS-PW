<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
    <link rel="stylesheet" href="{{ asset('assets/media/css/Create.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="col-10 container d-flex justify-content-center">
        <div class="main-content">
            <div class="create text-center">
                <form method="POST" action="{{ route('tasks.store') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title" placeholder="Title task" required id="title-task">
                        @if ($errors->has('title'))
                        <div class="text-danger">{{ $errors->first('title') }}</div>
                        @endif
                    </div>
                    <div class="buttons d-flex flex-column">
                        <button id="create-button" class="btn mb-2" type="submit">Create</button>
                        <button id="cancel-button" class="btn" type="button" onclick="window.location.href='{{ url('home') }}'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('title-task').addEventListener('input', function() {
            var createButton = document.getElementById('create-button');
            var cancelButton = document.getElementById('cancel-button');
            if (this.value.trim() !== '') {
                createButton.classList.add('text-changed');
                cancelButton.classList.remove('text-changed');
            } else {
                createButton.classList.remove('text-changed');
                cancelButton.classList.add('text-changed');
            }
        });
    </script>
</body>
</html>
