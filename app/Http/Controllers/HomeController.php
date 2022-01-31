<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    
    public function home(){
        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }

    public function show($id){
        $movie = Movie::findorfail($id);
        return view('pages.show', compact('movie'));
    }
    
    public function create(){
        return view('pages.create');
    }

    public function store(Request $request){
        
        $data = $request -> validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);

        $movie = Movie::create($data);
       
        return redirect() -> route('home');
        // return redirect() -> route('show', $movie -> id);
    }

    public function update($id) {
        $movie= Movie::findorfail($id);
        return view('pages.update', compact('movie'));
    }

    public function updated(Request $request, $id){
        $data = $request -> validate([
            'name' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'release_date' => 'required|date'
        ]);
        $movie= Movie::findorfail($id);
        $movie -> update($data);
        return redirect() -> route('home');

    }

    public function delete($id){
        $movie= Movie::findorfail($id);
        $movie->delete();
        return redirect() -> route('home');
    }

}