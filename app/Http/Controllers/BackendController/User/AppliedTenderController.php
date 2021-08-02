<?php

namespace App\Http\Controllers\BackendController\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Apply;

class AppliedTenderController extends Controller
{
    public function index()
    {
        $applyedTenders = Apply::where('user_id', auth()->user()->id)->get();

        // return $applyedTenders;

        return view('backend.user.application.index', compact('applyedTenders'));
    }
}
