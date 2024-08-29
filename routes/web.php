<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::resource('photo',CustomerController::class);