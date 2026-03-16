<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\StudentController;

Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('/students', [StudentController::class, 'index']);
Route::delete('/student/delete/{id}', [StudentController::class, 'delete']);
Route::get('/student/edit/{id}', [StudentController::class, 'edit']);
Route::post('/student/update/{id}', [StudentController::class, 'update']);