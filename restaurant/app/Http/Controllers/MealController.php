<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MealController extends Controller
{
    public function index(Request $request){
        $query = Meal::query();


        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        $meals = $query->with('category')->get();
        $categories = Category::all();
        return view('dashboard.meal.index', compact('meals','categories'));
    }


    public function create()
    {
        $meals = Meal::all();
        $categories = Category::all();
        return view('dashboard.meal.create', compact('meals','categories'));
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|string|max:255',
            'description' => 'required|string|max:255',
           'image' => 'required|mimes:png,jpg,jpeg,webp',

        ]);

        if($request->has('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/meal/';
            $file->move($path,$filename);
        }



        Meal::create([
            'image' =>$path.$filename,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,




        ]);



        return redirect()->route('meals.index')
                         ->with('success', 'Category created successfully.');
    }

    public function edit(Meal $meal)
    {
        $meals = Meal::all();
        $categories = Category::all();
        return view('dashboard.meal.edit', compact('meals','categories'));
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|max:255',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
        ]);
        $meal=Meal::findOrFail($id);
        if($request->has('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/meal/';
            $file->move($path,$filename);

            if(File::exists($meal->image)){
                File::delete($meal->image);
            }
        }



        $meal->update([
            'image' =>$path.$filename,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,




        ]);
        return redirect()->route('meals.index')
                         ->with('success', 'Meal updated successfully.');
    }

    public function destroy(Meal $meal)
    {
        $meal->delete();

        return redirect()->route('meals.index')
                         ->with('success', 'Meal deleted successfully.');
    }
}
