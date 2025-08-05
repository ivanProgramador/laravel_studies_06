<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/one_to_one', [MainController::class, 'oneToOne'])->name('main.oneToOne');
Route::get('/one_to_many', [MainController::class, 'oneToMany'])->name('main.oneToMany');
