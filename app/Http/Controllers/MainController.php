<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class MainController extends Controller
{
    public function index()
    {
        $products = $this->productService->get_products();
        return view('pages.main.index', compact(['products']));
    }

    public function form_submit(Request $request)
    {
        if($this->applicationService->store($request))
            return redirect()->route('main.index')->with('success',1);
        else
            return redirect()->route('main.index')->with('fail',1);
    }
}
