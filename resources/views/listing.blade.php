@extends('layout')

@section('content')
    @include('partials._search')
    <h1>{{$listing['title']}}</h1>
    <h2>{{$listing['company']}}</a></h2>
    <p>{{$listing['description']}}</p>
    <a href="/">Go back</a>
@endsection