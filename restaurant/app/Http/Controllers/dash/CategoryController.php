<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        $meals = Meal::all();
        return view('dashboard2.category.index', compact('categories','meals'));
    }


    public function create()
    {
        $categories = Category::all();
        $meals = Meal::all();
        return view('dashboard2.category.create', compact('meals','categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);

        Category::create($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        $categories = Category::all();
        $meals = Meal::all();
        return view('dashboard2.category.edit', compact('meals','categories','category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}
