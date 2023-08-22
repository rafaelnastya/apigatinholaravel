<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\API\GatinhoszController;

Route::get('/',[GatinhoszController::class, 'index']);
Route::post('/gatinhos', [GatinhoszController::class, 'store']);
