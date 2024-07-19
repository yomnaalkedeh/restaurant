<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $query = Meal::query();


        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        $meals = $query->with('category')->get();
        $categories = Category::all();
        return view('web.homeweb',compact('meals','categories'));
    }

    public function dashboard()
    {
        $meals = Meal::all();
        $categories = Category::all();
        return view('dashboard2.dashboard2',compact('meals','categories'));
    }


    public function home()
    {
        $meals = Meal::all();
        $categories = Category::all();
        return view('web.homeweb',compact('meals','categories'));
    }

    public function menu(Request $request)
    {
        $query = Meal::query();


        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        $meals = $query->with('category')->get();
        $categories = Category::all();
        return view('web.menu',compact('meals','categories'));
    }
}
