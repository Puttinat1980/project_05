<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WorkingsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProcessController;

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

//calendar open
Route::get('/admin/calendar', [App\Http\Controllers\CalendarController::class, 'index'])->name('adminpage.calendar.admincalendar');

Route::get('/admin/calendar/add', [App\Http\Controllers\CalendarController::class, 'formadd'])->name('adminpage.calendar.add');
Route::post('/admin/calendar/insert', [App\Http\Controllers\CalendarController::class, 'insert'])->name('adminpage.calendar.insert');


Route::get('/admin/calendar/edit/{id}', [CalendarController::class, 'edit']);
Route::post('/admin/calendar/update/{id}', [CalendarController::class, 'update']);

Route::get('/admin/calendar/delete/{id}', [CalendarController::class, 'delete']);

//calendar close


//employee open
Route::get('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('adminpage.employee.adminemployee'); 

Route::get('/admin/employee/add', [App\Http\Controllers\EmployeeController::class, 'formadd'])->name('adminpage.employee.add');
Route::post('/admin/employee/insert', [App\Http\Controllers\EmployeeController::class, 'insert'])->name('adminpage.employee.insert');

Route::get('/admin/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::post('/admin/employee/update/{id}', [EmployeeController::class, 'update']);

Route::get('/admin/employee/delete/{id}', [EmployeeController::class, 'delete']);

//employee close


//product open
Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');

Route::get('/admin/product/add', [App\Http\Controllers\ProductController::class, 'formadd'])->name('adminpage.product.add');
Route::post('/admin/product/insert', [App\Http\Controllers\ProductController::class, 'insert'])->name('adminpage.product.insert');

Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/admin/product/update/{id}', [ProductController::class, 'update']);

Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete']);
//product close


//workings open
Route::get('/admin/workings', [App\Http\Controllers\WorkingsController::class, 'index'])->name('adminpage.workings.adminworkings');

Route::get('/admin/workings/add', [App\Http\Controllers\WorkingsController::class, 'formadd'])->name('adminpage.workings.add');
Route::post('/admin/workings/insert', [App\Http\Controllers\WorkingsController::class, 'insert'])->name('adminpage.workings.insert');


Route::get('/admin/workings/edit/{id}', [WorkingsController::class, 'edit']);
Route::post('/admin/workings/update/{id}', [WorkingsController::class, 'update']);

Route::get('/admin/workings/delete/{id}', [WorkingsController::class, 'delete']);

//workings close


//history open
Route::get('/admin/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('adminpage.history.adminhistory');

Route::get('/admin/history/add', [App\Http\Controllers\HistoryController::class, 'formadd'])->name('adminpage.history.add');
Route::post('/admin/history/insert', [App\Http\Controllers\HistoryController::class, 'insert'])->name('adminpage.history.insert');

Route::get('/admin/history/edit/{id}', [HistoryController::class, 'edit']);
Route::post('/admin/history/update/{id}', [HistoryController::class, 'update']);

Route::get('/admin/history/delete/{id}', [HistoryController::class, 'delete']);
//history close


//process open
Route::get('/admin/process', [App\Http\Controllers\ProcessController::class, 'index'])->name('adminpage.process.adminprocess');

Route::get('/admin/process/add', [App\Http\Controllers\ProcessController::class, 'formadd'])->name('adminpage.process.add');
Route::post('/admin/process/insert', [App\Http\Controllers\ProcessController::class, 'insert'])->name('adminpage.process.insert');

Route::get('/admin/process/edit/{id}', [ProcessController::class, 'edit']);
Route::post('/admin/process/update/{id}', [ProcessController::class, 'update']);

Route::get('/admin/process/delete/{id}', [ProcessController::class, 'delete']);

//process close

//End Admin

// start promotepage //
Route::view('/', 'promotepage.home')->name('home');
Route::view('/product','promotepage.product')->name('product'); 
Route::view('/calendar','promotepage.calendar')->name('calendar');
Route::view('/about','promotepage.about')->name('about');
Route::view('/contact','promotepage.contact')->name('contact');
Route::view('/work','promotepage.work')->name('work');

//End promotepage//

