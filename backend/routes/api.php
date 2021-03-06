<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use backend\app\Models\Task;
use App\Http\Controllers\TaskController;

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

Route::controller(TodoController::class)
    ->prefix('todos')
    ->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'create');
        Route::put('/{todo}', 'update');
        Route::delete('/{todo}', 'delete');
        Route::put('/{todo}/toggle', 'toggleCompleted');
    });
