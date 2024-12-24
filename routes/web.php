<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Users','app\Http\Controllers\UserController');
