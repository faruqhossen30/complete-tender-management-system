<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Tender;

class TenderPageController extends Controller
{
    public function index()
    {
        $tenders = Tender::latest()->take(10)->get();

        return view('frontend.tenderpage', compact('tenders') );
    }

    public function national()
    {
        $tenders = Tender::where('country_id', 4)->latest()->get();

        return view('frontend.tenderpage', compact('tenders') );
    }
}
