@extends('layout')

@section('title', 'Add New Task')

@section('content')
<div class="task-form-container">
    <h2>Add New Task</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Task Form -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <!-- Task Title -->
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required placeholder="Enter task title">

        <!-- Description -->
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" placeholder="Enter task description (optional)"></textarea>

        <!-- Due Date -->
        <label for="due_date">Due Date:</label>
        <input type="date" id="due_date" name="due_date">

        <!-- Priority -->
        <label for="priority">Priority:</label>
        <select id="priority" name="priority" required>
            <option value="low">Low</option>
            <option value="medium">Medium</option>
            <option value="high">High</option>
        </select>


        <!-- Assigned To -->
        <label for="assigned_to">Assigned To:</label>
        <select id="assigned_to" name="assigned_to" required>
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>

        <!-- Submit Button -->
        <button class="submit-btn" type="submit">Add Task</button>
    </form></div>
@endsection
