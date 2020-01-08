<?php

namespace App\Http\Controllers\Back;
use App\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        // return view('back.Logo.index');
        $videos = Video::orderBy('updated_at', 'desc')->get();
        return view('back.Video.index', compact('videos'));

    }

    public function store(Request $request)
    {
       $video = new Video;
       $video->video = $request->video;
       $video->save();
       return redirect()->back();
    }
    public function edit(Video $video)
    {
        return view('back.Video.edit', compact('video'));
        
    }

    public function update(Request $request, Video $video)
    {
        $video->video = $request->video;
        $video->save();
        return redirect()->back();  
    }

    
    public function delete(Video $video)
    {
        $video->delete();
        return redirect()->back();
        
    }
}
