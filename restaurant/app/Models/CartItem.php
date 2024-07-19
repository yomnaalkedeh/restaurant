<?php

namespace App\Models;

use App\Models\CartMeal;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id','quantity'

    ];
    public function meal()
    {
        return $this->hasMany(Meal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

  /*  public function meals()
    {
        return $this->belongsToMany(Meal::class)->withPivot('quantity')->withTimestamps();
    }*/

    public function meals()
    {
        return $this->belongsToMany(Meal::class, 'cart_meal')
                    ->using(CartMeal::class)
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}
