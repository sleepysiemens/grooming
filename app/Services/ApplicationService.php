<?php

namespace App\Services;

use App\Models\Application;

class ApplicationService
{
    public function store($request)
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
}
