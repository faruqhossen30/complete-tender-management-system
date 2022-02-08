<?php

namespace App\Http\Controllers\BackendController\Admin\Place;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\PlaceImage;
use App\Models\Tender\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $places = Place::with('location','author')->latest()->get();
        // $places = Place::get();
        // return $places;
        return view('backend.admin.place.placetable', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::all();
        return view('backend.admin.place.addplace', compact('locations'));
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
            'location_id' => 'required',


        ], [
            'title.required'        => 'please enter your title',
            'content.required'      => 'please enter your content',
            'address.required'      => 'please enter your address',
            'image.required'        => 'please enter your image',
            'location_id.required'        => 'please enter your image',
        ]);

        $image = $request->file('image');

        $images = [];
        $i = 0;
        $sliderimage = $request->file('slider_image');

        if ($sliderimage) {
            foreach ($request->file('slider_image') as $simage) {

                $fileExtention = $image->getClientOriginalExtension();
                $fileName = hexdec(uniqid()) . '.' . $fileExtention;
                $simage->move('public/uploads/placeimages', $fileName);

                $images[] = $fileName;
                $i++;
            };
        }

        if ($image) {
            // For Create Database Name
            $extention =  $image->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            //  For Saving upload folder
            $image->move('public/uploads/place/', $imageName);

            $place = Place::create([
                'title'        => $request->title,
                'slug'         => SlugService::createSlug(Place::class, 'slug', $request->title),
                'content'      => $request->content,
                'address'      => $request->address,
                'google_map'   => $request->google_map,
                'image'        => $imageName,
                'author_id'    => Auth::user()->id,
                'video_link'   => $request->video_link,
                'location_id'  => $request->location_id,
                'slider_image' => $request->slider_image,

            ]);

            if ($place && !empty($images)) {
                foreach ($images as $image) {
                    PlaceImage::create([
                        'place_id' => $place->id,
                        'name' => $image
                    ]);
                };
            }
        }

        return redirect()->route('place.index')->with('success', 'successfully data added');
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
        return view('backend.admin.place.view_place', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $locations = Location::all();
        $place = Place::findOrFail($id);
        $place_image = PlaceImage::where('place_id', $id)->get();
        return  view('backend.admin.place.edit_place', compact('place', 'locations', 'place_image'));
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

        $images = [];
        $i = 0;
        $sliderimage = $request->file('slider_image');

        if ($sliderimage) {
            foreach ($request->file('slider_image') as $simage) {

                $fileExtention = $simage->getClientOriginalExtension();
                $fileName = hexdec(uniqid()) . '.' . $fileExtention;
                $simage->move('public/uploads/placeimages', $fileName);

                $images[] = $fileName;
                $i++;
            };
        };

        if ($image) {
            // For Create Database Name
            $extention =  $image->getClientOriginalExtension();
            $imageName = time() . '.' . $extention;
            //  For Saving upload folder
            $image->move('public/uploads/place/', $imageName);

            Place::where('id', $id)->update([
                'title'       => $request->title,
                'slug'        => SlugService::createSlug(Place::class, 'slug', $request->title),
                'content'     => $request->content,
                'address'     => $request->address,
                'google_map'  => $request->google_map,
                'image'       => $imageName,
                'video_link'  => $request->video_link,
                'location_id' => $request->location_id,
            ]);

            if (!empty($images)) {
                $oldimage = PlaceImage::where('place_id', $id)->get();

                if($oldimage){
                    foreach($oldimage as $old){
                        unlink('public/uploads/placeimages/'.$old->name);
                    }
                }
                PlaceImage::where('place_id', $id)->delete();

                foreach ($images as $image) {
                    PlaceImage::create([
                        'place_id' => $id,
                        'name' => $image
                    ]);
                };
            }

        } else {

            Place::where('id', $id)->update([

                'title'       => $request->title,
                'content'     => $request->content,
                'address'     => $request->address,
                'google_map'  => $request->google_map,
                'video_link'  => $request->video_link,
                'location_id' => $request->location_id,
            ]);

            if (!empty($images)) {
                $oldimage = PlaceImage::where('place_id', $id)->get();

                if($oldimage){
                    foreach($oldimage as $old){
                        unlink('public/uploads/placeimages/'.$old->name);
                    }
                }
                PlaceImage::where('place_id', $id)->delete();

                foreach ($images as $image) {
                    PlaceImage::create([
                        'place_id' => $id,
                        'name' => $image
                    ]);
                };
            }

        }

        return redirect()->route('place.index')->with('success', 'Successfully data update');
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
        return redirect()->route('place.index')->with('delete', 'successfully data delete');
    }
}
