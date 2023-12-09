<?php

use App\Http\Controllers\TutorialController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\CommentController;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

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
//Route::get('/editor', [App\Http\Controllers\HomeController::class, 'editor'])->name('editor');

Route::get('/teachers', [App\Http\Controllers\HomeController::class, 'teacher'])->name('teachers');

Route::get('/get_token', function () {
    return csrf_token();
});


Route::get('/get_session', function () {
    $graph = request()->cookie('graph_id');
    response('deleted')->cookie('graph_id', null, -1);
    return $graph;
});

Route::get('/delete_cookie', [App\Http\Controllers\HomeController::class, 'deleteCoo']);
/*
Route::get('/delete_cookie', function () {
    $cookie = Cookie::forget('graph_id');
    return response('deleted')->withCookie($cookie);
});*/

Route::get('/tutorial_id', function () {
    $tutorial_id = request()->cookie('tutorial_id');
    response('deleted')->cookie('tutorial_id', null, -1);
    return $tutorial_id;
});

Route::resource('/editors', GraphController::class);

Route::get('/editor/{id}', [App\Http\Controllers\GraphController::class, 'get_graph']);




Route::get('/cookies', function () {
    $cookies = request()->cookies;

    foreach ($cookies as $name => $value) {
        echo $name . ': ' . $value . '<br>';
    }
});