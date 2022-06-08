<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('movies', [MovieController::Class,'ViewData']);

Route::get('add', [MovieController::Class,'Viewadd']);
Route::post('add', [MovieController::class, 'createData']);

Route::get('/edit/id/{id}', [MovieController::class, 'editData']);
Route::put('/update/id/{id}', [MovieController::class, 'updateData']);

Route::get('/delete-data/id/{id}', [MovieController::class, 'deleteData']);

