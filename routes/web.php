<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UniverstyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', [HomeController::class,'index'])->name('dashboard');


Auth::routes(['register' => false]);


Route::group(['middleware'=>['auth']],function(){
    //ticket routes
 Route::get('/create_ticket',[TicketController::class,'create'])->name('ticket.create');
 Route::post('/add_ticket',[TicketController::class,'store'])->name('ticket.store');
 Route::get('/checkout_ticket/{ticket}',[TicketController::class,'checkout'])->name('ticket.checkout');
 Route::get('/approved/{ticket}',[TicketController::class,'approved'])->name('ticket.approved');

 //expense routes

 Route::get('/add_expense',[ExpenseController::class,'create'])->name('expense.create');
 Route::post('/post_expense',[ExpenseController::class,'store'])->name('expense.store');

 //employes  routes

 Route::get('/add_employee',[EmployeeController::class,'create'])->name('employee.create')->middleware('isAdmin');
 Route::get('/delete_employee/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');
 Route::post('/post_employee',[EmployeeController::class,'store'])->name('employee.store');
 Route::post('/set_admin',[EmployeeController::class,'setAdmin'])->name('employee.setAdmin');

});
