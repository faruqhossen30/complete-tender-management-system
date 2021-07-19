<?php

namespace App\Http\Controllers\BackendController\Admin\Tender;

use App\Http\Controllers\Controller;
use App\Models\Tender\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders = Tender::all();

        return view('backend.admin.tender.alltender', compact('tenders'));
        // return $tenders;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.tender.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'tenderID'      => $request->tenderID,
            'type'   => $request->type,
            'category'   => $request->category,
            'department'   => $request->department,
            'country'   => $request->country,
            'location'   => $request->location,
            'description'   => $request->description,
            'tenderSecurity'   => $request->tenderSecurity,
            'tenderBudget'   => $request->tenderBudget,
            'lastDate'   => $request->lastDate,
            'user_id'   => auth()->user()->id,
        ];

        // Tender::create($data);

        // return redirect('tender');
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $tender = Tender::where('id', $id)->get()->first();
        // return $tender;


        return view('backend.admin.tender.show', compact('tender'));

        // return "single tender";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tender = Tender::where('id', $id)->get()->first();

        // return $tender;
        return view("backend.admin.tender.edittender", compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'tenderID'      => $request->tenderID,
            'type'   => $request->type,
            'category'   => $request->category,
            'department'   => $request->department,
            'country'   => $request->country,
            'location'   => $request->location,
            'description'   => $request->description,
            'tenderSecurity'   => $request->tenderSecurity,
            'tenderBudget'   => $request->tenderBudget,
            'lastDate'   => $request->lastDate,
            'user_id'   => auth()->user()->id
        ];

        $update = Tender::where('id', $id)->update($data);

        return redirect('/tender')->with('success', 'Tender has been Updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
         $delete = Tender::where('id', $id)->delete();

         return redirect('/tender')->with('success', 'Tender has been deleted !');
    }
}
