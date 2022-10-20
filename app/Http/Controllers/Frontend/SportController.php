<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class SportController extends Controller
{
    public function index()
    {
        $display_sport = News::all()->where('category', '=', 'sports');
        $data = compact('display_sport');
        return view('frontend.sport')->with($data);
    }
    public function sport_back()
    {
        $display_sport = News::all()->where('category', '=', 'sports');
        $data = compact('display_sport');
        return view('backend.sport')->with($data);
    }
}
