<?php

namespace App\Http\Controllers\Back;
use App\Clientheading;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeadingController extends Controller
{
    public function index()
    {
        // return view('back.Client.Heading.index');
        $headings = Clientheading::orderBy('updated_at', 'desc')->get();
        return view('back.Client.Heading.index', compact('headings'));

    }

    public function store(Request $request)
    {
       $heading = new Clientheading;
       $heading->description = $request->description;
       $heading->save();
       return redirect()->back();
    }

    public function edit(Clientheading $heading)
    {
        return view('back.Client.Heading.edit', compact('heading'));
        
    }

    public function update(Request $request, Clientheading $heading)
    {
        $heading->description = $request->description;
        $heading->save();
        return redirect()->back();  
    }

    
    public function delete(Clientheading $heading)
    {
        $heading->delete();
        return redirect()->back();
        
    }

}
