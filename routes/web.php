<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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

// Route::middleware(['auth' ,  'verified'*/])->get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{category}/posts', [HomeController::class, 'postsByCategory'])
    ->name('category.posts');

Route::get('changeLanguage/{lang}', [HomeController::class, 'changeLanguage'])
    ->name('language.change');

    Route::resource('posts', PostController::class);


Route::prefix('admin')->group(function () {


    Route::middleware('admin')->group(function () {

        Route::get('dashboard', [AdminController::class, 'index'])->name('admin.index');

        Route::post('logout', [AdminController::class, 'logout'])->name('admin.logout');
    });

    Route::get('login', [AdminController::class, 'loginForm'])->name('admin.loginForm');
    Route::post('login', [AdminController::class, 'loginForm'])->name('admin.login');
});
