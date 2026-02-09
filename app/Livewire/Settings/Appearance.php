<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('components.layouts.app')]

class Appearance extends Component
{
    
    public function render()
    {
        return view('livewire.settings.appearance')
            ->layout('components.layouts.app.sidebar');
    }
}
