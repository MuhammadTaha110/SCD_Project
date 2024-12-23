<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    // Show the task creation form
    public function create()
    {
        $users = User::all(); // Fetch all users
        return view('tasks.create', compact('users')); // Pass users to the view
    }

    // Store the new task in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'priority' => 'required|string|in:low,medium,high',
            'assigned_to' => 'required|exists:users,id', // Ensure assigned_to is valid
        ]);

        // Create a new task
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'priority' => $request->priority,
            'assigned_by' => auth()->id(), // Current logged-in user
            'assigned_to' => $request->assigned_to, // Assigned user
        ]);

        // Redirect with a success message
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    }

    // Display all tasks
    public function index(Request $request)
    {
        $query = Task::query();

        // Apply search filter
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        // Apply priority filter
        if ($request->filled('priority')) {
            $query->where('priority', $request->priority);
        }

        // Apply assigned_to filter
        if ($request->filled('assigned_to')) {
            $query->where('assigned_to', $request->assigned_to);
        }

        // Apply due_date filter
        if ($request->filled('due_date')) {
            $query->whereDate('due_date', $request->due_date);
        }

        $tasks = $query->get();
        $users = User::all();

        return view('tasks.index', compact('tasks', 'users'));
    }
    // Show the assign task form
    public function assignForm($id)
    {
        $task = Task::findOrFail($id); // Retrieve the task
        $users = User::all(); // Get all users

        return view('tasks.assign', compact('task', 'users'));
    }

    // Assign a task to a user
    public function assign(Request $request, $id)
    {
        $task = Task::findOrFail($id); // Find the task

        // Validate inputs
        $request->validate([
            'assigned_to' => 'required|exists:users,id',
        ]);

        // Update task assignment
        $task->assigned_by = auth()->id(); // Current user
        $task->assigned_to = $request->assigned_to;
        $task->save();

        return redirect()->route('tasks.index')->with('success', 'Task assigned successfully!');
    }

    // Search tasks by title
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Search tasks by title or assigned user
        $tasks = Task::with(['assignedBy', 'assignedTo'])
            ->where('title', 'LIKE', '%' . $searchTerm . '%')
            ->orWhereHas('assignedTo', function ($query) use ($searchTerm) {
                $query->where('name', 'LIKE', '%' . $searchTerm . '%');
            })
            ->get();

        return view('tasks.index', compact('tasks'))->with('searchTerm', $searchTerm);
    }

    public function destroy($id)
{
    $task = Task::findOrFail($id); // Find the task by ID
    $task->delete(); // Delete the task

    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
}


public function edit($id)
{
    $task = Task::findOrFail($id); // Find the task by ID or fail
    $users = User::all(); // Get the list of users for assignment

    return view('tasks.edit', compact('task', 'users')); // Pass the task and users to the edit view
}


public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'due_date' => 'nullable|date',
        'priority' => 'required|string|in:low,medium,high',
        'assigned_by' => 'required|exists:users,id',
        'assigned_to' => 'required|exists:users,id',
    ]);

    $task = Task::findOrFail($id); // Find the task by ID

    // Update the task
    $task->update([
        'title' => $request->title,
        'description' => $request->description,
        'due_date' => $request->due_date,
        'priority' => $request->priority,
        'assigned_by' => $request->assigned_by,
        'assigned_to' => $request->assigned_to,
    ]);

   

    // Redirect with success message
    return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
}

public function myTasks()
{
    // Fetch tasks assigned to the logged-in user
    $tasks = Task::where('assigned_to', Auth::id())->get();

    return view('tasks.myTasks', compact('tasks'));
}


public function updateStatus(Request $request, $id)
{
    $task = Task::findOrFail($id);

    // Only allow the user to update the status of tasks assigned to them
    if ($task->assigned_to !== auth()->id()) {
        return redirect()->route('tasks.myTasks')->with('error', 'You cannot update this task status.');
    }

    // Validate the status input
    $request->validate([
        'status' => 'required|in:pending,in_progress,completed',
    ]);

    // Update task status
    $task->status = $request->status;
    $task->save();

    return redirect()->route('tasks.myTasks')->with('success', 'Task status updated successfully!');
}


public function showAssignedTasks(Request $request)
{
    // Fetching the users who can be assigned tasks (You can customize this if needed)
    $users = User::all(); 

    // Fetching tasks with filters applied (search, priority, status, assigned_to)
    $tasks = Task::query();

    if ($request->has('search') && $request->search) {
        $tasks = $tasks->where('title', 'like', '%' . $request->search . '%')
                       ->orWhere('description', 'like', '%' . $request->search . '%');
    }

    if ($request->has('priority') && $request->priority) {
        $tasks = $tasks->where('priority', $request->priority);
    }

    if ($request->has('status') && $request->status) {
        $tasks = $tasks->where('status', $request->status);
    }

    if ($request->has('assigned_to') && $request->assigned_to) {
        $tasks = $tasks->where('assigned_to', $request->assigned_to);
    }

    $tasks = $tasks->get();

    // Pass users and tasks to the view
    return view('tasks.assigned', compact('tasks', 'users'));
}







}
