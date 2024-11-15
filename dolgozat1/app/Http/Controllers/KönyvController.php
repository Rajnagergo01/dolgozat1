<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KönyvController extends Controller
{
    public function create(){
        $genres = Genre::all();
        return view("könyvek.create",compact("máfajok"));
    }

    public function store(Request $request)
}