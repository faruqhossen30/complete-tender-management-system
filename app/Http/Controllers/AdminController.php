<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function one(){
        return 'Admin page 1';
    }
    public function two(){
        return 'admin page 2';
    }
    public function three(){
        return 'Admin page 3';
    }
}
