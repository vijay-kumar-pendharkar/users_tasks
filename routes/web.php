<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',action: [UserController::class,'home']);

Route::post('user_save',[UserController::class,'user_save']);

Route::get('show_user', [UserController::class,'show_user']);

Route::get('task_add', action: [UserController::class,'add_task']);

Route::post('save_task', action: [UserController::class,'save_task']);

Route::get('show_user_task', action: [UserController::class,'show_user_task']);



Route::get('/export_users',[UserController::class,
'exportUsers'])->name('export_users');