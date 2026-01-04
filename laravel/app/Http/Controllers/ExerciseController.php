<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index() 
    {
        dd(Exercise::all());
    }

    public function create() 
    {
        Exercise::create([
            'name' => 'Running',
            'type' => 'Cardio',
            'unit' => 'minute',
            'calori' => 12
        ]);

        Exercise::create([
            'name' => 'Push-up',
            'type' => 'Strength',
            'unit' => 'count',
            'calori' => 1
        ]);
    }

    public function store(Request $request) 
    {
        //
    }

    public function show(Exercise $exercise) 
    {
        //
    }

    public function edit(Exercise $exercise) 
    {
        //
    }

    public function update(Request $request, Exercise $exercise) 
    {
        //
    }

    public function destroy(Exercise $exercise) 
    {
        //
    }
}
