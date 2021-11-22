<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaceFontEndController extends Controller
{
public function allPlace(){
    // return "ok";
    return view('frontend.blog');
}
}
