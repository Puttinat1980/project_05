<?php

use Illuminate\Support\Facades\Auth;
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
//start Admin
Auth::routes();
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');
Route::get('/admin/calender', [App\Http\Controllers\CalenderController::class, 'index'])->name('adminpage.calender.admincalender');
Route::get('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('adminpage.employee.adminemployee');
Route::get('/admin/type', [App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.admintype');
Route::get('/admin/workings', [App\Http\Controllers\WorkingsController::class, 'index'])->name('adminpage.workings.adminworkings');
Route::get('/admin/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('adminpage.history.adminhistory');
Route::get('/admin/process', [App\Http\Controllers\ProcessController::class, 'index'])->name('adminpage.process.adminprocess');

//End Admin

// start promotepage //
Route::view('/', 'promotepage.home')->name('home');
Route::view('/product','promotepage.product')->name('product');
Route::view('/calendar','promotepage.calendar')->name('calendar');
Route::view('/about','promotepage.about')->name('about');
Route::view('/contact','promotepage.contact')->name('contact');
Route::view('/work','promotepage.work')->name('work');

//End promotepage//

