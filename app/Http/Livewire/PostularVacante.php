<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;
    public $cv;
    public $vacante;
    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante){
       $this->vacante=$vacante;
    }

    public function postularme()
    {
        //el validate funciona sin mandar ningun parametro, por las convenciones de laravel, manda a llamar a la variable rules que definimos arriba de esta funcion
        $datos = $this->validate();

        //Almacenar el CV
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        //Crear candidato a la vacante
        $this->vacante->candidatos()->create([
            'user_id'=>auth()->user()->id,
            'cv'=>$datos['cv']
        ]);
        //Crear notificacion y enviar email

        //Mostrar al usuario un mensaje de ok
        session()->flash('mensaje','Se envio correctamente tu información, mucha suerte');
    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
