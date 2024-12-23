<form method="POST" action="{{ route('tasks.assignTask') }}">
    @csrf

    <!-- Assigned By (Auto-filled with Logged-in User) -->
    <div>
        <label for="assigned_by">Assigned By:</label>
        <input type="text" id="assigned_by" value="{{ auth()->user()->name }}" readonly>
        <input type="hidden" name="assigned_by" value="{{ auth()->id() }}">
    </div>

    <!-- Assigned To Dropdown -->
    <div>
        <label for="assigned_to">Assign To:</label>
        <select name="assigned_to" id="assigned_to" required>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- Task Title -->
    <div>
        <label for="task">Task Title:</label>
        <input type="text" name="title" id="task" required>
    </div>

    <!-- Submit Button -->
    <button type="submit">Assign Task</button>
</form>
