<?php

namespace App\Http\Controllers\Back;
use App\CivilProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CivilProjectController extends Controller
{
    public function index()
    {
        $civilprojects = CivilProject::orderBy('updated_at', 'desc')->get();
        return view('back.CivilProjects.index', compact('civilprojects'));

    }

    public function store(Request $request)
    {
        $civilproject = new CivilProject;
        $civilproject->name = $request->name;
        $civilproject->description = $request->description;
        $civilproject->image = $request->image;
        $civilproject->save();
        return redirect()->back();
    }

    public function edit(CivilProject $civilproject)
    {
        return view('back.CivilProjects.edit', compact('civilproject'));  
    }

    
    public function update(Request $request, CivilProject $civilproject)
    {
        $civilproject->name = $request->name;
        $civilproject->description = $request->description;
        $civilproject->image = $request->image;
        $civilproject->save();
        return redirect()->back();
    }

    public function delete(CivilProject $civilproject)
    {
        $civilproject->delete();
        return redirect()->back();
    }

}
