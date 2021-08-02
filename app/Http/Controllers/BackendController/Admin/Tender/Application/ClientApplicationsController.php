<?php

namespace App\Http\Controllers\BackendController\Admin\Tender\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tender\Apply;

class ClientApplicationsController extends Controller
{
    public function index()
    {
        $clientApplyTenders = Apply::latest()->get();
        // return $clientApplyTenders;

        return view('backend.admin.application.index', compact('clientApplyTenders'));
    }
}
