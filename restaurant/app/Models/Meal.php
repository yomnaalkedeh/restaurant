<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\CartItem;
use App\Models\CartMeal;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;
    protected $fillable =['name','category_id','price','description','image'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cartitem()
    {
        return $this->belongsTo(CartItem::class);
    }
    public function bookings()
    {
        return $this->belongsToMany(Booking::class)->withPivot('quantity')->withTimestamps();
    }

    public function carts()
    {
        return $this->belongsToMany(CartItem::class)->withPivot('quantity')->withTimestamps();
    }
    public function cartItems()
    {
        return $this->belongsToMany(CartItem::class, 'cart_meal')
                    ->using(CartMeal::class)
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
