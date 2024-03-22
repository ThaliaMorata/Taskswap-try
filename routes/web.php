<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\findTask;
use App\Http\Controllers\post_Controller;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [AuthenticatedSessionController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/Post Task', function () {
    return view('Post_task');
   
})->middleware(['auth', 'verified'])->name('Post_task');

Route::get('/Inbox', function () {
    return view('dashboard.inbox');
   
})->middleware(['auth', 'verified'])->name('dashboard.inbox');

Route::get('/Task Status', function () {
    return view('dashboard.taskStatus');
   
})->middleware(['auth', 'verified'])->name('dashboard.taskStatus');

Route::get('/Transaction History', function () {
    return view('dashboard.transactionHistory');
   
})->middleware(['auth', 'verified'])->name('dashboard.transactionHistory');


Route::get('/My Portfolio', function () {
    return view('dashboard.portfolio');
   
})->middleware(['auth', 'verified'])->name('dashboard.portfolio');


Route::get('/Token Page', function () {
    return view('Token_Page');
   
})->middleware(['auth', 'verified'])->name('Token_Page');


Route::get('/terms', function () {
    return view('terms');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/privacy', function () {
    return view('privacy    ');
});




Route::middleware('auth')->group(function () {
    Route::get('/Edit Profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/Edit Profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/Edit Profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/Post Task', [post_Controller::class, 'index'])->name('post.index');
    Route::post('/Post Task', [post_Controller::class, 'store'])->name('post.store');

});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [post_Controller::class, 'index'])->name('dashboard');
    Route::post('/dashboard', [post_Controller::class, 'store'])->name('post.store');
    Route::put('/dashboard', [post_Controller::class, 'update'])->name('post.edit');
    Route::delete('/dashboard', [post_Controller::class, 'delete'])->name('post.delete');

});

Route::middleware('auth')->group(function () {
    Route::get('/Find Task', [findTask::class, 'index'])->name('Find_Task');
    
});


require __DIR__.'/auth.php';
