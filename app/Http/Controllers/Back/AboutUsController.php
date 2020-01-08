<?php

namespace App\Http\Controllers\Back;
use App\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts= AboutUs::orderBy('updated_at', 'desc')->get();
        return view('back.Client.aboutUs.index',compact('abouts'));

    }

    
    public function store(Request $request)
    {
        $aboutus = new AboutUs;
        $aboutus->description = $request->description;
        $aboutus->save();
        return redirect()->back();
    }

    public function edit(AboutUs $about)
    {
        return view('back.Client.aboutUs.edit', compact('about'));
    }

    
    public function update(Request $request, AboutUs $about)
    {
        $about->description = $request->description;
        $about->save();
        return redirect()->back();
    }

    
    public function delete(AboutUs $about)
    {
        $about->delete();
        return redirect()->back();
    }



    

}
