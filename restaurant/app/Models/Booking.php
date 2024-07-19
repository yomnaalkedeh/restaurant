<?php

namespace App\Models;

use App\Models\Meal;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'phone', 'email', 'persons', 'date','user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function meals()
    {
        return $this->belongsToMany(Meal::class)->withPivot('quantity')->withTimestamps();
    }
}
