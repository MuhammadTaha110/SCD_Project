@extends('layout')

@section('content')
<div class="container view-task">
    <h1 class="view-task-heading">My Tasks</h1>

    @if ($tasks->isEmpty())
        <p>You have not assigned any tasks yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Priority</th>
                    <th>Assigned To</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->due_date ? $task->due_date->format('Y-m-d') : 'N/A' }}</td>
                        <td>
                            <span class="priority-label {{ strtolower($task->priority) }}">
                                {{ ucfirst($task->priority) }}
                            </span>
                        </td>
                        <td>{{ $task->assignedTo ? $task->assignedTo->name : 'N/A' }}</td>
                        <td>
                            <span class="status-label {{ strtolower($task->status) }}">
                                {{ ucfirst($task->status) }}
                            </span>
                        </td>
                        <td>
                            <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" class="form-control" onchange="this.form.submit()">
                                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="overdue" {{ $task->status == 'overdue' ? 'selected' : '' }}>Overdue</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection