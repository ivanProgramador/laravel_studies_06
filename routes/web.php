<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('main.index');
Route::get('/one_to_one', [MainController::class, 'oneToOne'])->name('main.oneToOne');
Route::get('/one_to_many', [MainController::class, 'oneToMany'])->name('main.oneToMany');
Route::get('/belongs_to', [MainController::class, 'belogsTo'])->name('main.belongsTo');
Route::get('/many_to_many', [MainController::class, 'manyToMany'])->name('main.manyToMany');
Route::get('/runing_queries',[MainController::class,'runingQueries'])->name('main.runingQueries');
Route::get('/same_results',[MainController::class,'SameResults'])->name('main.sameResults');
Route::get('/colections',[MainController::class,'colections'])->name('main.colections');
Route::get('/serialization',[MainController::class,'Serialization'])->name('main.Serialization');