<?php

namespace App\Http\Controllers\Guest;

use App\Models\Character;
use App\Http\Controllers\Controller;


class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::orderByDesc('id')->get();
        return view('guest.characters.index', compact('characters'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {
        return view('guest.characters.show', $character);
    }

}
