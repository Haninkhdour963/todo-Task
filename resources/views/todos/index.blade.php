<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>To-Do List</h1>

    <!-- Add Task Form -->
    <form action="{{ url('/') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="task" class="form-control" placeholder="Enter a new task" required>
            <button class="btn btn-primary" type="submit">Add</button>
        </div>
    </form>

    <!-- To-Do List -->
    <ul class="list-group">
        @foreach ($todos as $todo)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="{{ $todo->completed ? 'text-decoration-line-through' : '' }}">
                        {{ $todo->task }}
                    </span>
                <div>
                    <form action="{{ url('/' . $todo->id . '/toggle') }}" method="POST" class="d-inline">
                        @csrf
                        @method('PUT')
                        <button class="btn btn-sm {{ $todo->completed ? 'btn-warning' : 'btn-success' }}" type="submit">
                            {{ $todo->completed ? 'Undo' : 'Complete' }}
                        </button>
                    </form>
                    <form action="{{ url('/' . $todo->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
