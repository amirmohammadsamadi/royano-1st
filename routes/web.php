<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;

Route::get('/',[main::class,'index']);
Route::get('/shohada',[main::class,'shohada']);
Route::get('/book',[main::class,'book']);
Route::get('/down',[main::class,'down']);
Route::get('/git',[main::class,'git']);
Route::get('/ab',[main::class,'ab']);

