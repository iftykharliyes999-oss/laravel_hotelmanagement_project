<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $rooms = Room::latest()->get();
    return view('admin.addrooms.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.addrooms.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'price' => 'required',
        'capacity' => 'required',
        'image' => 'required|image',
    ]);

    
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('uploads/rooms'), $imageName);

    Room::create([
        'name' => $request->name,
        'description' => $request->description,
        'type' => $request->type,
        'price' => $request->price,
        'capacity' => $request->capacity,
        'image' => 'uploads/rooms/'.$imageName,
        'status' => $request->status,
    ]);

    return redirect()->route('room.index')->with('success', 'Room created successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
