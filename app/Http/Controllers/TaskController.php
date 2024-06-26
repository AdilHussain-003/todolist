<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display a listing of the tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Store a newly created task in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title,
            'status' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    // Remove the specified task from storage
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

    // Update the specified task's status
    public function updateStatus(Task $task)
    {
        $task->update(['status' => !$task->status]);
        return redirect()->route('tasks.index');
    }
}
