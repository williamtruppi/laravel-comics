<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('guest.index', compact("comics"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('guest.show', compact('comic'));
    }
}
