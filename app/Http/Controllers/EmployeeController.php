<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
    }

    public function create()
    {
        Employee::create([
            'name' => request('name'),
            'email' => request('email'),
            'department' => request('department'),
            'company_id' => request('company')
        ]);

        return redirect()->route('employee');
    }
}
