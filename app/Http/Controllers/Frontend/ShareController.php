<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class ShareController extends Controller
{
    public function index()
    {
        $display_share = News::all()->where('category', '=', 'Share');
        $data = compact('display_share');
        return view('frontend.share')->with($data);
    }
    public function share_back()
    {
        $display_share = News::all()->where('category', '=', 'Share');
        $data = compact('display_share');
        return view('backend.sharemarket')->with($data);
    }
}
