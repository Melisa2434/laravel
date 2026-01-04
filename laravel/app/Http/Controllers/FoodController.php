<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index() 
    {
        dd(Food::all());
    }

    public function create() 
    {
        Food::create([
            'name' => 'Grilled Chicken',
            'major' => 'protein',
            'calori' => 250
        ]);

        Food::create([
            'name' => 'Banana',
            'major' => 'Carbonhtdrate',
            'calori' => 90
        ]);
    }

    public function store(Request $request) 
    {
        //

    }   

    public function show(Food $food) 
    {
        //
    }

    public function edit(Food $food) 
    {
        //
    }

    public function update(Request $request, Food $food) 
    {
        //
    }

    public function destroy(Food $food) 
    {
        //
    }


}
