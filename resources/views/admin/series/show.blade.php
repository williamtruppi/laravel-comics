@extends('layouts.dashboard');

@section('content')

    <img src="{{asset('storage/' . $serie->img)}}" alt="">
    <h1>Title: {{$serie->title}}</h1>
    <h3>Slug: {{$serie->slug}}</h3>
    
@endsection