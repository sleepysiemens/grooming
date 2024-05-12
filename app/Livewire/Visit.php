<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Visit as Visit_;

class Visit extends Component
{
    public $time;
    public $has_visit=false;

    public function mount($time)
    {
        $this->time = $time;
    }

    public function render()
    {
        if(auth()->user()->is_admin)
        {
            $visit=Visit_::query()
                ->where('visits.date_time','=', $this->time)
                ->join('users','visits.master_id','=','users.id')
                ->join('applications','visits.application_id','=','applications.id')
                ->select('visits.*','users.name', 'applications.name as client_name', 'applications.phone', 'applications.pet_name', 'applications.product')
                ->first();
        }
        else
        {
            $visit=Visit_::query()
                ->where('visits.date_time','=', $this->time)
                ->where('visits.master_id','=',auth()->user()->id)
                ->join('users','visits.master_id','=','users.id')
                ->join('applications','visits.application_id','=','applications.id')
                ->select('visits.*','users.name', 'applications.name as client_name', 'applications.phone', 'applications.pet_name')
                ->first();
        }

        if($visit!=null)
            $this->has_visit=true;

        return view('livewire.visit', compact('visit'));
    }
}
