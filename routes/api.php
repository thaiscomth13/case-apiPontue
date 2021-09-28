<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ListaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); 


Route::get('/status', [ListaController::class, 'status']);
Route::post('/lista/adicionar', [ListaController::class, 'adicionar']);
Route::get('/listando', [ListaController::class, 'list']);
Route::get('/listando/{id}', [ListaController::class, 'select']);
Route::put('/listando/{id}', [ListaController::class, 'update']);
Route::delete('/listando/{id}', [ListaController::class, 'delete']);