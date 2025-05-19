<?php

use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('auth.login');
    return view('welcome');
});

Route::get('login', [AuthController::class , 'index'])->name('login');
Route::get('register', [AuthController::class , 'register'])->name('register');
Route::post('register', [AuthController::class , 'register_user'])->name('register_user');
Route::post('login_user', [AuthController::class , 'login_user'])->name('login_user');
Route::post('logout', [AuthController::class , 'logout'])->name('logout');
Route::get('forgetpassword', [AuthController::class , 'forgetpassword'])->name('forgetpassword');
Route::post('forgot_password', [AuthController::class, 'store']);
Route::get('emailsend', [AuthController::class , 'emailsend'])->name('emailsend');
Route::get('reset-password/{token}', [AuthController::class, 'create'])->name('password.reset');
Route::post('reset-password', [AuthController::class , 'reset'])->name('password.store');


// Route::get('/dashboard', function () {
//     return view('welcome');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [HomeController::class , 'index'])->name('home');
    Route::get('category' , [HomeController::class, 'category'])->name('category');
    Route::get('music' , [HomeController::class, 'music'])->name('music');
    Route::get('sport' , [HomeController::class, 'sport'])->name('sport');
    Route::get('sites' , [HomeController::class, 'sites'])->name('sites');
    Route::get('books' , [HomeController::class, 'books'])->name('books');
    Route::get('diary' , [HomeController::class, 'diary'])->name('diary');
    Route::get('chat' , [HomeController::class, 'chat'])->name('chat');
});


require __DIR__ . '/auth.php';
