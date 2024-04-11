<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class MainController extends Controller
{
    public function index()
    {
        $products=$this->productService->get_products();
        return view('pages.main.index', compact(['products']));
    }

    public function form_submit(Request $request)
    {
        $this->applicationService->store($request);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }
}
