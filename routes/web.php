<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('backend.dashboard');
});
// Route::get('/home', function () {
//     return view('frontend.home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::prefix('admin/')->middleware(['auth'])->group(function () {
    Route::get('create', [PostController::class, 'create'])->name('post.create');
    Route::post('insert', [PostController::class, 'store'])->name('post.store');
    Route::get('manage', [PostController::class, 'index'])->name('post.manage');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('post.edit');
    Route::post('update/{id}', [PostController::class, 'update'])->name('post.update');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('post.delete');
});
