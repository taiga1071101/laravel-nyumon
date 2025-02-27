<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');

Route::get('/diary/create', [DiaryController::class, 'create'])->name('diary.create');

Route::post('/diary', [DiaryController::class, 'save'])->name('diary.save');