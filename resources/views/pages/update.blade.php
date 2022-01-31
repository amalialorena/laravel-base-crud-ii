@extends('layout.main-layout')  
@section('content')

<h1>update movie</h1>

    	
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
<form action="{{ route('updated') }}" method="POST">

    @method("POST")
    @csrf

    <label for="name">Title:</label>
    <input type="text" name="name" placeholder="title" value={{ $movies-> name }} ><br>
    <label for="subtitle">Subtitle:</label>
    <input type="text" name="subtitle" placeholder="subtitle" value={{ $movies-> subtitle }} ><br>
    <label for="release_date">Release date:</label>
    <input type="date" name="release_date" value={{ $movies-> release_date }} ><br>
    <input type="submit" value="update">
</form>

@endsection