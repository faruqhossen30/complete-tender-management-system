<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
   public function singlePase(){
       return view('frontend.single');
   }
}
