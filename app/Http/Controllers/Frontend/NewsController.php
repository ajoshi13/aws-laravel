<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Mainadv;
use App\Models\Slideradv;
use Illuminate\Support\Facades\URL;

class NewsController extends Controller

{

    public function create_news()
    {
        $url = url('/create_news');

        $news = new News();
        $title = "Create News";
        $data = compact('url', 'title','news');
        return view('backend.create_news')->with($data);
    }



    public function upload_news(Request $request)
    {
        $request->validate(
            [
                'category' => 'required',
                'headline' => 'required',
                'sub_headline' => 'required',
                'description' => 'required'

            ]

        );

        $news = new News;
        $news->category = $request['category'];
        $news->headline = $request['headline'];
        $news->sub_headline = $request['sub_headline'];
        $news->description = $request['description'];
        $news->slide_h1 = $request['slide_h1'];
        $news->slide_d1 = $request['slide_d1'];
        $news->slide_h2 = $request['slide_h2'];
        $news->slide_d2 = $request['slide_d2'];
        $news->slide_h3 = $request['slide_h3'];
        $news->slide_d3 = $request['slide_d3'];
        $news->image = $request['image'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/news', $filename);
            $news->image = $filename;
        }
        $news->save();

        return redirect('/view_news');
    }

    public function view_news()
    {
        $newss = News::all();
        $data = compact('newss');

        return view('backend.view_news')->with($data);

    }

    public function delete($id)
    {
       $news = News::find($id);
       if(!is_null($news))
       {
        $news->delete();
       }
       return redirect()->back();

    }

    public function edit($id)
    {
        $news = News::find($id);
        if(is_null($news))
        {
            return redirect('/view_news');
        } else{
            $title = "Update News";
            $url = url('/view_news/update'). '/'. $id;
            $data = compact('news', 'url', 'title');
            return view('backend.create_news')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $news = News::find($id);
        $news->category = $request['category'];
        $news->headline = $request['headline'];
        $news->sub_headline = $request['sub_headline'];
        $news->description = $request['description'];
        $news->slide_h1 = $request['slide_h1'];
        $news->slide_d1 = $request['slide_d1'];
        $news->slide_h2 = $request['slide_h2'];
        $news->slide_d2 = $request['slide_d2'];
        $news->slide_h3 = $request['slide_h3'];
        $news->slide_d3 = $request['slide_d3'];
        $news->image = $request['image'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/news', $filename);
            $news->image = $filename;
        }
        $news->save();
        return redirect('/view_news');

    }

    public function read_news($id)
    {
        $news = News::find($id);
        if(is_null($news))
        {
            return redirect('/');
        } else{
            $data = compact('news');
            return view('frontend.news')->with($data);
    }


    }
    public function news_dashboard()
    {
        $samachar = News::where('category', 'News')->count();
        $rajniti = News::where('category', 'Rajniti')->count();
        $mofsal = News::where('category', 'mofsal')->count();
        $entertainment = News::where('category', 'Entertainment')->count();
        $sport = News::where('category', 'sports')->count();
        $share = News::where('category', 'Share')->count();
        $corporate = News::where('category', 'Corporate')->count();
        $intl = News::where('category', 'International')->count();
        $it = News::where('category', 'IT')->count();
        $bibidh = News::where('category', 'bibidh')->count();
        $automobile = News::where('category', 'automobile')->count();
        $bichar = News::where('category', 'bichar')->count();
        $data = compact('samachar', 'rajniti', 'mofsal','entertainment','sport','share','corporate','intl','automobile','bibidh','it','bichar');
        return view('backend.news_dashboard')->with($data);
    }


}
