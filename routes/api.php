<?php
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\CategoryController;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

//require_once 'vendor/autoload.php';
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
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('books', BookController::class);
});





Route::post('/login', [AuthController::class, 'login']);


// Route::get('/books',[BookController::class,'index']);
// Route::get('/books/{id}',[BookController::class,'show']);
// Route::delete('/books/{id}',[BookController::class,'destroy']);
// Route::post('/books',[BookController::class,'store']);
// Route::put('/books/{id}',[BookController::class,'update']);