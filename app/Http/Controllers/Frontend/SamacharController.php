<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class SamacharController extends Controller
{
    public function index()
    {
        $display_samachar = News::latest()->get()->where('category', '=', 'News');
        $data = compact('display_samachar');
        return view('frontend.samachar')->with($data);
    }

    public function samachar_back()
    {
        $display_samachar = News::latest()->get()->where('category', '=', 'News');
        $data = compact('display_samachar');
        return view('backend.samachar')->with($data);

    }
}
