<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
#[Layout('components.layouts.app')]
class LogIndex extends Component
{
    public function render()
    {
        return view('livewire.log-index', [
            'logs' => \App\Models\Log::with(['user', 'nivel'])->orderBy('fechalogs', 'desc')->paginate(10)
        ])
        ->layout('components.layouts.app.sidebar');
    }
}
