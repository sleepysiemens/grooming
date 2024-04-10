<?php

namespace App\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;
    public function render()
    {
        $products=Products::paginate(9);
        return view('livewire.products-list', compact(['products']));
    }
}
