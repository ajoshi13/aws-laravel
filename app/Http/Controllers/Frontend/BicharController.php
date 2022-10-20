<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class BicharController extends Controller
{
    public function index()
    {
        return view('frontend.bichar');
    }
    public function bichar_back()
    {
        $display_bichar = News::all()->where('category', '=', 'bichar');
        $data = compact('display_bichar');
        return view('backend.Bichar')->with($data);
    }
}
