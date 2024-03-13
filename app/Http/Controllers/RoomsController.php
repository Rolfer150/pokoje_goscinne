<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomsController extends Controller
{
    public function index(): View
    {
        $roomsQuery = Room::all()
            ->pluck('name');

//        dd($roomsQuery);

        return view('rooms', compact('roomsQuery'));
    }
}
