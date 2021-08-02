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

        // $user_applyed = Apply::where('user_id', auth()->user()->id)->first();
        // $tender_apply = Apply::where('tender_id' ,4)->get()->first();
        // $some = DB::table('applies')->where('tender_id', 4)->first();

        // $user = auth()->user()->id;

        // return compact('some');

        // $is_apply =


        return view('frontend.homepage', compact('tenders'));
    }


}
