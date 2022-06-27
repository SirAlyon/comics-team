<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use App\Http\Controllers\Controller;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderByDesc('id')->get();
        return view('guest.comics.index', compact('comics'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('guest.comics.show', compact('comic'));
    }

}
