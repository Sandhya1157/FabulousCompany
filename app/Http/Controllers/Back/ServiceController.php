<?php

namespace App\Http\Controllers\Back;
use App\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('updated_at', 'desc')->get();
        return view('back.Service.index', compact('services'));

    }

    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->save();
        return redirect()->back();
    }

    public function edit(Service $service)
    {
        return view('back.Service.edit', compact('service'));  
    }

    
    public function update(Request $request, Service $service)
    {
        $service->name = $request->name;
        $service->description = $request->description;
        $service->image = $request->image;
        $service->save();
        return redirect()->back();
    }

    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
    
}
