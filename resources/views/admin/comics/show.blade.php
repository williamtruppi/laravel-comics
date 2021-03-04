@extends('layouts.dashboard');

@section('content')

    <img src="{{asset('storage/' . $comic->img_cover)}}" alt="">
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
    
@endsection