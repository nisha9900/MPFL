<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.home');
    }
  public function create(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'task_topic' => 'required|string|max:255',
        'detail' => 'required|string',
    ]);

    // Create a new task instance
    $task = new Task();
    $task->task_topic = $request->input('task_topic');
    $task->detail = $request->input('detail');
    $task->save();

    // Optionally, you can check if the task was saved successfully
    if ($task->wasRecentlyCreated) {
        $redirectTo = '/admin/home';
        return redirect()->back()->with('success', 'Task created successfully!');
    } else {
        return redirect()->back()->with('danger', 'Failed to create task!');
    }
}


}