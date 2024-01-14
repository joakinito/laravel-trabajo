<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\SlandController;
use App\Http\Controllers\StreamerController;
use App\Http\Controllers\YoutuberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




/*route::apiResource('alumnos', AlumnoController::class);
Route::get('/alumnos/{id}', [AlumnoController::class, 'show'])
    ->middleware('validate.id');*/


/* <><><> Rutas para eslands <><><>*/
Route::prefix('eslands')->group(function () {
    Route::get('/', [SlandController::class, 'indexEslands']);
    Route::get('/{id}', [SlandController::class, 'showEsland']);
    Route::post('/', [SlandController::class, 'insertEsland']);
    Route::delete('/{id}', [SlandController::class, 'deleteEsland']);
});

/* <><><> Rutas para Streamers <><><>*/
Route::prefix('streamers')->group(function () {
    Route::get('/', [StreamerController::class, 'indexStreamers']);
    Route::get('/{id}', [StreamerController::class, 'showStreamer']);
});

/* <><><> Rutas para Youtubers <><><>*/
Route::prefix('youtubers')->group(function () {
    Route::get('/', [YoutuberController::class, 'indexYoutubers']);
    Route::get('/{id}', [YoutuberController::class, 'showYoutuber']);
});