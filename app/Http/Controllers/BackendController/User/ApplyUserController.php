<?php

namespace App\Http\Controllers\BackendController\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\Tender\Apply;

class ApplyUserController extends Controller
{
    public function index()
    {
        return 'Applyed!';
    }

    public function applyConfirm(Request $request)
    {
        $user_id = auth()->user()->id;
        $profileID = UserProfile::where('user_id', $user_id)->first();

        if($profileID){
            $data = [
                'tender_id' => $request->tender_id,
                'user_id' => auth()->user()->id,
                'profile_id' => $profileID->id,
                'agree' => $request->agree,
            ];

            // $request->validate([
            //     'agree' => 'required'
            // ]);

            $apply = Apply::create($data);

            return redirect()->back()->with('apply', 'Tender apply has been success !');

        } else{
            return redirect()->route('profile.update')->with('profileUpdate', 'Please update your profile for apply.');
        }
    }
}
