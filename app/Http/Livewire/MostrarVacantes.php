<?php

namespace App\Http\Livewire;
use Livewire\Attributes\On;
use App\Models\Vacante;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;


class MostrarVacantes extends Component
{
    protected $listeners = ['eliminarVacante'];


public function eliminarVacante( Vacante $vacante )
{

    if( $vacante->imagen ) {
        Storage::delete('public/vacantes/' . $vacante->imagen);
    }
    if( $vacante->candidatos->count() ) {
        foreach( $vacante->candidatos as $candidato ) {
            if( $candidato->cv ) {
                Storage::delete('public/cv/' . $candidato->cv);
            }
        }
    }

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
