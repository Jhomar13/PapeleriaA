<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
#[Layout('components.layouts.app')]

class RproductosCategoria extends Component
{
    public $categorias = [];
    public $totales = [];

    public function mount()
    {
        $data = DB::select(
            "SELECT * FROM public.fn_reporte_productos_categorias()"
        );

        $this->categorias = array_column($data, 'categoria');
        $this->totales    = array_column($data, 'total_productos');
    }

    public function render()
    {
        return view('livewire.rproductos-categoria')
            ->layout('components.layouts.app.sidebar');
    }
}