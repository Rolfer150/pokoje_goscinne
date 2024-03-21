<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function index(): View
    {
        $roomsQuery = Room::query()
            ->select('id', 'name', 'price', 'description', 'image_path', 'apartment_size', 'accommodation_number')
//            ->with('roomFacilities')
            ->get();

//        dd($roomsQuery);

        return view('rooms', compact('roomsQuery'));
    }
}
