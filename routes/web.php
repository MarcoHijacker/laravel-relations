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

Route::get('/', 'EmployeeController@index') -> name('employee-index');
Route::get('/employee/create', 'EmployeeController@create') -> name('employee-create');
Route::post('/employee/create', 'EmployeeController@store') -> name('employee-store');
Route::get('/employee/destroy/{id}', 'EmployeeController@destroy') -> name('employee-destroy');
Route::get('/employee/edit/{id}', 'EmployeeController@edit') -> name('employee-edit');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('employee-show');
