<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('create', function () {
    return view('create');
});
Route::post('create', [PostController::class, 'create'])->name('store');
Route::get('list', [PostController::class, 'index']);
