<?php

namespace App\Livewire\Vents;

use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        return view('livewire.vents.index')->layout('layouts.app');
    }
}
