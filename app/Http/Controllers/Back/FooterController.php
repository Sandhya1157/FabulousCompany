<?php

namespace App\Http\Controllers\Back;
use App\Footer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::orderBy('updated_at', 'desc')->get();
        return view('back.Footer.index', compact('footers'));

    }

    public function store(Request $request)
    {
        $footer = new Footer;
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->fblink = $request->fblink;
        $footer->tweeter = $request->tweeter;
        $footer->instagram = $request->instagram;
        $footer->save();
        return redirect()->back();
    }

    public function edit(Footer $footer)
    {
        return view('back.Footer.edit', compact('footer'));  
    }

    
    public function update(Request $request, Footer $footer)
    {
        $footer->name = $request->name;
        $footer->url = $request->url;
        $footer->fblink = $request->fblink;
        $footer->tweeter = $request->tweeter;
        $footer->instagram = $request->instagram;
        $footer->save();
        return redirect()->back();
    }

    public function delete(Footer $footer)
    {
        $footer->delete();
        return redirect()->back();
    }
}
