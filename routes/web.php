<?php

    use App\Http\Controllers\BlogController;
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
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/blog/{blog}', [BlogController::class, 'show']);
    Route::post('subscription', [BlogController::class, 'store']);
    Route::post('comment/{blog_id}', [CommentController::class, 'store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
