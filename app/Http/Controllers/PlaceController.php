<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('places.index', compact('places'));
    }

    public function show($id)
    {
        $place = Place::findOrFail($id);
        return view('places.show', compact('place'));
    }

    public function like($id)
    {
        $place = Place::findOrFail($id);
        $place->increment('likes');
        return back();
    }
}

