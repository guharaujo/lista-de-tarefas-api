<?php

use App\Http\Controllers\TodolistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/store', [todolistController::class, 'store']);

Route::get('/show/{id}', [todolistController::class, 'show']);

Route::get('/index', [todolistController::class, 'index']);

Route::delete('/destroy/{id}', [todolistController::class, 'destroy']);

Route::put('/update/{id}', [todolistController::class, 'update']);


