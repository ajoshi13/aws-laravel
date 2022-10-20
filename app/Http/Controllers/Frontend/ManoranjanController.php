<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;


class ManoranjanController extends Controller
{
    public function index()
    {
        $display_manoranjan = News::all()->where('category', '=', 'Entertainment');
        $data = compact('display_manoranjan');
        return view('frontend.manoranjan')->with($data);
    }
    public function manoranjan_back()
    {
        $display_manoranjan = News::all()->where('category', '=', 'Entertainment');
        $data = compact('display_manoranjan');
        return view('backend.manoranjna')->with($data);
    }
}
