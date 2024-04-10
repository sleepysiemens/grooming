<?php

namespace App\Livewire;

use Livewire\Component;

class FailedApplication extends Component
{

    public function placeholder()
    {
        return view('livewire.failed-application');


    }
    public function render()
    {
        sleep(7);
        return view('livewire.successful-application-null');
    }
}
