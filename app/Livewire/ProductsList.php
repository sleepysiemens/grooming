<?php

namespace App\Livewire;

use App\Models\Products;
use App\Services\ProductService;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsList extends Component
{
    use WithPagination;
    protected $productService;

    public function mount(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function render()
    {
        $products = $this->productService->paginate_products();

        return view('livewire.products-list', compact(['products']));
    }
}
