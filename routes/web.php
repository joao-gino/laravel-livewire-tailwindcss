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
    return view('home');
})->name('home');

Route::get('/companies', function (Company $company) {
    return view('companies')->with('companies', $company->all());
})->name('company');

Route::get('/employees', function (Company $company, Employee $employee) {
    return view('employee')->with('companies', $company->all())->with('employees', $employee->all());   
})->name('employee');

Route::post('employee/create', [EmployeeController::class, 'create'])->name('employee.create');

Route::post('company/create', [CompanyController::class, 'create'])->name('company.create');
