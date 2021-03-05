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
}
