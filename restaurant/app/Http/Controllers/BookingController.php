<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function create()
    {
        $meals = Meal::all();
        return view('web.booking', compact('meals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'persons' => 'required|integer|min:1',
            'date' => 'required|date',
            'meals' => 'array',
            'meals.*' => 'exists:meals,id',
            'quantities' => 'array',
            'quantities.*' => 'integer|min:1'
        ]);

        if (Auth::check()) {
            $booking = Booking::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'persons' => $request->persons,
                'date' => $request->date,
                'user_id' => Auth::id(),
            ]);
            if ($request->has('meals') && $request->has('quantities')) {
                $mealsWithQuantities = [];
    
                foreach ($request->meals as $mealId) {
                    if (isset($request->quantities[$mealId])) {
                        $mealsWithQuantities[$mealId] = ['quantity' => $request->quantities[$mealId]];
                    }
                }
    
                $booking->meals()->attach($mealsWithQuantities);
            }
    
            return redirect()->back()->with('success', 'Booking created successfully!');
        } else {
            return redirect()->route('login')->with('error', 'You need to be logged in to make a booking.');
        }

}
}
