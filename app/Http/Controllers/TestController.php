<?php

namespace App\Http\Controllers;

use App\Models\TenderUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        return view('test');
    }




}
