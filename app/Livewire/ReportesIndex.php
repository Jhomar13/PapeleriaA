<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('components.layouts.app')]
class ReportesIndex extends Component

{
    public function render()
    {
        return view('livewire.reportes-index')
        ->layout('components.layouts.app.sidebar');
    }
}
