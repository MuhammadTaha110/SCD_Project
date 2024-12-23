@extends('layout')

@section('title', 'Edit Task')

@section('content')
<div class="task-form-container">
    <h2>Edit Task</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for updating a resource -->

        <!-- Task Title -->
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required placeholder="Enter task title">

        <!-- Description -->
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" placeholder="Enter task description (optional)">{{ old('description', $task->description) }}</textarea>

        <!-- Due Date -->
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date ? $task->due_date->format('Y-m-d') : '') }}">

        <!-- Priority -->
        <label for="priority">Priority:</label>
        <select id="priority" name="priority" required>
            <option value="low" {{ $task->priority === 'low' ? 'selected' : '' }}>Low</option>
            <option value="medium" {{ $task->priority === 'medium' ? 'selected' : '' }}>Medium</option>
            <option value="high" {{ $task->priority === 'high' ? 'selected' : '' }}>High</option>
        </select>

        <!-- Assigned By -->
        <label for="assigned_by">Assigned By:</label>
        <select id="assigned_by" name="assigned_by" required>
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $task->assigned_by == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        <!-- Assigned To -->
        <label for="assigned_to">Assigned To:</label>
        <select id="assigned_to" name="assigned_to" required>
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $task->assigned_to == $user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
            @endforeach
        </select>

        <!-- Submit Button -->
        <button class="submit-btn" type="submit">Update Task</button>
    </form>
</div>
@endsection
