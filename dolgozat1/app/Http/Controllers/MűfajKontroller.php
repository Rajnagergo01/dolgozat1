<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class MűfajKontroller extends Controller
{
    public function create(){
        return view("kölcsönzés.create");
    }

    public function store(Request $request){
        $request->validate(['name' => 'required|unique:genres']);
        Genre::create($request-> all());
        return redirect('')->route('genres.create')->with('success','Műfaj sikeresen hozzáadva!');
    }
}
