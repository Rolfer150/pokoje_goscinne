<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $photos = Gallery::query()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('gallery.index', compact('photos'));
    }
}
