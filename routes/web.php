<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('employee', [EmployeeController::class, 'index']);
Route::get('employee/create', [EmployeeController::class, 'create']);
Route::get('employee/{id}/edit', [EmployeeController::class, 'edit']);

//CREATE
Route::post('employee/store', [EmployeeController::class, 'store']);
//READ
Route::get('employee/all', [EmployeeController::class, 'all']);
Route::get('employee/{id}/get', [EmployeeController::class, 'get']);
//UPDATE
// Route::get('employee/{id}/edit', [EmployeeController::class, 'edit']);
Route::post('employee/update/{id}', [EmployeeController::class, 'update']);
//DELETE
Route::delete('employee/delete/{id}', [EmployeeController::class, 'delete']);