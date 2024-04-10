<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create_product()
    {
        return view('admin.products.create');
    }

    public function store_product(request $request)
    {
        $data=$request->all();
        unset($data['_token']);
        unset($data['_method']);
        Products::create($data);
        return redirect()->route('admin.index');
    }

    public function delete_product(Products $product)
    {
        $product->delete();
        return redirect()->route('admin.index');
    }

    public function edit_product(Products $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update_product(Products $product, Request $request)
    {
        $data=$request->all();
        unset($data['_token']);
        unset($data['_method']);
        $product->update($data);
        return redirect()->route('admin.index');
    }
}
