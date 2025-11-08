<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    public function consumer()
    {
        return $this->belongsTo(Consumer::class);
    }

    public function exercises()
    {
        return $this->belongsTo(Exercises::class);
    }
}
