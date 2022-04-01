<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

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



//INDEX
//Route::get('/reviews', [ReviewController::class, 'index']);

//SHOW

// Route::resource('reviews', ReviewController::class);



//public routes

//create account
Route::post('/register', [AuthController::class, 'register']);
//login
Route::post('/login', [AuthController::class, 'login']);

//review index
Route::get('/reviews', [ReviewController::class, 'index']);
//show review
Route::get('/reviews/{id}', [ReviewController::class, 'show']);
//search for review by game name
Route::get('/reviews/search/{game}', [ReviewController::class, 'search']);



//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    //create - only available to auth users
   Route::post('/reviews', [ReviewController::class, 'store']);
   //update
   Route::put('/reviews/{id}', [ReviewController::class, 'update']);
   //delete
   Route::delete('/reviews/{id}', [ReviewController::class, 'delete']);
   //logout
   Route::post('/logout', [AuthController::class, 'logout']);
});


//not sure what this is for but it was in traversy's video and wasn't included in our file. might be something from laravel 8 that is no longer relevant, but unsure
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});