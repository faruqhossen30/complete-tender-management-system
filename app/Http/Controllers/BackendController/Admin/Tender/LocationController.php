<?php

namespace App\Http\Controllers\BackendController\Admin\Tender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = DB::table('country')->get();
        return view('backend.admin.tender.location.location', compact('location'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = DB::table('country')->get();
        return view('backend.admin.tender.location.location', compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $saveLocation = DB::table('country')->insert(['name'=>$request->location]);
        return redirect('/location');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editLocation = DB::table('country')->where('id', $id)->first();
        // return $editLocation;
        return view('backend.admin.tender.location.edit', compact('editLocation'));
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
        $update = DB::table('country')->where('id', $id)->update(['name'=>$request->location]);
        return redirect('/location');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteLocation = DB::table('country')->where('id', $id)->delete();
        return redirect('/location')->with('success', 'Location has been deleted !');
    }
}
