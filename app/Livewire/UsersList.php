<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersList extends Component
{
    public function change_is_master(User $user)
    {
        $user->is_master=!$user->is_master;
        $user->save();
    }

    public function render()
    {
        $users=User::query()->where('is_admin',0)->paginate(9);
        return view('livewire.users-list', compact('users'));
    }
}
