@extends('layout.main-layout')
@section('content') 

<h1>
    <a href="{{route('create')}}" >
        Create new movie
     </a>

</h1>

<ul>
@foreach ($movies as $movie)

<li>
    <a href="{{route('show',$movie -> id)}}">
        {{ $movie -> name }} -
        {{ $movie -> release_date }}
    </a>
    <a href="{{route('update', $movie -> id)}}">
        Update
    </a>
    
</li>
    
@endforeach
</ul>
@endsection
