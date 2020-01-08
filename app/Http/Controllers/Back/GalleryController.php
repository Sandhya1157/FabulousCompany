<?php

namespace App\Http\Controllers\Back;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // return view('back.Gallery.index');
        $galleries = Gallery::orderBy('updated_at', 'desc')->get();
        return view('back.Gallery.index', compact('galleries'));

    }

    public function store(Request $request)
    {
       $gallery = new Gallery;
       $gallery->image = $request->image;
       $gallery->save();
       return redirect()->back();
    }
    public function edit(Gallery $gallery)
    {
        return view('back.Gallery.edit', compact('gallery'));
        
    }

    public function update(Request $request, Gallery $gallery)
    {
        $gallery->image = $request->image;
        $gallery->save();
        return redirect()->back();  
    }

    
    public function delete(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
        
    }

}
