<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index()
    {

        $categories = Category::all();
        return view('categories.index',compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit($account, Category $category)
    {
        return view('categories.edit',compact('category'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->routeTenant('categories.index');
    }


    public function show(Category $category)
    {
    }

    public function update(Request $request, $account,Category $category)
    {
        $category->update($request->all());
        return redirect()->routeTenant('categories.index');
    }

    public function destroy($account, Category $category)
    {
        $category->delete();
        return redirect()->routeTenant('categories.index');
    }
}
