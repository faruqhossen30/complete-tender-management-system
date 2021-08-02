<?php

namespace App\Http\Controllers\BackendController\Admin\Tender;

use App\Http\Controllers\Controller;
use App\Models\Tender\Category;
use App\Models\Tender\Country;
use App\Models\Tender\Department;
use App\Models\Tender\Location;
use App\Models\Tender\Tender;
use App\Models\Tender\Type;
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
        $tenders = Tender::latest()->get();

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
        $types = Type::all();
        $categories = Category::all();
        $departments = Department::all();
        $countries = Country::all();
        $locations = Location::all();


        return view('backend.admin.tender.upload', compact('types', 'categories', 'departments',  'countries', 'locations'));
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
            'tender_type_id'   => $request->type,
            'category_id'   => $request->category,
            'department_id'   => $request->department,
            'country_id'   => $request->country,
            'location_id'   => $request->location,
            'description'   => $request->description,
            'tenderSecurity'   => $request->tenderSecurity,
            'tenderBudget'   => $request->tenderBudget,
            'lastDate'   => $request->lastDate,
            'user_id'   => auth()->user()->id,
        ];

        $upload = Tender::create($data);

        return redirect('admin/tender')->with('success', 'Tender has been uploaded successfully! ');
        // return $data;
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
        $types = Type::all();
        $categories = Category::all();
        $departments = Department::all();
        $countries = Country::all();
        $locations = Location::all();

        // return $tender;
        return view("backend.admin.tender.edittender", compact('tender','types', 'categories', 'departments',  'countries', 'locations'));
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
            'tender_type_id'   => $request->type,
            'category_id'   => $request->category,
            'department_id'   => $request->department,
            'country_id'   => $request->country,
            'location_id'   => $request->location,
            'description'   => $request->description,
            'tenderSecurity'   => $request->tenderSecurity,
            'tenderBudget'   => $request->tenderBudget,
            'lastDate'   => $request->lastDate,
            'user_id'   => auth()->user()->id,
        ];

        $update = Tender::where('id', $id)->update($data);

        return redirect('admin/tender')->with('success', 'Tender has been Updated !');
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

         return redirect('admin/tender')->with('success', 'Tender has been deleted !');
    }
}
