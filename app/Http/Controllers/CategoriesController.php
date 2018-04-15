<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        return view('categories.index',compact($category));
    }

    public function create()
    {
        return view('categories.create');
    }


    public function stores(Request $request)
    {
        $category = $this->create($request->all());
        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
    }

    public function update(Request $request,Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
