<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [RecordController::class, 'index']);
Route::get('/records/create', 'RecordController@create');
Route::post('/records', 'RecordController@store');
Route::get('/records/{id}', 'RecordController@show');
Route::get('/records/{id}/edit', 'RecordController@edit');
Route::put('/records/{id}', 'RecordController@update');
Route::delete('/records/{id}', 'RecordController@destroy');
