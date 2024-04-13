<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    public function index()
    {
        return view('admin.timetable.index');
    }
}
