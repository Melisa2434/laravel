<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index() 
    {
        return view('meals.example');
    }

    public function create() 
    {

    }

    public function store(Request $request) 
    {
        //
    }

    public function show(Meal $meal) 
    {
        //
    }

    public function edit(Meal $meal) 
    {
        //
    }

    public function update(Request $request, Meal $meal) 
    {
        //
    }

    public function destroy(Meal $meal) 
    {
        //
    }
}
