<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Must;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $musts = Must::all();
        return view('guest.index', compact("comics", "musts"));
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
