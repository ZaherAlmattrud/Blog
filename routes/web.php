<?php

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

// Route::middleware([/*'auth' ,  'verified'*/])->get('/', function () {
//     return view('home');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('category/{category}/posts', [HomeController::class, 'postsByCategory'])
    ->name('category.posts');


Route::resource('posts', PostController::class);
