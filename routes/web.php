<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JffrdlxmnController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/jffrdlxmn',[JffrdlxmnController::class,'index'])->name('jffrdlxmn.index');
Route::get('/jffrdlxmn/create',[JffrdlxmnController::class,'create'])->name('jffrdlxmn.create');;
Route::get('/jffrdlxmn/{id}',[JffrdlxmnController::class,'show'])->name('jffrdlxmn.show');