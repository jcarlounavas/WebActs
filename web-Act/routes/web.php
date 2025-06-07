<?php

use App\Http\Controllers\StudentActsController;
use App\Models\StudentActs;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studs', [StudentActsController::class, 'index'])->name('studs');
Route::get('/register', function () {
    return view('Components.register');
});
Route::post('/create', [StudentActsController::class, 'store'])->name('store');


Route::get('/editing-page/{id}', function($id){
    $student = StudentActs::findOrFail($id);  // better: findOrFail for error handling
    return view('Components.edit', compact('student'));
});


Route::post('/update/{id}', [StudentActsController::class, 'update'])->name('update');

Route::delete('/editing-page/{studentActs}', [StudentActsController::class, 'destroy'])->name('destroy');