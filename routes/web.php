<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController as IndexController;
use App\Http\Controllers\CategoryController as CategoryController;


Route::get('/', IndexController::class)->name('main.index');

Route::resource('/category', CategoryController::class);

