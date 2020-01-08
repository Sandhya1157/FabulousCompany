<?php

namespace App\Http\Controllers\Back;
use App\Logo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function index()
    {
        // return view('back.Logo.index');
        $logos = Logo::orderBy('updated_at', 'desc')->get();
        return view('back.Logo.index', compact('logos'));

    }

    public function store(Request $request)
    {
       $logo = new Logo;
       $logo->image = $request->image;
       $logo->save();
       return redirect()->back();
    }
    public function edit(Logo $logo)
    {
        return view('back.Logo.edit', compact('logo'));
        
    }

    public function update(Request $request, Logo $logo)
    {
        $logo->image = $request->image;
        $logo->save();
        return redirect()->back();  
    }

    
    public function delete(Logo $logo)
    {
        $logo->delete();
        return redirect()->back();
        
    }

}
