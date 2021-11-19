<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Company;

class Employee extends Component
{
    public function render()
    {
        return view('livewire.employee')->with([
            'companies' => Company::all()
        ]);
    }
}
