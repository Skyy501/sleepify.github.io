<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SleepTestController;

use App\Http\Controllers\TemplateController;

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
