<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('cadastro/cad', [usercontroller::class , 'index']);