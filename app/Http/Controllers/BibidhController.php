<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class BibidhController extends Controller
{
    public function bibidh_back()
    {
        $display_bibidh = News::latest()->get()->where('category', '=', 'bibidh');
        $data = compact('display_bibidh');
        return view('backend.extra')->with($data);

    }
}
