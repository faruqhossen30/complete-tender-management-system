<?php

namespace App\Http\Controllers\FontendController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class FontHomeController extends Controller
{
    public function index(){
        $catagorys=\App\Models\Department::all();
        $types = DB::table('catagory')->get();

       // return view('user.index', ['users' => $users]);
        return view('frontend.dashboard',['catagorys'=>$catagorys,'types' => $types]);
    }


}
