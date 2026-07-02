<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('room')->latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('admin.bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'adults' => 'required',
            'total_price' => 'required',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')
            ->with('success','Booking created successfully');
    }

    public function show(Booking $booking)
    {
        return view('admin.bookings.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $rooms = Room::all();
        return view('admin.bookings.edit', compact('booking','rooms'));
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());

        return redirect()->route('bookings.index')
            ->with('success','Booking updated successfully');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return back()->with('success','Booking deleted');
    }
}