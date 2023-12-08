<?php

use App\Http\Controllers\TutorialController;
use App\Http\Controllers\CommentController;
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
    return view('welcome');
});

Auth::routes();

Route::resource('/tutorials', TutorialController::class)->name('*','tutorials');
Route::resource('/comments', CommentController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/editor', [App\Http\Controllers\HomeController::class, 'editor'])->name('editor');

Route::get('/teachers', [App\Http\Controllers\HomeController::class, 'teacher'])->name('teachers');

Route::get('/get_token', function () {
    return csrf_token();
});

Route::post('/send', function () {
    return "get send from hiiiiiiiiiiii!";
});

Route::get('/get_g', function () {
    return csrf_token();
});