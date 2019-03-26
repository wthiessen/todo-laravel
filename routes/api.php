<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Cors;

// header('Access-Control-Allow-Origin: http://localhost:8999');
// header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization');
// header('Access-Control-Allow-Credentials: true');
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/todos', ['middleware' => 'cors', 'uses' => 'TodosController@index']);
Route::post('/todos', 'TodosController@store');
Route::patch('/todos/{todo}', 'TodosController@update');
Route::delete('/todos/{todo}', 'TodosController@destroy');
