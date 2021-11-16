<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/translate', function () {

    return GoogleTranslate::trans('i love u', 'bn', 'en');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function(){

    Route::get('/video_chat', [App\Http\Controllers\VideoChatController::class, 'index'])->name('video_chat');
    Route::post('auth/video_chat', [App\Http\Controllers\VideoChatController::class, 'auth'])->name('auth_video_chat');
    // Route::get('video_chat', 'VideoChatController@index');
    // Route::post('auth/video_chat', 'VideoChatController@auth');
});