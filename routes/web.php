<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

<<<<<<< Updated upstream
// Additional route for TemplateController (if necessary)
Route::get('/', [TemplateController::class, 'index']);
// Route for displaying the form

Route::get('/sleep-test', [SleepTestController::class, 'index'])->name('sleep-test.index');
Route::post('/sleep-test', [SleepTestController::class, 'predict'])->name('sleep-test.predict');
=======
Route::get('/', function () {
    return view('home');
});
Route::get('/sleeptest', [SleepTestController::class, 'index'])->name('sleeptest.index');
Route::post('/sleeptest', [SleepTestController::class, 'predict'])->name('sleeptest.predict');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

require __DIR__.'/auth.php';
>>>>>>> Stashed changes
