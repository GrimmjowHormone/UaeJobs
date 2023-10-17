<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;
    protected $listeners=['terminosBusqueda'=>'buscar'];
    public function buscar($termino, $categoria, $salario)
    {
        $this->termino=$termino;
        $this->categoria=$categoria;
        $this->salario=$salario;


    }
    public function render()
    {

        // $vacantes=Vacante::all();
        $vacantes = Vacante::when($this->termino || $this->categoria || $this->salario, function ($query) {
            $query->where(function ($query) {
                if ($this->termino) {
                    $query->where(function ($query) {
                        $query->where('titulo', 'LIKE', "%" . $this->termino . "%")
                              ->orWhere('empresa', 'LIKE', "%" . $this->termino . "%");
                    });
                }

                if ($this->categoria) {
                    $query->where('categoria_id', $this->categoria);
                }

                if ($this->salario) {
                    $query->where('salario_id', $this->salario);
                }
            });
        })
        ->paginate(20);







        return view('livewire.home-vacantes',[
            'vacantes'=>$vacantes
        ]);
    }
}
