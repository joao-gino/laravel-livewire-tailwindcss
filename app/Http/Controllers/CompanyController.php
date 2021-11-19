<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index');
    }

    public function create()
    {
        Company::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);

        return redirect()->route('home');
    }
}
