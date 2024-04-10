<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class OverlayForm extends Component
{
    public $is_visible = false;
    #[On('toggle_from')]
    public function toggle_form()
    {
        $this->is_visible=!$this->is_visible;
    }
    public function render()
    {
        return view('livewire.overlay-form');
    }
}
