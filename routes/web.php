<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.add');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add');
