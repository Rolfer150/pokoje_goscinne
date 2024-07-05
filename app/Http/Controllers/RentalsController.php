<?php

namespace App\Http\Controllers;
use App\Enums\RentalStatus;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRenalRequest;
use App\Models\Rental;
use App\Models\Room;
use Illuminate\View\View;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $roomsQuery = Room::query()
            ->select('id', 'name')
            ->get();
        return view('rental', compact('roomsQuery'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRenalRequest $request)
    {
//        dd($request->all());
        $rental = new Rental($request->all());

//        dd($rental->canRent());

        if (!$rental->canRent($rental->email)) {
            return redirect()->back()->with('error', "Twoja wcześniejsza rezerwacja oczekuje na zaakceptowanie.");
        }
        else {
            $rental->save();

            return redirect(route('home'))->with('success', "Twoja rezerwacja została pomyślnie złożona");
        }
    }
}
