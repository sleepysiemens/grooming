<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderFormBtn extends Component
{

    public function toggle_form()
    {
        $this->dispatch('toggle_from');
    }
    public function render()
    {
        return view('livewire.header-form-btn');
    }
}
