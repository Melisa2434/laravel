<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Model
{
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }
}
