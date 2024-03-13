<?php

namespace App\Http\Controllers;

use App\Models\MainFacility;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainFacilitiesControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $mainFacilities = MainFacility::query()
            ->select('name')
            ->pluck('name');

        $rooms = Room::query()
            ->select('name', 'description')
            ->get();

//        dd($mainFacilities);

        return view('home', compact('mainFacilities', 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MainFacility $mainFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainFacility $mainFacility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainFacility $mainFacility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainFacility $mainFacility)
    {
        //
    }
}
