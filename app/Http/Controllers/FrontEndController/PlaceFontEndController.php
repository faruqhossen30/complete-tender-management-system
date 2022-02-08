<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceFontEndController extends Controller
{
    public function allPlace(){
        // return "ok";
        $places = Place::latest()->get();
        // return $places;
        return view('frontend.blog',compact('places'));
    }
}
