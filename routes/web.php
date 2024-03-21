<?php
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){ return redirect()->route('login'); });
// Route::middleware(['admin'])->group(function () {
//     Route::get('/register', function () {
//         // Your registration logic here
//     })->name('register');
// });
 




// Route::get("/", [DemoController::class,'index']);
// Route::get("/login", [AuthController::class,'auth']);
//user Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/home",[HomeController::class,'userHome'])->name('home');
// });
// //admin Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/admin/home",[HomeController::class,'adminHome'])->name('index.admin');
// });
// Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
// Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('admin');
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register')->middleware('admin');
Route::get('/dashboard', [App\Http\Controllers\Auth\DashboardController::class, 'index'])->name('dashboard')->middleware('admin');
// Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
Route::post('/task', [App\Http\Controllers\TaskController::class, 'index'])->name('task')->middleware('admin');

// returns the home page with all posts
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.admin.index');
// returns the form for adding a post
Route::get('/tasks/create',  [App\Http\Controllers\TaskController::class, 'create'])->name('tasks.create');
// adds a post to the database
Route::post('/tasks/store',  [App\Http\Controllers\TaskController::class, 'store'])->name('tasks.store');
// returns a page that shows a full post
// Route::get('/posts/{post}', PostController::class .'@show')->name('posts.show');
// // returns the form for editing a post
// Route::get('/posts/{post}/edit', PostController::class .'@edit')->name('posts.edit');
// // updates a post
// Route::put('/posts/{post}', PostController::class .'@update')->name('posts.update');
// // deletes a post
// Route::delete('/posts/{post}', PostController::class .'@destroy')->name('posts.destroy');
// // Auth::routes();

// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/home",[HomeController::class,'userHome'])->name('home');
// });
// //admin Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/admin/home",[HomeController::class,'adminHome'])->name('index.admin');
// });