<?php

namespace App\Http\Controllers\BackendController\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_client');
    }

    public function index(){
        return view('backend.user.user');
    }
}
