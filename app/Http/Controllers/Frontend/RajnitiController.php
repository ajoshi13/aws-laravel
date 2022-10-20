<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class RajnitiController extends Controller
{
    public function index()
    {
        $display_rajniti = News::all()->where('category', '=', 'Rajniti');
        $data = compact('display_rajniti');
        return view('frontend.rajniti')->with($data);
    }
    public function rajniti_back()
    {
        $display_rajniti = News::latest()->get()->where('category', '=', 'News');
        $data = compact('display_rajniti');
        return view('backend.Rajneti')->with($data);

    }
}
