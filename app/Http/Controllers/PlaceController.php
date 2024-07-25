<?php
namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Category;
use App\Models\Country;
use App\Models\Photo;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $category_id = $request->input('category');

        $places = Place::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->when($category_id, function ($query, $category_id) {
            return $query->whereHas('categories', function ($query) use ($category_id) {
                $query->where('id', $category_id);
            });
        })->get();

        $categories = Category::all();
        $topPlaces = Place::with('reviews')->get()->sortByDesc(function($place) {
            return $place->averageRating();
        })->take(3);

        return view('places.index', compact('places', 'categories', 'search', 'category_id', 'topPlaces'));
    }

    public function show($id)
    {
        $place = Place::with(['country', 'hotels', 'reviews'])->findOrFail($id);
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
        $countries = Country::all();
        return view('places.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'country_id' => 'required|exists:countries,id',
        ]);

        $place = Place::create([
            'name' => $request->name,
            'description' => $request->description,
            'likes' => 0,
            'country_id' => $request->country_id,
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

