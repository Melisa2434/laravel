<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function foodItems()
    {
        return $this->hasMany(FoodItem::class);
    }


}
