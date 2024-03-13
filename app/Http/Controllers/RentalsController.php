<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $roomsQuery = Room::all()
            ->pluck('name');
        return view('rental', compact('roomsQuery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $rental = new Rental($request->all());


        $rental->save();

        return redirect(route('home'));
    }
}
