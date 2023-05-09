<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\BlogGroup\Http\Controllers\api\v1\BlogGroupController;


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

//Route::middleware('auth:api')->get('/bloggroup', function (Request $request) {
//    return $request->user();
//});

Route::prefix('v1')->group(function () {
    Route::prefix('blog-group')->group(function () {
        Route::get('/', [BlogGroupController::class, 'index']);
        Route::get('/{id}', [BlogGroupController::class, 'find']);
        Route::delete('/{id}', [BlogGroupController::class, 'delete']);
        Route::put('/{id}', [BlogGroupController::class, 'update']);
        Route::post('/', [BlogGroupController::class, 'store']);
    });
});
