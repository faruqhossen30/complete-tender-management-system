<?php

namespace App\Http\Controllers\BackendController\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Tender\Tender;
use Illuminate\Http\Request;

class TenderAjaxController extends Controller
{
    public function tenderIdChecker(Request $request)
    {
        if($request->ajax()){
            // return $request->tenderID;

            $result = Tender::where('tenderID', $request->tenderID)->exists();
            return $result ? false : true;

        }
    }
}
