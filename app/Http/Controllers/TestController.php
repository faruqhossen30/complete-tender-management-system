<?php

namespace App\Http\Controllers;

use App\Models\TenderUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        $tenders = TenderUpload::get();


        return view('test', compact('tenders'));
        // return $tenders;
    }

    public function oneTwoOne(Request $request, $id){
        $tenders = TenderUpload::where('id', $id)->get()->first();


        return view('test', compact('tenders'));
        // return $tenders;
    }



}
