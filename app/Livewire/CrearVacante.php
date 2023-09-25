<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {

            //Consultar BD para pasar informacion a la vista
        $salarios= Salario::all();    
        return view('livewire.crear-vacante',[
            'salarios'=>$salarios
        ]);
    }
}
