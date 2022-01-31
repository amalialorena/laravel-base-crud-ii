@extends('layout.main-layout')

@section('content')
<h1>{{$movie->name}}</h1>
<h4>{{$movie->subtitle}}</h4>
<h5>{{$movie->release_date}}</h5>
@endsection