<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FiliereController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('candidats', CandidatController::class);
Route::resource('filieres', FiliereController::class);
