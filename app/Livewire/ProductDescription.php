<?php

namespace App\Livewire;

use App\Models\ProductInclude;
use Livewire\Component;

class ProductDescription extends Component
{
    public $product;
    public $product_includes;

    public function mount($product)
    {
        $this->product = $product;
        $this->product_includes=ProductInclude::query()->where('product_id', $this->product->id)->get();

    }

    public function delete_include(ProductInclude $productInclude)
    {
        $productInclude->delete();
        $this->product_includes=ProductInclude::query()->where('product_id', $this->product->id)->get();
    }

    public function render()
    {
        return view('livewire.product-description');
    }
}
