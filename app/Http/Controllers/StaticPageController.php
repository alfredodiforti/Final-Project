<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use App\Restaurant;

class StaticPageController extends Controller
{
    //
    public function home(){

        $types = Type::all();
        $restaurants = Restaurant::all();

        return view('home', compact('types', 'restaurants'));
    }
}
