<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller {
    
    public function index() {
        return response()->json(RoomType::with('hotelRooms')->get());
    }

    public function store(Request $request) {
        $roomType = RoomType::create($request->all());
        return response()->json($roomType, 201);
    }

    public function show($id) {
        $roomType = RoomType::with('hotelRooms')->findOrFail($id);
        return response()->json($roomType);
    }

    public function update(Request $request, $id) {
        $roomType = RoomType::findOrFail($id);
        $roomType->update($request->all());
        return response()->json($roomType);
    }

    public function destroy($id) {
        RoomType::destroy($id);
        return response()->json(null, 204);
    }
}