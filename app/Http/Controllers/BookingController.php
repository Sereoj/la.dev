<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingStoreRequest;
use App\Models\Booking;
use App\Models\Guest;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show(Booking $booking)
    {
        return $booking->toArray() + [
            "guests" => $booking->guests
            ];
    }

    public function store(BookingStoreRequest $request)
    {
        $booking = Booking::create($request->all());

        $guests = [];

        foreach ($request->guests as $guest)
        {
            $guestModel = Guest::firstOrCreate($guest);
            $guests[] = $guestModel->id;
        }

        $booking->guests()->attach($guests);

        return $booking;
    }
}
