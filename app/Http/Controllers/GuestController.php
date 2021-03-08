<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Must;
use App\Serie;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $musts = Must::all();
        $series = Serie::all();
        return view('guest.index', compact("comics", "musts", "series"));
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
