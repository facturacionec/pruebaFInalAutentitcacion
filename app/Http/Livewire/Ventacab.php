<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use App\Models\Producto;
use Livewire\Component;

class Ventacab extends Component
{
    public $codigo;
    public $cliente_id;

    public $clientes;
    public $productos;

    public function mount()
    {
        $this->clientes = Cliente::all();
        $this->productos = Producto::all();
    }
    public function render()
    {
        return view('livewire.ventacab');
    }
}
