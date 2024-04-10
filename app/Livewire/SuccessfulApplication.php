<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessfulApplication extends Component
{

    public function placeholder()
    {
        return view('livewire.successful-application');

    }
    public function render()
    {
        sleep(7);
        return view('livewire.successful-application-null');
    }
}
