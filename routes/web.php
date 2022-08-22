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
Route::get('/admin/calender/add', [App\Http\Controllers\CalenderaddController::class, 'index'])->name('adminpage.admincalender.add');
Route::get('/admin/calender/edit', [App\Http\Controllers\CalendereditController::class, 'index'])->name('adminpage.admincalender.edit');

Route::get('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('adminpage.employee.adminemployee'); 
Route::get('/admin/employee/add', [App\Http\Controllers\EmployeeaddController::class, 'index'])->name('adminpage.adminemployee.add');
Route::get('/admin/employee/edit', [App\Http\Controllers\EmployeeeditController::class, 'index'])->name('adminpage.adminemployee.edit');

Route::get('/admin/type', [App\Http\Controllers\TypeController::class, 'index'])->name('adminpage.type.admintype');
Route::get('/admin/type/add', [App\Http\Controllers\TypeaddController::class, 'index'])->name('adminpage.admintype.add');
Route::get('/admin/type/edit', [App\Http\Controllers\TypeeditController::class, 'index'])->name('adminpage.admintype.edit');

Route::get('/admin/workings', [App\Http\Controllers\WorkingsController::class, 'index'])->name('adminpage.workings.adminworkings');
Route::get('/admin/workings/add', [App\Http\Controllers\WorkingsaddController::class, 'index'])->name('adminpage.adminworkings.add');
Route::get('/admin/workings/edit', [App\Http\Controllers\WorkingseditController::class, 'index'])->name('adminpage.adminworkings.edit');


Route::get('/admin/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('adminpage.history.adminhistory');
Route::get('/admin/history/add', [App\Http\Controllers\HistoryaddController::class, 'index'])->name('adminpage.adminhistory.add');
Route::get('/admin/history/edit', [App\Http\Controllers\HistoryeditController::class, 'index'])->name('adminpage.adminhistory.edit');

Route::get('/admin/process', [App\Http\Controllers\ProcessController::class, 'index'])->name('adminpage.process.adminprocess');
Route::get('/admin/process/add', [App\Http\Controllers\ProcessaddController::class, 'index'])->name('adminpage.adminprocess.add');
Route::get('/admin/process/edit', [App\Http\Controllers\ProcesseditController::class, 'index'])->name('adminpage.adminprocess.edit');

//End Admin

// start promotepage //
Route::view('/', 'promotepage.home')->name('home');
Route::view('/product','promotepage.product')->name('product'); 
Route::view('/calendar','promotepage.calendar')->name('calendar');
Route::view('/about','promotepage.about')->name('about');
Route::view('/contact','promotepage.contact')->name('contact');
Route::view('/work','promotepage.work')->name('work');

//End promotepage//

