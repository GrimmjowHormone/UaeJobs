<?php

namespace App\Http\Livewire;
use Livewire\Attributes\On;
use App\Models\Vacante;
use Livewire\Component;


class MostrarVacantes extends Component
{
    protected $listeners = ['eliminarVacante'];

    public function eliminarVacante(Vacante $vacante)
    {
        $vacante->delete();
        return redirect(request()->header('Referer'));
    }
    public function render()
    {
            //Se consulta por medio del id del usuario en la base de datos y paginamos la consulta
        $vacantes= Vacante::where('user_id',auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes',[
            'vacantes'=>$vacantes

        ]);
    }
}