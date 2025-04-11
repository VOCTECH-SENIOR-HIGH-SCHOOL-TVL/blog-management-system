<?php

use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::auth();

Route::group([], function() {
  Route::resource('/posts', PostController::class);

  // Route for Main Pages
  Route::get('/', [HomeController::class, 'redirect']);
  Route::get('/homepage', [HomeController::class, 'index'])->name('homepage');
  Route::get('/contact-me', [HomeController::class, 'contact'])->name('contact-me');
  Route::get('/about-me', [HomeController::class, 'about'])->name('about-me');
  Route::get('/search', [PostController::class, 'search'])->name('search');
  Route::get('/profile', [HomeController::class, 'profile'])->name('profile-index');
  Route::get('/create-blog', [PostController::class, 'createblog'])->name('createblog');


  //Routes for Login & Register Page
  Route::post('/register', [RegisterController::class, 'register'])->name('register');
  Route::post('/store', [RegisterController::class, 'store'])->name('store.user');
  Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
  Route::post('/login', [LoginController::class, 'login']);
  Route::get('/logout', [LoginController::class, 'logout']);
});

// Routes for Dashboard Page
Route::prefix('dashboard')->group(function () {
  Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
  Route::get('/users', [UserController::class, 'index'])->name('users.index');
  Route::resource('/analytics', AnalyticsController::class);
  Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Routes for Post Page
Route::prefix('post')->group(function () {
  Route::get('/{slug}', [HomePageController::class, 'show'])->name('post.index');
  Route::get('/edit/{slug}', [PostController::class, 'edit'])->name('post.edit');
  Route::post('/store', [PostController::class, 'store'])->name('post.store');
  Route::put('/{id}', [PostController::class, 'update'])->name('post.update');
  Route::delete('/{id}', [PostController::class, 'destroy'])->name('post.delete');
});

// Routes for Contact Page
Route::prefix('email')->group(function () {
  Route::get('/create', [EmailController::class, 'create']);
  Route::post('/send', [EmailController::class, 'sendEmail'])->name('send.email');
});

//Routes for User Page
Route::prefix('user')->group(function () {
  Route::get('/info/{id}', [UserController::class, 'show'])->name('custom.show');
  Route::get('/user/{id}', [HomeController::class, 'showProfile'])->name('user.profile');
  Route::get('profile/users/{id}', [UserController::class, 'show'])->name('users.show');

  // Route for User Settings Page
  Route::get('/profile-settings', [UserController::class, 'settings'])->name('user.settings');
  Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update');
});

// Like Section
Route::post('/like', [PostController::class, 'like'])->name('like');
Route::post('/unlike', [PostController::class, 'unlike'])->name('unlike');


Route::get('/api-key', function () {
  $apiKey = env('API_KEY');
  return "Your API Key is: " . $apiKey;
});