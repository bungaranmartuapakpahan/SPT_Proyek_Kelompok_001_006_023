<?php

use App\Http\Controllers\API\AkademisController;
use App\Http\Controllers\API\OrangtuaController;
use App\Http\Controllers\API\AsalsekolahController;
use App\Http\Controllers\API\AsramaController;
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

//Akademis
Route::get('akademis', [AkademisController::class ,'index']);
Route::post('akademis/store', [AkademisController::class ,'store']);
Route::get('akademis/show/{id}', [AkademisController::class, 'show']);
Route::post('akademis/update/{id}', [AkademisController::class, 'update']);
Route::get('akademis/destroy/{id}', [AkademisController::class, 'destroy']);

//Data Orang Tua
Route::get('orangtua', [OrangtuaController::class ,'index']);
Route::post('orangtua/store', [OrangtuaController::class ,'store']);
Route::get('orangtua/show/{id}', [OrangtuaController::class, 'show']);
Route::post('orangtua/update/{id}', [OrangtuaController::class, 'update']);
Route::get('orangtua/destroy/{id}', [OrangtuaController::class, 'destroy']);

//Data Asal sekolah
Route::get('asalsekolah', [AsalsekolahController::class ,'index']);
Route::post('asalsekolah/store', [AsalsekolahController::class ,'store']);
Route::get('asalsekolah/show/{id}', [AsalsekolahController::class, 'show']);
Route::post('asalsekolah/update/{id}', [AsalsekolahController::class, 'update']);
Route::get('asalsekolah/destroy/{id}', [AsalsekolahController::class, 'destroy']);

//Data Asrama
Route::get('asrama', [AsramaController::class ,'index']);
Route::post('asrama/store', [AsramaController::class ,'store']);
Route::get('asrama/show/{id}', [AsramaController::class, 'show']);
Route::post('asrama/update/{id}', [AsramaController::class, 'update']);
Route::get('asrama/destroy/{id}', [AsramaController::class, 'destroy']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
