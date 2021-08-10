<?php

namespace App\Http\Controllers\BackendController\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Apply;
use Exception;

class AppliedTenderController extends Controller
{
    public function index()
    {
        $applyedTenders = Apply::where('user_id', auth()->user()->id)->get();

        // return $applyedTenders;

        return view('backend.user.application.index', compact('applyedTenders'));
    }
    public function showTenderDetails($id)
    {
        try {
            $application = Apply::find($id);
            return view('backend.user.application.show', compact('application'));
        } catch (Exception $e) {
            return response()->json(["error" => "Can't show details!!!"]);
        }
    }
}
