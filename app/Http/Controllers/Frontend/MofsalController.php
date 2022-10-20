<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class MofsalController extends Controller
{
    public function index()
    {
        $display_mofsal = News::all()->where('category', '=', 'mofsal');
        $data = compact('display_mofsal');
        return view('frontend.mofsal')->with($data);
    }
    public function mofsal_back()
    {
        $display_mofsal = News::all()->where('category', '=', 'mofsal');
        $data = compact('display_mofsal');
        return view('backend.Mofosal')->with($data);
    }
}
