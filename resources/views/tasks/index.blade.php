@extends('layout')

@section('content')
<div class="container view-task">
    <h1 class="view-task-heading">Task List</h1>

    <!-- Filter Form -->
    <form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
        <div class="row align-items-end">
            <!-- Search Field -->
            <div class="col-md-3 mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control py-2" placeholder="Search tasks..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" title="Search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Priority Filter -->
            <div class="col-md-2 mb-3">
                <select name="priority" class="form-select py-2">
                    <option value="">Priority</option>
                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                    <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
                </select>
            </div>

            <!-- Assigned To Filter -->
            <div class="col-md-2 mb-3">
                <select name="assigned_to" class="form-select py-2">
                    <option value="">Assigned To</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ request('assigned_to') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Due Date Range Filter -->
            <div class="col-md-2 mb-3">
                <input type="date" name="due_date" class="form-control py-2" value="{{ request('due_date') }}">
            </div>

            <!-- Filter Button -->
            <div class="col-md-1 mb-3">
                <button class="btn btn-secondary w-100" type="submit"><i class="fa-solid fa-filter"></i></button>
            </div>

            <!-- Clear Filter Button -->
            <div class="col-md-1 mb-3">
                <a href="{{ route('tasks.index') }}" class="btn btn-danger w-100"><i class="fa-solid fa-x"></i></a>
            </div>
        </div>
    </form>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- No Tasks Message -->
    @if ($tasks->isEmpty())
        <p>No tasks found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Priority</th>
                    <th>Assigned By</th>
                    <th>Assigned To</th>
                    <th>Actions</th>
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
                        <td>
                            {{ $task->assignedBy ? $task->assignedBy->name : 'N/A' }}
                        </td>
                        <td>
                            {{ $task->assignedTo ? $task->assignedTo->name : 'N/A' }}
                        </td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
