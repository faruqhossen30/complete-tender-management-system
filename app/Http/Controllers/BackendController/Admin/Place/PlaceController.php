<?php

namespace App\Http\Controllers\BackendController\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $places = Place::get();
        // return $place;
         return view('backend.admin.place.placetable',compact('places'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.place.addplace');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        //  return $request->all();
         $request->validate([
            'title'       => 'required',
            'content'     => 'required',
            'address'     => 'required',
            'image'       => 'required',

         ],[
              'title.required'       => 'please enter your title',
              'content.required'     => 'please enter your content',
              'address.required'     => 'please enter your address',
              'image.required'       => 'please enter your image'
         ]);

         $image = $request->file('image');

         if($image){
            // For Create Database Name
            $extention =  $image->getClientOriginalExtension();
            $imageName = time().'.'.$extention;
            //  For Saving upload folder
            $image->move('public/uploads/place/', $imageName);

            Place::create([
                'title'       => $request->title,
                'content'     => $request->content,
                'address'     => $request->address,
                'google_map'  => $request->google_map,
                'image'       => $imageName,
                'video_link'  => $request->video_link,
                'division_id' => $request->division_id,
                'district_id' => $request->district_id,
                'upazila_id'  => $request->upazila_id,
            ]);
         }
         return redirect()->route('place.index')->with('success','successfully data added');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "ok";
        $place = Place::Where('id', $id)->first();
        // return $place;
        return view('backend.admin.place.view_place',compact('place'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::findOrFail($id);
        // return $place;
        return  view('backend.admin.place.edit_place',compact('place'));

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
        $image = $request->file('image');

        if($image){
            // For Create Database Name
            $extention =  $image->getClientOriginalExtension();
            $imageName = time().'.'.$extention;
            //  For Saving upload folder
            $image->move('public/uploads/place/', $imageName);

        Place::findOrFail($id)->update([
            'title'       => $request->title,
            'content'     => $request->content,
            'address'     => $request->address,
            'google_map'  => $request->google_map,
            'image'       => $imageName,
            'video_link'  => $request->video_link,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id'  => $request->upazila_id,
        ]);
    } else{
        Place::findOrFail($id)->update([
            'title'       => $request->title,
            'content'     => $request->content,
            'address'     => $request->address,
            'google_map'  => $request->google_map,
            'video_link'  => $request->video_link,
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'upazila_id'  => $request->upazila_id,
        ]);

    }
    return redirect()->route('place.index')->with('success','Successfully data update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::findOrFail($id)->delete();
        return redirect()->route('place.index')->with('delete','successfully data delete');
    }
}
