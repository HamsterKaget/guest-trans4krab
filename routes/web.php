<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/register-event', [AppController::class, 'viewRegister'])->name('register-event');
Route::post('/submit-register', [AppController::class, 'register'])->name('submit-register');
Route::get('/login-event', [AppController::class, 'viewLogin'])->name('login-event');
Route::post('/check-login', [AppController::class, 'show'])->name('check-login');
Route::get('/submit-login', [AppController::class, 'login'])->name('submit-login');
Route::get('/success', [AppController::class, 'success'])->name('success');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/getData', [AdminController::class, 'getData'])->name('dashboard.getData');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
