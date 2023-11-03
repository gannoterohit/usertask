<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[UserController::class,'user']);
Route::post('/add-user',[UserController::class,'add_user']);
Route::get('/get-user',[UserController::class,'get_user']);
Route::get('/delete-user/{id}',[UserController::class,'delete']);
Route::get('/edit/{id}',[UserController::class,'edit']);
Route::post('/user-update',[UserController::class,'user_update']);

Route::get('task',[TaskController::class,'task']);
Route::post('add-task',[TaskController::class,'add_task']);
Route::get('get-task',[TaskController::class,'get_task']);
Route::get('delete/{id}',[TaskController::class,'delete']);
Route::get('edit-task/{id}',[TaskController::class,'edit']);
Route::post('task-upadate',[TaskController::class,'task_update']);


