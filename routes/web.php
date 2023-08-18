<?php

use App\Http\Controllers\EmployeeController;
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



Route::get('/employee_show',[EmployeeController::class,'employee_show']);
Route::get('/employee_create',[EmployeeController::class,'employee_create']);
Route::post('/employee_store',[EmployeeController::class,'employee_store']);
Route::get('/employee_edit/{id}',[EmployeeController::class,'employee_edit']);
Route::put('/employee_update/{id}',[EmployeeController::class,'employee_update']);
Route::get('/employee_delete/{id}',[EmployeeController::class,'employee_delete']);
