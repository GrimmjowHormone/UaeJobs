<?php

namespace App\Http\Livewire;


use App\Models\Categoria;
use App\Models\Country;
use App\Models\Salario;
use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;


class CrearVacante extends Component
{
    //Conectando livewire con la vista
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;
    public $imagen;
    public $edad_minima;
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
        'imagen' => 'required|image|max:1024',
        'edad_minima' => 'required|integer|min:18',
        'edad_maxima' => 'required|integer|min:18|max:70',
        'country' => 'required'


    ];

    //

    public function crearVacante()
    {
        //el validate funciona sin mandar ningun parametro, por las convenciones de laravel, manda a llamar a la variable rules que definimos arriba de esta funcion
        $datos = $this->validate();

        //Almacenar la imagen
        $imagen = $this->imagen->store('public/vacantes');
        $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
        //dd($nombre_imagen);


        //Crear la vacante
        Vacante::create([
            'titulo' => $datos['titulo'],
            'salario_id' => $datos['salario'],
            'categoria_id' => $datos['categoria'],
            'empresa' => $datos['empresa'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'imagen' => $datos['imagen'],
            'user_id' => auth()->user()->id,
            'country_id' => $datos['country'],
            'edad_minima' => $datos['edad_minima'],
            'edad_maxima' => $datos['edad_maxima']

        ]);
        //Crear un mensaje
        session()->flash('mensaje', 'La Vacante se publico correctamente');

        //Redireccionar al usuario
        return redirect()->route('vacantes.index');
    }


    public function render()
    {
        //Consultar BD para pasar informacion a la vista
        $salarios = Salario::all();
        $categorias = Categoria::all();
        $countries = Country::all();
        return view('livewire.crear-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias,
            'countries'=>$countries
        ]);
    }
}
