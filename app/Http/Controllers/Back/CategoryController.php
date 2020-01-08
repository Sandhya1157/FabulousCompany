<?php

namespace App\Http\Controllers\Back;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // return view('back.Catalog.Category.index');
        $categories = Category::orderBy('updated_at', 'desc')->get();
        return view('back.Catalog.Category.index', compact('categories'));
    }

    
    public function store(Request $request)
    {
       $category = new Category;
       $category->name = $request->name;
       $category->description = $request->description;
       $category->save();
       return redirect()->back();
    }
    public function edit(Category $category)
    {
        return view('back.Catalog.Category.edit', compact('category'));
        
    }

    public function update(Request $request, Category $category)
    {
        $category->category = $request->category;
        $category->save();
        return redirect()->back();  
    }

    
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->back();
        
    }
}
