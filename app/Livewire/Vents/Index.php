<?php

namespace App\Livewire\Vents;

use Livewire\Component;

class Index extends Component
{
    public $id;
    public $logo;

    public function mount()
    {
        $this->id = session('clinic_id');
        $this->logo = session('clinic_logo');
    }
    
    public function render()
    {
        return view('livewire.vents.index')->layout('components.layouts.app');
    }
}
