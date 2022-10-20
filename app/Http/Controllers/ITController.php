<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class ITController extends Controller
{
    public function it_back()
    {
        $display_it = News::latest()->get()->where('category', '=', 'IT');
        $data = compact('display_it');
        return view('backend.IT')->with($data);

    }
}
