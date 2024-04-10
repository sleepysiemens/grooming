<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Products;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class MainController extends Controller
{
    public function index()
    {
        $products=Products::all();
        return view('pages.main.index', compact(['products']));
    }

    public function form_submit(Request $request)
    {
        //защита от ботов
        if($request->email==null)
        {
            $data=$request->all();
            unset($data['_token']);
            unset($data['email']);
            Application::create($data);

            return redirect()->route('main.index')->with('success',1);
        }

        return redirect()->route('main.index')->with('fail',1);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('main.index');
    }
}
