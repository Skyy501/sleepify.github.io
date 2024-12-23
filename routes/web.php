<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SleepTestController;

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| Routes are loaded by the RouteServiceProvider within a group.
| Create something great!
*/

// Additional route for TemplateController (if necessary)
Route::get('/', [TemplateController::class,'index']);
// Route for displaying the form
Route::get('/sleeptest', [SleepTestController::class, 'index'])->name('sleeptest.index');
Route::post('/sleeptest', [SleepTestController::class, 'predict'])->name('sleeptest.predict');
// Route for displaying the login form
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route for displaying the registration form
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Route for displaying the user profile
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.show');
