<!-- resources/views/tasks/assigned.blade.php -->

@extends('layout')

@section('content')
<div class="container view-task">
    <h1 class="view-task-heading">Tasks Assigned by You</h1>

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
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
