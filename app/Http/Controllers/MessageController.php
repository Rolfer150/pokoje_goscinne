<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Mail\MessageSended;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MessageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('message');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $message = new Message($request->all());
//        dd($message->getAttributes());
        $message->save();
//        Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new MessageSended($message));

        return redirect(route('home'))->with('success', "Twoja wiadomość została pomyślnie wysłana");
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $contact)
    {
        //
    }
}
