<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;
use App\Models\Employee;

class Employees extends Component
{
    public $name;
    public $email;
    public $department;
    public $company_id;
    public $phone;
 
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required|min:10',
        'company_id' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Campo nome é obrigatório',
        'name.min' => 'Nome precisa ter, no mínimo, 6 caracteres',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Email precisa ser válido',
        'phone.required' => 'Telefone é obrigatório',
        'phone.min' => 'Telefone precisa ter ao menos 10 números',
        'company_id.required' => 'Empresa é obrigatório',
    ];

    public function render()
    {
        return view('livewire.employees')->with([
            'companies' => Company::all(),
            'employees' => Employee::all()
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        Employee::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'department' => $this->department,
            'company_id' => $this->company_id,
        ]);
    }
}
