<?php

namespace App\Http\Controllers\Admin;

use App\Comic;
use App\Artist;
use App\Writer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $writers = Writer::all();
        return view('admin.comics.create', compact('artists', 'writers'));
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
            'title' => 'required|unique:comics|max:255',
            'slug' => 'required',
            'img_cover' => 'nullable | image ',
            'available' => 'required',
            'description' => 'required',
            'price' => 'required | numeric',
            'series' => 'required',
            'volume' => 'required',
            'page_count' => 'required | numeric',
            'rated' => 'required',
            'artists' => 'required|exists:artists,id',
            'writers' => 'required|exists:writers,id'
        ]);

        $img_cover = Storage::put('cover_images', $request->img_cover);
        $validateData['img_cover'] = $img_cover;

        //dd($validateData);
        
        Comic::create($validateData);

        $new_comic = Comic::orderBy("id", "desc")->first();
       
        $new_comic->artists()->attach($request->artists);
        $new_comic->writers()->attach($request->writers);
        
        //dd($new_comic);

        return redirect()->route("admin.comics.index", $new_comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        $artists = Artist::all();
        $writers = Writer::all();
        return view('admin.comics.edit', compact('comic','artists', 'writers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
