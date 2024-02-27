<?php

use App\Http\Controllers\LadronController;
use App\Http\Controllers\PoliciaController;
use App\Http\Controllers\SentenciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//POLICIAS...............
Route::get('/policia', [PoliciaController::class, 'index']);
Route::post('/policia', [PoliciaController::class, 'store']);


//LADRONES
Route::get('/ladron', [LadronController::class, 'index']);
Route::post('/ladron', [LadronController::class, 'store']);

//SENTENCIAS...............
Route::get('/sentencia', [SentenciaController::class, 'index']);
Route::post('/sentencia', [SentenciaController::class, 'store']);
