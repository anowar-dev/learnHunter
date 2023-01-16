<?php

use App\Http\Controllers\firstController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\secondController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('country', function(){
    return view('country');
})->middleware('country');

Route::get('/contact', [firstController::class, 'index'])->name('contact');
Route::post('/student', [firstController::class, 'store'])->name('student.store');
Route::get('/about', [firstController::class, 'about'])->name('about');
Route::get('/test', [secondController::class, 'test']);
Route::get('/laravel', [firstController::class, 'laravel'])->name('laravel');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
