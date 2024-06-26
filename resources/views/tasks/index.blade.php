<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - My Simple To-Do List</title>
    <link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
    
</head>

<body>
    <header>
        <h1>Tasks</h1>
    </header>

    @include('layouts.nav')

    <main>
        <section id="add-task-section">
            <h2>Add New Task</h2>
            <form id="add-task-form" action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <input type="text" name="title" id="task-input" placeholder="Enter task..." required>
                <button type="submit">Add Task</button>
            </form>
        </section>

        <section id="current-task-section">
            <h2>Current Task Info</h2>
            <table id="task-table">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->status ? 'Complete' : 'Incomplete' }}</td>
                            <td>
                                <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit">{{ $task->status ? 'Mark Incomplete' : 'Mark Complete' }}</button>
                                </form>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

    @include('layouts.footer')
</body>

</html>
