<?php

namespace App\Http\Controllers;

use App\Models\Tender\Tender;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $serach_text = $request->search;
        $request->validate([
            'search' => 'required'
        ]);

        $tenders = Tender::where('description', 'like', '%'.$serach_text.'%')
                            ->paginate(3);

        return view('frontend.searchpage', compact('tenders'));
    }
}
