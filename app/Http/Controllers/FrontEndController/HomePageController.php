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
        $tenders = Tender::latest()->take(7)->get();
        $nationaltender = Tender::where('country_id', 4)->latest()->take(7)->get();
        $international = Tender::where('country_id', '!=', 4)->latest()->take(7)->get();

        return view('frontend.homepage', compact('tenders', 'nationaltender', 'international'));
    }


}
