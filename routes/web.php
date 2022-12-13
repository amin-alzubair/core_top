<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PlanController;
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

Route::get('/', [HomeController::class, 'index'])->name('dashboard');


Auth::routes(['register' => false]);


Route::group(['middleware' => ['auth']], function () {
    //ticket routes
    Route::get('/create-ticket', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/add-ticket', [TicketController::class, 'store'])->name('ticket.store');
    Route::get('/ticket-stauts/{ticket}', [TicketController::class, 'stauts'])->name('ticket.stauts');
    Route::get('/ticket-checkout/{ticket}', [TicketController::class, 'checkout'])->name('ticket.checkout');
    Route::put('/approved/{ticket}', [TicketController::class, 'approved'])->name('ticket.approved');
    Route::get('/search', [TicketController::class, 'search'])->name('search');



    //expense routes
    Route::get('/add-expense', [ExpenseController::class, 'create'])->name('expense.create');
    Route::post('/post-expense', [ExpenseController::class, 'store'])->name('expense.store');

    //employes  routes

    Route::group(['middleware' => 'isAdmin'], function () {
        Route::get('/add-employee', [EmployeeController::class, 'create'])->name('employee.create');
        Route::get('/delete-employee/{employee}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
        Route::post('/post-employee', [EmployeeController::class, 'store'])->name('employee.store');
        Route::post('/set-admin', [EmployeeController::class, 'setAdmin'])->name('employee.setAdmin');

        //plans routes
        Route::resource('/plans', '\App\Http\Controllers\PlanController')->except('show');
    });
});
