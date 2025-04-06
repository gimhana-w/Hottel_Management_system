<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:room-create'])->only(['create', 'store']);
        $this->middleware(['permission:room-edit'])->only(['edit', 'update']);
        $this->middleware(['permission:room-delete'])->only(['destroy']);
        $this->middleware(['permission:room-list|room-create|room-edit|room-delete'])->only(['index', 'show']);
    }
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|unique:rooms',
            'type' => 'required',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room added successfully!');
    }

    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'room_number' => 'required|unique:rooms,room_number,' . $room->id,
            'type' => 'required',
            'price' => 'required|numeric',
            'capacity' => 'required|integer',
        ]);

        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room updated successfully!');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Room deleted successfully!');
    
        
    }
}
