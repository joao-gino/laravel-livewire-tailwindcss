<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Models\Company;
use App\Models\Employee;

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

Route::get('/', function (Company $company) {
    return view('dashboard');
})->name('dashboard');

Route::get('/companies', function (Companies $company) {
    return view('companies');
})->name('company');

Route::get('/employees', function (Company $company, Employee $employee) {
    return view('employee');   
})->name('employee');
