<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; 
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\AuthController;


class UserTaskController extends Controller
{
     use AuthenticatesUsers;
public function index()
{
 
        // Retrieve userIdFromSession from the session
        // $userIdFromSession = session('user_id');
        // dd($userIdFromSession);
        // dd(session()->all(), $userIdFromSession);
        // Now you can use $userIdFromSession in your controller logic
        // For example, you can pass it to your view or use it for any other purpose
        
        // Example: Pass $userIdFromSession to the view
        // return redirect()->route('tasks.user.index');
        // if($userIdFromSession){
            //   $userId = Auth::id();
            //   dd(userId);
             $userId = auth()->id();
            // dd( $userId);
        
        // Retrieve the user ID from the session
        
    
    // Fetch tasks associated with the authenticated user
    // $tasks = Task::where('email', $userIdFromSession)->get();
            
       $tasks = Task::where('user_id', $userId)->get();
    //    dd($tasks);
        // $tasks = Task::get();
        return view('task.user-index', ['tasks' => $tasks, 'userId' => $userId]);
        // }
    }
   
}






    