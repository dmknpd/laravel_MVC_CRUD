<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Http\Requests\StorePlantRequest;
use App\Http\Requests\UpdatePlantRequest;
use Illuminate\Support\Facades\Auth;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plants = Plant::latest()->with('seller')->get();

        return view('plants.index', [
            'plants' => $plants
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $plant = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required'],
            'price' => ['required', 'numeric'],
            'img' => ['required', 'url'],
        ]);

        $plant['seller_id'] = Auth::user()->seller->id;

        Plant::create($plant);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        return view('plants.show', ['plant' => $plant]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        return view('plants.edit', ['plant' => $plant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Plant $plant)
    {
        $updatedPlant = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required'],
            'price' => ['required', 'numeric'],
            'img' => ['required', 'url'],
        ]);

        $plant->update($updatedPlant);

        return redirect('/plants/' . $plant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();

        return redirect('/');
    }
}
