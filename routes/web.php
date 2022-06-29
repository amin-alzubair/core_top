<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RevenueController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/index',function(){
    return view('index');
});

Auth::routes(['register' => false]);


Route::group(['middleware'=>['auth']],function(){
    //ticket routes
 Route::get('/create_ticket',[TicketController::class,'create'])->name('create.ticket');
 Route::get('/show_ticket',[TicketController::class,'index'])->name('show.ticket');
 Route::post('/add_ticket',[TicketController::class,'store'])->name('store.ticket');

 //university routes
 Route::get('/add_university',[UniverstyController::class,'create'])->name('universty.create');
 Route::post('/post_university',[UniverstyController::class,'store'])->name('universty.store');
 

 //department routes
 Route::get('/add_department',[DepartmentController::class,'create'])->name('department.create');
 Route::post('/post_department',[DepartmentController::class,'store'])->name('department.store');

 //revenue routes

 Route::get('/add_revenue',[RevenueController::class,'create'])->name('revenue.create');
 Route::post('/post_revenue',[RevenueController::class,'store'])->name('revenue.store');

 //expense routes

 Route::get('/add_expense',[ExpenseController::class,'create'])->name('expense.create');
 Route::post('/post_expense',[ExpenseController::class,'store'])->name('expense.store');

 //employes  routes

 Route::get('/add_employee',[EmployeeController::class,'create'])->name('employee.create');
 Route::get('/delete_employee/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');
 Route::post('/post_employee',[EmployeeController::class,'store'])->name('employee.store');
 
});
