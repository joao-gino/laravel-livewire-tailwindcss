<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class Companies extends Component
{
    public $name;
    public $email;
    public $phone;
 
    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Campo nome é obrigatório',
        'name.min' => 'Nome precisa ter, no mínimo, 6 caracteres',
        'email.required' => 'Email é obrigatório',
        'email.email' => 'Email precisa ser válido',
        'phone.required' => 'Telefone é obrigatório',
        'phone.min' => 'Telefone precisa ter ao menos 10 números',
    ];

    public function render()
    {
        return view('livewire.companies')->with([
            'companies' => Company::all()
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        Company::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
    }
}
