<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[TodoListController::class,'index']);
Route::post('/saveItem',[TodoListController::class ,'saveItem'])->name('saveItem');
Route::post('/markAsComplete/{id}', [TodoListController::class, 'markItem'])->name('markAsComplete');

