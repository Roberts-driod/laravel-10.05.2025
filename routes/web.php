<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [bookController::class, 'index']);
Route::get('/books/create' ,[bookController::class, 'create']);
Route::post('/books' ,[bookController::class, 'store']);
 