<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class MostrarVacantes extends Component
{
    public function render()
    {
            //Se consulta por medio del id del usuario en la base de datos y paginamos la consulta
        $vacantes= Vacante::where('user_id',auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes',[
            'vacantes'=>$vacantes
        
        ]);
    }
}
