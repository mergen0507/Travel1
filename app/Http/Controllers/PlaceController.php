<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
public function index()
{
$places = Place::all();
$categories = Category::all();
return view('places.index', compact('places', 'categories'));
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

public function create()
{
return view('places.create');
}

public function store(Request $request)
{
$request->validate([
'name' => 'required|string|max:255',
'description' => 'required|string',
'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
]);

$place = Place::create([
'name' => $request->name,
'description' => $request->description,
'likes' => 0,
]);

if ($request->hasFile('photo')) {
$imageName = time().'.'.$request->photo->extension();
$request->photo->move(public_path('images'), $imageName);

Photo::create([
'place_id' => $place->id,
'path' => '/images/' . $imageName,
]);
}

return redirect()->route('places.index');
}
}
