@extends('layout')

@section('content')
<div class="container view-task">
    <h1 class="view-task-heading">My Tasks</h1>

    <!-- Filter and Search Form -->
    <form action="{{ route('tasks.assigned') }}" method="GET" class="mb-4">
        <div class="row">
            <!-- Search Field -->
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search tasks..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit" title="Search">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>

            <!-- Priority Filter -->
            <div class="col-md-2 mb-3">
                <select name="priority" class="form-select">
                    <option value="">Priority</option>
                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                    <option value="medium" {{ request('priority') == 'medium' ? 'selected' : '' }}>Medium</option>
                    <option value="low" {{ request('priority') == 'low' ? 'selected' : '' }}>Low</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div class="col-md-2 mb-3">
                <select name="status" class="form-select">
                    <option value="">Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="overdue" {{ request('status') == 'overdue' ? 'selected' : '' }}>Overdue</option>
                </select>
            </div>

            <!-- Assigned To Filter -->
            <div class="col-md-2 mb-3">
                <select name="assigned_to" class="form-select">
                    <option value="">Assigned To</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ request('assigned_to') == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Filter Button -->
            <div class="col-md-1 mb-3">
                <button class="btn btn-secondary w-100" type="submit"><i class="fa-solid fa-filter"></i></button>
            </div>

            <!-- Clear Filter Button -->
            <div class="col-md-1 mb-3">
                <a href="{{ route('tasks.assigned') }}" class="btn btn-light w-100">Clear</a>
            </div>
        </div>
    </form>

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
