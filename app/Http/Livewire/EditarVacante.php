<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Country;
use App\Models\Salario;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $new_imagen;
    public $edad_minima; // Agrega esta línea
    public $edad_maxima;
    public $country;
    use WithFileUploads;
    protected $rules = [
        'titulo' => 'required|string',
        'salario' => 'required',
        'categoria' => 'required',
        'empresa' => 'required',
        'ultimo_dia' => 'required',
        'descripcion' => 'required',
        'edad_minima' => 'integer|min:18',
        'edad_maxima' => 'integer|min:18|max:70',
        'new_imagen' => 'nullable|image|max:1024',
        'country' => 'required'



    ];
    public function mount(Vacante $vacante)
    {
        $this->vacante_id=$vacante->id;//Esto no va a funcionar
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = Carbon::parse($vacante->ultimo_dia)->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->edad_minima=$vacante->edad_minima;
        $this->edad_maxima=$vacante->edad_maxima;
        $this->country=$vacante->country_id;
        $this->imagen = $vacante->imagen;
    }
    public function editarVacante()
    {
        $datos = $this->validate();


        //Encontrar vacante a editar
        $vacante=Vacante::find($this->vacante_id);

         //Revisar si hay una nueva imagen
         if($this->new_imagen){
            $imagen=$this->new_imagen->store('public/vacantes');
            $datos['imagen']=str_replace('public/vacantes/', '',$imagen);
            Storage::delete('public/vacantes/'.$vacante->imagen);

        }

        //Asignar los valores
        $vacante->titulo=$datos['titulo'];
        $vacante->salario_id=$datos['salario'];
        $vacante->categoria_id=$datos['categoria'];
        $vacante->empresa=$datos['empresa'];
        $vacante->ultimo_dia=$datos['ultimo_dia'];
        $vacante->descripcion=$datos['descripcion'];
        $vacante->edad_maxima=$datos['edad_maxima'];
        $vacante->edad_minima=$datos['edad_minima'];
        $vacante->imagen=$datos['imagen'] ?? $vacante->imagen;
        $vacante->country_id=$datos['country'];


        //Guardar la vacante
        $vacante->save();
        //redireccionar
        session()->flash('mensaje', 'La Vacante se actualizó Correctamente');
        return redirect()->route('vacantes.index');
    }
    public function render()
    {
        $salarios = Salario::all();
        $categorias = Categoria::all();
        $countries = Country::all();
        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
            'countries'=>$countries
        ]);
    }
}
