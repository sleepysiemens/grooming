<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Products;
use App\Models\User;
use App\Models\Visit;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.applications.index');
    }

    public function edit(Application $application)
    {
        $masters=User::query()->where('is_master',1)->get();
        return view('admin.applications.edit', compact(['application', 'masters']));
    }

    public function update(Request $request, Application $application)
    {
        $this->applicationService->approve_application($request,$application);
        return redirect()->route('admin.index');
    }
}
