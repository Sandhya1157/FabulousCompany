<?php

namespace App\Http\Controllers\Back;
use App\OurProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OurProjectController extends Controller
{
    public function index()
    {
        $ourprojects = OurProject::orderBy('updated_at', 'desc')->get();
        return view('back.Client.ourProject.index', compact('ourprojects'));

    }

    public function store(Request $request)
    {
        $ourproject = new OurProject;
        $ourproject->description = $request->description;
        $ourproject->save();
        return redirect()->back();
    }

    public function edit(OurProject $ourproject)
    {
        return view('back.Client.ourProject.edit', compact('ourproject'));  
    }

    
    public function update(Request $request, OurProject $ourproject)
    {
        $ourproject->description = $request->description;
        $ourproject->save();
        return redirect()->back();
    }

    public function delete(OurProject $ourproject)
    {
        $ourproject->delete();
        return redirect()->back();
    }
}
