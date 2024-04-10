<?php

namespace App\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithPagination;

class ApplicationsList extends Component
{
    use WithPagination;

    public function change_approval(Application $application)
    {
        $application->is_approved=!$application->is_approved;
        $application->save();
    }

    public function render()
    {
        $applications=Application::paginate();
        return view('livewire.applications-list', compact(['applications']));
    }
}
