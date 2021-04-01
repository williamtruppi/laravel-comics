@extends('layouts.dashboard');

@section('content')

    <div class="images d-flex align-items-center mb-4">
        <img src="{{asset('storage/' . $comic->img_cover)}}" alt="" style="height: 250px"> Cover Image
        <img src="{{asset('storage/' . $comic->jumbocover)}}" alt="" style="height: 250px; margin-left: 50px"> JUMBO Image
    </div>
    
    <h1>Title: {{$comic->title}}</h1>
    <p>Description: {{$comic->description}}</p>

    @if ($comic->available == 1)
        <h3>Available: TRUE</h3>
    @else
        <h3>Available: FALSE</h3>
    @endif
    
    <h3>Price: {{$comic->price}}</h3>
    <h3>Series: {{$comic->series}}</h3>
    <h3>Volume: {{$comic->volume}}</h3>
    <h3>Page Count: {{$comic->page_count}}</h3>
    <h3>Rated: {{$comic->rated}}</h3>
    
    <h3> Artists:
        @foreach ($comic->artists as $artist)
             {{$artist->name}} {{$artist->lastname}},
        @endforeach
    </h3>
    <h3> Writers:
        @foreach ($comic->writers as $writer)
             {{$writer->name}} {{$writer->lastname}},
        @endforeach
    </h3>
    
@endsection