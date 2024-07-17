<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;

Route::get('/',[main::class,'index']);

