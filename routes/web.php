<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/posts', [PostController::class, 'listpost'])->name('posts');
Route::get('/posts', [PostController::class, 'search'])->name('posts.search');

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});


Route::get('/dashboard/', [MainController::class, 'view'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/posts', [PostController::class, 'index'])->name('dashboard.posts.index');
    Route::get('/dashboard/posts/create', [PostController::class, 'create'])->name('dashboard.posts.create');
    Route::post('/dashboard/posts/create', [PostController::class, 'store'])->name('dashboard.posts.create');
    Route::get('/dashboard/posts/{id}', [PostController::class, 'edit'])->name('dashboard.posts.edit');
    Route::put('/dashboard/posts/{id}', [PostController::class, 'update'])->name('dashboard.posts.update');
    Route::delete('/dashboard/posts/delete/{id}', [PostController::class, 'delete'])->name('dashboard.posts.delete');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::resource('posts', PostController::class);
});

Route::get('/post/{slug}', [PostController::class, 'show'])->name('post');

Route::get('/author/{username}', [PostController::class, 'postsAuthor'])->name('author');




Route::middleware('auth')->group(function () {
    Route::get('/dashboard/users', [UserController::class, 'index'])->name('dashboard.users.index');
    Route::get('/dashboard/users/create', [UserController::class, 'create'])->name('dashboard.users.create');
    Route::post('/dashboard/users/create', [UserController::class, 'store'])->name('dashboard.users.store');
    Route::get('/dashboard/users/{id}/edit', [UserController::class, 'edit'])->name('dashboard.users.edit');
    Route::put('/dashboard/users/{id}', [UserController::class, 'update'])->name('dashboard.users.update');
    Route::delete('/dashboard/users/{id}', [UserController::class, 'destroy'])->name('dashboard.users.destroy');
});



require __DIR__.'/auth.php';
