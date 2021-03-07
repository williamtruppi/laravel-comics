<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Must;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
        return view("admin.musts.create");
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
            'subtitle' => 'required',
            'content' => 'required',
            'slug' => 'required',
            'img' => 'nullable',
        ]);

        $img = Storage::put('musts_images', $request->img);
        $validateData['img'] = $img;

        //dd($validateData);
        
        Must::create($validateData);

        $new_must = Must::orderBy("id", "desc")->first();
       
        //dd($new_comic);

        return redirect()->route("admin.musts.index", $new_must);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Must  $must
     * @return \Illuminate\Http\Response
     */
    public function show(Must $must)
    {
        return view('admin.musts.show', compact('must'));
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
