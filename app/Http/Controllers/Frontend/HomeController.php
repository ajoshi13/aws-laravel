<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mainadv;
use App\Models\Slideradv;
use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $display_news = News::latest()->get();
        $display_mainadv = Mainadv::all();
        $display_slideradv = Slideradv::all();
        $data = compact('display_news', 'display_mainadv', 'display_slideradv');
        return view('frontend.index')->with($data);


    }


}
