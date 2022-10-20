<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class InternationalController extends Controller
{
    public function index()
    {
        $display_international = News::all()->where('category', '=', 'International');
        $data = compact('display_international');
        return view('frontend.international')->with($data);
    }
    public function international_back()
    {
        $display_international = News::all()->where('category', '=', 'International');
        $data = compact('display_international');
        return view('backend.international')->with($data);
    }
}
