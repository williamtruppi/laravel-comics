<?php

namespace App\Http\Controllers\Admin;

use App\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::all();
        return view ('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.series.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request['slug'] = Str::slug($request->title);

        //dd($slug);

        $validateData = $request->validate([
            'title' => 'required|unique:series|max:255',
            'slug' => 'required',
            'img' => 'nullable',
        ]);

        $img = Storage::put('series_images', $request->img);
        $validateData['img'] = $img;

        //dd($validateData);
        
        Serie::create($validateData);

        $new_serie = Serie::orderBy("id", "desc")->first();
       
        //dd($new_comic);

        return redirect()->route("admin.series.index", $new_serie);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function show(Serie $serie)
    {
        return view('admin.series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        return view('admin.series.edit', compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
        $request['slug'] = Str::slug($request->title);

        $validateData = $request->validate([
            'title' => 'required|unique:series,id|max:255',
            'slug' => 'required',
            'img' => '',
        ]);

        $img = Storage::put('series_images', $request->img);
        $validateData['img'] = $img;

        $serie->update($validateData);

        return redirect()->route('admin.series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $serie)
    {
        //
    }
}
