<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; //this line is not in the repo
use App\Http\Controllers\Api\UserController; //this line I added based on another student suggestion

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

// Route::apiResource('users', 'Api\UserController'); // Also removed this line as suggested
Route::apiResource("users", UserController::class); // and added this in place

