<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Must;
use Illuminate\Http\Request;

class MustController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musts = Must::all();
        return view("admin.musts.index", compact("musts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function show(Must $must)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function edit(Must $must)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Must $must)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function destroy(Must $must)
    {
        //
    }
}
