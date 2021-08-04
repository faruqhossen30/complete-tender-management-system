<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use App\Models\Tender\Apply;
use Illuminate\Http\Request;
// Model
use App\Models\Tender\Tender;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function homepage()
    {
        $tenders = Tender::latest()->take(10)->get();

        return view('frontend.homepage', compact('tenders'));
    }


}
