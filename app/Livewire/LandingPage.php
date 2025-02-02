<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class LandingPage extends Component
{
    public $clinic_id;
    public $clinic_logo;

    #[Layout('components.layouts.guest')]
    public function sendData()
    {
        session()->put('clinic_id', $this->clinic_id);
        session()->put('clinic_logo', $this->clinic_logo);

        return $this->redirectRoute('index'); // Use Livewire's redirect method
    }

    public function setClinic($clinic_id, $clinic_logo)
    {
        $this->clinic_id = $clinic_id;
        $this->clinic_logo = $clinic_logo;

        $this->sendData();
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
