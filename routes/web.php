<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;
use App\Models\Employee;
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



Route::get('/employee_show',[PostController::class,'employee_show']);
Route::get('/employee_create',[PostController::class,'employee_create']);
Route::post('/employee_store',[PostController::class,'employee_store']);
Route::get('/employee_edit/{id}',[PostController::class,'employee_edit']);
Route::put('/employee_update/{id}',[PostController::class,'employee_update']);
Route::get('/employee_delete/{id}',[PostController::class,'employee_delete']);

Route::get('/search',[PostController::class,'search']);



// ---------------Authentication -----------
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
