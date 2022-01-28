@extends('layouts.main-layout')
@section('content')
    <h2>Comic:</h2>
    <h2>Title: {{$comic -> title}} -- {{$comic -> author}}</h2>
    <div>Release Date: {{$comic -> release_date}}</div>
    <div>Pages: {{$comic -> pages}}</div>
    <a href="{{route('home')}}" class="link">go to HOME</a>
@endsection