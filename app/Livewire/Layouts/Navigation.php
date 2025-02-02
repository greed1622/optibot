<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Navigation extends Component
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
        return view('livewire.layouts.navigation');
    }
}
