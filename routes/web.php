<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\IndexController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/employeeTable',EmployeesController::class);
Route::get('create', [EmployeesController::class, 'create'])->name('employee.create');
Route::post('employees', [EmployeesController::class, 'store'])->name('employee.store');
Route::put('/employees/{id}', 'App\Http\Controllers\EmployeesController@update')->name('employeeTable.update');


Route::resource('/departmentTable',DepartmentController::class);
Route::post('create', [DepartmentController::class, 'store'])->name('department.store');


Route::get('/admin/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('adminDashboard.employee.index');
Route::get('/admin/department',[App\Http\Controllers\DepartmentController::class,'index'])->name('adminDashboard.department.index');


Route::resource('home', IndexController::class);
