<x-layout>
    <div class="container">
        <h1>Tasks</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{  Str::limit($task->description, 50) }}</td>
                    <td>{{ $task->completed ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('tasks.destroy', $task->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{$tasks->links()}}</div>
    </div>
</x-layout>