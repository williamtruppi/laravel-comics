@extends('layouts.dashboard');

@section('content')

    <img src="{{asset('storage/' . $must->img)}}" alt="">
    <h1>Title: {{$must->title}}</h1>
    <h3>Subtitle: {{$must->subtitle}}</h3>
    <h3>Slug: {{$must->slug}}</h3>
    <p>Content: {{$must->content}}</p>
    
@endsection