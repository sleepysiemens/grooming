<?php

namespace App\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithPagination;

class ApplicationsList extends Component
{
    use WithPagination;

    public function render()
    {
        $applications=Application::query()->orderBy('created_at', 'desc')->paginate();
        return view('livewire.applications-list', compact(['applications']));
    }
}
