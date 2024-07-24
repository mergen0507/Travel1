<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'place_id' => $request->place_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back();
    }
}

