<?php

use App\Http\Controllers\ResultsController;
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
Route::group(['middleware' => 'api', 'cors'], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('calculate', [ResultsController::class, '__invoke']);
    Route::get('aspirante', 'AspiranteController@index');
    Route::get('exportar', 'AspiranteController@export');
    Route::get('resultado-aspirante/{id}', 'AspiranteController@generatePDF');
});


