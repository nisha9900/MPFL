<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view ('home');
    }
    public function adminHome(){
        return view ('admin-home');
    }
       public function create(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'task_topic' => 'required|string|max:255',
        'detail' => 'required|string',
    ]);

    // Create a new task instance
    $task = Task::create($validatedData);

    if ($task) {
        return redirect()->back()->with('success', 'Task created successfully!');
    } else {
        return redirect()->back()->with('danger', 'Failed to create task!');
    }
}
}