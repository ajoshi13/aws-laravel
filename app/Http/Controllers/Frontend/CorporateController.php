<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class CorporateController extends Controller
{
    public function index()
    {
        $display_corporate = News::all()->where('category', '=', 'Corporate');
        $data = compact('display_corporate');
        return view('frontend.corporate')->with($data);
    }
    public function corporate_back()
    {
        $display_corporate = News::all()->where('category', '=', 'Corporate');
        $data = compact('display_corporate');
        return view('backend.Corporate')->with($data);
    }
}
