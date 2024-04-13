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

        if(isset($data['include_title']) and $data['include_title']!=null)
        {
            foreach ($data['include_title'] as $include)
            {
                ProductInclude::create(['product_id'=>$product->id,'title'=>$include]);
            }
        }
        unset($data['include_title']);

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

    public function paginate_products()
    {
        $products=Products::paginate();
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
