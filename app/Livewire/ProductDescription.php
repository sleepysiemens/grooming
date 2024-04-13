<?php

namespace App\Livewire;

use App\Models\ProductInclude;
use Livewire\Component;

class ProductDescription extends Component
{
    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function delete_include(ProductInclude $productInclude)
    {
        $productInclude->delete();
    }

    public function render()
    {
        $product_includes=ProductInclude::query()->where('product_id', $this->product->id)->get();
        return view('livewire.product-description', compact(['product_includes']));
    }
}
