<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRenalRequest;
use App\Models\Rental;
use Illuminate\Support\Facades\Redirect;
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
//        dd($rental);
        $rental->comments = $request->comments;

        if ($rental->email !== null && !$rental->canRent($rental->email)) {
            return redirect()->back()->with('error', 'Twoja wcześniejsza rezerwacja oczekuje na zaakceptowanie!');
        }
        else {
            $rental->save();
            return redirect()->back()->with('success', 'Twoja rezerwacja została pomyślnie złożona.');
        }
    }
}
