<?php

use Illuminate\Support\Facades\Route;
use Stichoza\GoogleTranslate\GoogleTranslate;

Route::get('/', function () {

    return GoogleTranslate::trans('i love u', 'bn', 'en');
    return view('welcome');
});
