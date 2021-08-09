<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Tender;
use Illuminate\Support\Facades\DB;

class TenderPageController extends Controller
{
    public function index()
    {
        $tenders = Tender::latest()->take(10)->get();
        return view('frontend.tenderpage', compact('tenders'));
    }

    public function searchAction(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $tenders = Tender::where('tenderID', $request->searchText)->first();
            if ($tenders == null) {
                $output .= "Tender " . $request->searchText . " not found!!! Please search again!!!";
                return $output;
            }

            if ($tenders != null) {
                $output .= `<h1>Hello</h1>`;
            }
            return $output;
        }
    }
}
