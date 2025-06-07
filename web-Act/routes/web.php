<?php

use App\Http\Controllers\StudentActsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studs', [StudentActsController::class, 'index'])->name('studs');