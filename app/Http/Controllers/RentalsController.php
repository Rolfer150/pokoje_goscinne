<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRenalRequest;
use App\Models\Rental;
use App\Models\Room;
use Illuminate\View\View;

class RentalsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('rental.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRenalRequest $request)
    {
        $rental = new Rental($request->all());
        $rental->comments = $request->comments;

        if (!$rental->canRent($rental->email)) {
            return redirect()->back()->with('error', "Twoja wcześniejsza rezerwacja oczekuje na zaakceptowanie.");
        }
        else {
            Room::where('id', $rental->room_id)
                ->update(['is_occupied' => true]);
            $rental->save();
            return redirect(route('home'))->with('success', "Twoja rezerwacja została pomyślnie złożona");
        }
    }
}
