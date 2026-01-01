<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| These routes are loaded by the RouteServiceProvider and assigned
| to the "api" middleware group.
*/

Route::post('/chat', [ChatController::class, 'chat']);
Route::get('/test', function () {
    return response()->json(['status' => 'API working']);
});