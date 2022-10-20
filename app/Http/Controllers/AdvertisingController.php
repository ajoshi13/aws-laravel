<?php

namespace App\Http\Controllers;

use App\Models\Mainadv;
use App\Models\Slideradv;
use Illuminate\Http\Request;

class AdvertisingController extends Controller
{
    public function index()
    {
        return view('backend.advpage');
    }

    public function mainadv()
    {
        return view('backend.advpost');
    }

    public function slideradv()
    {
        return view('backend.slideradv');
    }

    public function upload_mainadv($id=2, Request $request)
    {

        $mainadv = Mainadv::find($id);
        $mainadv->image = $request['image'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/mainadv', $filename);
            $mainadv->image = $filename;
        }
        $mainadv->save();
        return redirect('/advpage');
    }

    public function upload_slideradv($id=4, Request $request)
    {

        $slideradv = Slideradv::find($id);
        $slideradv->image1 = $request['image1'];
        $slideradv->image2 = $request['image2'];
        $slideradv->image3 = $request['image3'];
        $slideradv->image4 = $request['image4'];
        if($request->hasfile('image1'))
        {
            $file1 = $request->file('image1');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time() .'1' .'.'.$extension1;
            $file1->move('uploads/slideradv', $filename1);
            $slideradv->image1 = $filename1;
        }
        if($request->hasfile('image2'))
        {
            $file2 = $request->file('image2');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time() . '2' .'.'.$extension2;
            $file2->move('uploads/slideradv', $filename2);
            $slideradv->image2 = $filename2;
        }
        if($request->hasfile('image3'))
        {
            $file3 = $request->file('image3');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = time() . '3' .'.'.$extension3;
            $file3->move('uploads/slideradv', $filename3);
            $slideradv->image3 = $filename3;
        }
        if($request->hasfile('image4'))
        {
            $file4 = $request->file('image4');
            $extension4 = $file4->getClientOriginalExtension();
            $filename4 = time(). '4' . '.'.$extension4;
            $file4->move('uploads/slideradv', $filename4);
            $slideradv->image4 = $filename4;
        }
        $slideradv->save();
        return redirect('/advpage');
    }
}
