<?php
use App\Http\Controllers\DemoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::get('/', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});



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

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Auth::routes();

// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/home",[HomeController::class,'userHome'])->name('home');
// });
// //admin Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get("/admin/home",[HomeController::class,'adminHome'])->name('index.admin');
// });
