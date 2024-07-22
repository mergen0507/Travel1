<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'place_id' => 'required|exists:places,id',
            'booking_date' => 'required|date',
        ]);

        Booking::create([
            'user_id' => auth()->id(),
            'place_id' => $request->place_id,
            'booking_date' => $request->booking_date,
        ]);

        return back();
    }
}

