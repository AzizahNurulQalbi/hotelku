<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController; 
use App\Http\Controllers\HotelRoomController;

Route::apiResource('room_types', RoomTypeController::class);
Route::apiResource('hotel_rooms', HotelRoomController::class);