<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create_product()
    {
        return view('admin.products.create');
    }

    public function store_product(request $request)
    {
        $this->productService->store($request);

        return redirect()->route('admin.products.index');
    }

    public function delete_product(Products $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index');
    }

    public function edit_product(Products $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update_product(Products $product, Request $request)
    {
        $this->productService->update($request, $product);

        return redirect()->route('admin.products.index');
    }
}
