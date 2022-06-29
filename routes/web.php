<?php

use Illuminate\Routing\Route;
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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index',function(){
    return view('index');
});

Auth::routes(['register' => false]);


Route::group(['middleware'=>['auth']],function(){
    //ticket routes
 Route::get('/create_ticket','TicketController@create')->name('create.ticket');
 Route::get('/show_ticket','TicketController@index')->name('show.ticket');
 Route::post('/add_ticket','TicketController@store')->name('store.ticket');

 //university routes
 Route::get('/add_university','UniverstyController@create')->name('universty.create');
 Route::post('/post_university','UniverstyController@store')->name('universty.store');
 

 //department routes
 Route::get('/add_department','DepartmentController@create')->name('department.create');
 Route::post('/post_department','DepartmentController@store')->name('department.store');

 //revenue routes

 Route::get('/add_revenue','RevenueController@create')->name('revenue.create');
 Route::post('/post_revenue','RevenueController@store')->name('revenue.store');

 //expense routes

 Route::get('/add_expense','ExpenseController@create')->name('expense.create');
 Route::post('/post_expense','ExpenseController@store')->name('expense.store');

 //employes  routes

 Route::get('/add_employee','EmployeeController@create')->name('employee.create');
 Route::get('/delete_employee/{employee}','EmployeeController@destroy')->name('employee.destroy');
 Route::post('/post_employee','EmployeeController@store')->name('employee.store');
 
});
