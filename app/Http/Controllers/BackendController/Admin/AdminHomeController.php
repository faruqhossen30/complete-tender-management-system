<?php

namespace App\Http\Controllers\BackendController\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index(){
        return view('backend.admin.admin');
    }
}
