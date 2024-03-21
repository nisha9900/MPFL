<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index(){
    // $tasks = Task::get();
    return view('task.admin-index',[
        'tasks' => Task::get()
    ]);
}

 public function create(){
  return view('task.create');
 }

public function store(Request $request)
{
    // Validate data
    $request->validate([
        'task_topic' => 'required',
        'detail' => 'required',
        'file' => 'required|mimes:jpeg,png,jpg,gif,pdf|max:2048', // Adjust file validation rules as needed
    ]);

    // Upload file
    $fileName = time(). '.' .$request->file('file')->extension();
    $request->file('file')->move(public_path('task'), $fileName);

    // Save task details to database
    $task = new Task;
    $task->file = $fileName;
    $task->task_topic = $request->task_topic;
    $task->detail = $request->detail;
    $task->save();

    session()->flash('success', 'Task added successfully.');
    return back();
}


}