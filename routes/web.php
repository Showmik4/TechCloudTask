<?php

use App\Http\Controllers\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/add_employee', [EmployeeController::class, 'create'])->name('add_employee');
Route::post('/store_employee', [EmployeeController::class, 'store'])->name('store_employee');
Route::get('/edit_employee/{id}', [EmployeeController::class, 'edit'])->name('edit_employee');
Route::put('/update_emplyee/{id}', [EmployeeController::class, 'update'])->name('update_employee');
Route::get('/delete_employee/{id}', [EmployeeController::class, 'delete'])->name('delete_employee');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
