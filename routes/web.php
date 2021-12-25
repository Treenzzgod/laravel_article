<?php

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use Cviebrock\EloquentSluggable\Services\SlugService;

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

Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Dashboard */
Route::get('/dashboard/category',[CategoryController::class, 'tampil'])->name('category.index');
Route::delete('/dashboard/category/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/dashboard/category/create',[CategoryController::class, 'create'])->name('category.create');
Route::post('/dashboard/category/create',[CategoryController::class, 'store'])->name('category.store');
Route::resource('dashboard', DashboardController::class);

/* Post */
Route::get('/post/favorite', [PostController::class, 'favorite']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'search'])->name('search');
Route::get('/post/{post:slug}', [PostController::class, 'show']);

/* Category */
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');


