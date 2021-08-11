<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $profiles = UserProfile::all();

        // return $profiles;

        // return view('backend.user.profile.test', compact('profiles'));
        return view('backend.user.profile.account');
    }
    public function profile()
    {
        $userID = auth()->user()->id;

        $profile = UserProfile::where('user_id', $userID)->first();

        $user = User::where('id', $userID)->first();

        // return $profile;
        // return $user;

        // return view('backend.user.profile.test', compact('profiles'));


        return view('backend.user.profile.account', compact('user', 'profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.profile.profileupdate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'trade_licence_no' => 'required|max:255',
            'pin_no' => 'required|max:255',
            'bin_no' => 'required|max:255',
            'nid_no' => 'required|max:255',
            'trade_licence_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'pin_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'bin_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'nid_img' => 'required|mimes:png,jpg,gif,bmp|max:2048'
        ]);

        // Logo Image Start
        $logo = $request->file('logo');

        $name_genarate = hexdec(uniqid());
        $img_extention = strtolower($logo->getClientOriginalExtension());
        $logo_name = $name_genarate.'.'.$img_extention;
        $upload_location = 'doc/logo/';

        $final_name = $upload_location.$logo_name;
        $logo->move($upload_location, $logo_name);
        // // Logo Image End


        // Trade Licence Image Start
        $trade_licence = $request->file('trade_licence_img');

        $tl_name_genarate = hexdec(uniqid());
        $tl_img_extention = strtolower($trade_licence->getClientOriginalExtension());
        $tl_name = $tl_name_genarate.'.'.$tl_img_extention;
        $tl_upload_location = 'doc/tradelicence/';

        $tl_final_name = $tl_upload_location.$tl_name;
        $trade_licence->move($tl_upload_location, $tl_name);
        // // Trade Licence Image End


        // PIN Licence Image Start
        $pin = $request->file('pin_img');

        $pin_name_genarate = hexdec(uniqid());
        $pin_img_extention = strtolower($pin->getClientOriginalExtension());
        $pin_name = $pin_name_genarate.'.'.$pin_img_extention;
        $pin_upload_location = 'doc/pin/';

        $pin_final_name = $pin_upload_location.$pin_name;
        $pin->move($pin_upload_location, $pin_name);
        // // PIN Licence Image End


        // BIN Licence Image Start
        $bin = $request->file('bin_img');

        $bin_name_genarate = hexdec(uniqid());
        $bin_img_extention = strtolower($bin->getClientOriginalExtension());
        $bin_name = $bin_name_genarate.'.'.$bin_img_extention;
        $bin_upload_location = 'doc/bin/';

        $bin_final_name = $bin_upload_location.$bin_name;
        $bin->move($bin_upload_location, $bin_name);
        // // BIN Licence Image End


        // NID Licence Image Start
        $nid = $request->file('nid_img');

        $nid_name_genarate = hexdec(uniqid());
        $nid_img_extention = strtolower($nid->getClientOriginalExtension());
        $nid_name = $nid_name_genarate.'.'.$nid_img_extention;
        $nid_upload_location = 'doc/nid/';

        $nid_final_name = $nid_upload_location.$nid_name;
        $nid->move($nid_upload_location, $nid_name);
        // // NID Licence Image End


        UserProfile::insert([
            'user_id'           => auth()->user()->id,
            'logo'              => $final_name,
            'trade_licence_no'  => $request->trade_licence_no,
            'pin_no'            => $request->pin_no,
            'bin_no'            => $request->bin_no,
            'nid_no'            => $request->nid_no,
            'trade_licence_img' => $tl_final_name,
            'pin_img'           => $pin_final_name,
            'bin_img'           => $bin_final_name,
            'nid_img'           => $nid_final_name,
        ]);

        return redirect('/')->with('profileupdate', 'Profile has been updated !');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = UserProfile::where('user_id', $id)->first();

        return view('backend.user.profile.profileedit', compact('document'));
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
        $request->validate([
            'logo' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'trade_licence_no' => 'required|max:255',
            'pin_no' => 'required|max:255',
            'bin_no' => 'required|max:255',
            'nid_no' => 'required|max:255',
            'trade_licence_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'pin_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'bin_img' => 'required|mimes:png,jpg,gif,bmp|max:2048',
            'nid_img' => 'required|mimes:png,jpg,gif,bmp|max:2048'
        ]);

        // Logo Image Start
        $logo = $request->file('logo');

        $name_genarate = hexdec(uniqid());
        $img_extention = strtolower($logo->getClientOriginalExtension());
        $logo_name = $name_genarate.'.'.$img_extention;
        $upload_location = 'doc/logo/';

        $final_name = $upload_location.$logo_name;
        $logo->move($upload_location, $logo_name);
        // // Logo Image End


        // Trade Licence Image Start
        $trade_licence = $request->file('trade_licence_img');

        $tl_name_genarate = hexdec(uniqid());
        $tl_img_extention = strtolower($trade_licence->getClientOriginalExtension());
        $tl_name = $tl_name_genarate.'.'.$tl_img_extention;
        $tl_upload_location = 'doc/tradelicence/';

        $tl_final_name = $tl_upload_location.$tl_name;
        $trade_licence->move($tl_upload_location, $tl_name);
        // // Trade Licence Image End


        // PIN Licence Image Start
        $pin = $request->file('pin_img');

        $pin_name_genarate = hexdec(uniqid());
        $pin_img_extention = strtolower($pin->getClientOriginalExtension());
        $pin_name = $pin_name_genarate.'.'.$pin_img_extention;
        $pin_upload_location = 'doc/pin/';

        $pin_final_name = $pin_upload_location.$pin_name;
        $pin->move($pin_upload_location, $pin_name);
        // // PIN Licence Image End


        // BIN Licence Image Start
        $bin = $request->file('bin_img');

        $bin_name_genarate = hexdec(uniqid());
        $bin_img_extention = strtolower($bin->getClientOriginalExtension());
        $bin_name = $bin_name_genarate.'.'.$bin_img_extention;
        $bin_upload_location = 'doc/bin/';

        $bin_final_name = $bin_upload_location.$bin_name;
        $bin->move($bin_upload_location, $bin_name);
        // // BIN Licence Image End


        // NID Licence Image Start
        $nid = $request->file('nid_img');

        $nid_name_genarate = hexdec(uniqid());
        $nid_img_extention = strtolower($nid->getClientOriginalExtension());
        $nid_name = $nid_name_genarate.'.'.$nid_img_extention;
        $nid_upload_location = 'doc/nid/';

        $nid_final_name = $nid_upload_location.$nid_name;
        $nid->move($nid_upload_location, $nid_name);
        // // NID Licence Image End


        UserProfile::insert([
            'user_id'           => auth()->user()->id,
            'logo'              => $final_name,
            'trade_licence_no'  => $request->trade_licence_no,
            'pin_no'            => $request->pin_no,
            'bin_no'            => $request->bin_no,
            'nid_no'            => $request->nid_no,
            'trade_licence_img' => $tl_final_name,
            'pin_img'           => $pin_final_name,
            'bin_img'           => $bin_final_name,
            'nid_img'           => $nid_final_name,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
