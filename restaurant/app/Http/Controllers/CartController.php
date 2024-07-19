<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in to add items to the cart.');
        }

        $mealId = $request->input('meal_id');
        $quantity = $request->input('quantity', 1);


        $cartItem = CartItem::firstOrCreate(['user_id' => Auth::id()]);


        $existingCartItem = $cartItem->meals()->where('meal_id', $mealId)->first();

        if ($existingCartItem) {

            $cartItem->meals()->updateExistingPivot($mealId, ['quantity' => $existingCartItem->pivot->quantity + $quantity]);
        } else {

            $cartItem->meals()->attach($mealId, ['quantity' => $quantity]);
        }

        return redirect()->back()->with('success', 'Meal added to cart!');
    }
    public function index()
{
    $cartItems = CartItem::with('meal')->get();
    return view('web.cart', compact('cartItems'));
}

public function showCart()
    {


        $cartItems = CartItem::where('user_id', Auth::id())->with('meals')->get();

        return view('web.cart', compact('cartItems'));
    }

    public function removeFromCart(Meal $meal)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in to remove items from the cart.');
        }

        $cartItem = CartItem::where('user_id', Auth::id())->first();

        if ($cartItem) {
            $cartItem->meals()->detach($meal->id);
        }

        return redirect()->route('cart.show')->with('success', 'Meal removed from cart!');
    }

    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::where('user_id', Auth::id())->first();
        $cartItem->meals()->updateExistingPivot($meal->id, ['quantity' => $request->quantity]);

        return redirect()->back()->with('success', 'Cart updated successfully!');
    }
}
