<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class AutomobileController extends Controller
{
    public function automobile_back()
    {
        $display_automobile = News::latest()->get()->where('category', '=', 'automobile');
        $data = compact('display_automobile');
        return view('backend.automobile')->with($data);

    }
}
