<?php

namespace App\Services;

use App\Models\ProductInclude;
use App\Models\Products;

class ProductService
{
    public function store($request)
    {
        $data=$request->all();
        unset($data['_token']);
        unset($data['_method']);
        Products::create($data);
    }

    public function update($request, $product)
    {
        $data=$request->all();
        unset($data['_token']);
        unset($data['_method']);
        $product->update($data);
    }

    public function get_products()
    {
        $products=Products::all();
        foreach ($products as $product)
        {
            $includes=[];
            foreach (ProductInclude::query()->where('product_id','=',$product->id)->get() as $include)
            {
                $includes[]=$include->title;
            }
            $product->includes=$includes;
        }
        return $products;
    }
}
