<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\User\UsersController;
use App\Http\Controllers\Frontend\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [App\Http\Controllers\TasksController::class, 'home'])->name('tasks.home');

// Route::get('/about', [App\Http\Controllers\TasksController::class, 'about'])->name('about');
// Route::get('/contact', [App\Http\Controllers\TasksController::class, 'contact'])->name('contact');
// Route::resource('tasks', TasksController::class);


    //Admin Routes
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::get('/users', [UsersController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
        Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
        Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    });

    // Frontend Routes

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/posts/{id}', [PagesController::class, 'postShow'])->name('posts.show');
Route::get('/categories/{id}', [PagesController::class, 'categoriesShow'])->name('categories.index');


// Route::get('/test', function () {
//     return 'testing';
// });
// Route::post('/test-post-store', function () {
//     return request()->all();
// })->name('test-post');

// Route::put('/test-post-update/{studentID}', function () {
//     return request()->all();
// })->name('test-post-update');

// Route::put('/test-post-delete/{studentID}', function () {
//     return 'deleted';
// })->name('test-post-delete');

// Route::put('/faculty/{department}/{faculty}', function () {
//     return 'faculty details';
// })->name('route-multiple-params');

// Auth::routes();
// Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');


// Route::get('/posts', [App\Http\Controllers\PagesController::class, 'posts'])->name('posts');
// // ->name('home')
// Route::get('/posts-view-single/{id}', [App\Http\Controllers\PagesController::class, 'show'])->name('posts.show');

// Route::get('/posts-view', [App\Http\Controllers\PostsController::class, 'index'])->name('posts.view');

// Route::post('/posts/store', [App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');


