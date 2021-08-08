<?php

namespace App\Http\Controllers\FrontEndController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Tender;

class TenderPageController extends Controller
{
    public function allTender()
    {
        $tenders = Tender::paginate(10);

        return view('frontend.allltender', compact('tenders') );
    }

    public function national()
    {
        $tenders = Tender::where('country_id', 4)->paginate(10);

        return view('frontend.nationaltender', compact('tenders') );
    }

    public function international()
    {
        $tenders = Tender::where('country_id', '!=', 4)->paginate(10);

        return view('frontend.international', compact('tenders') );
    }
}
