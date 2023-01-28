<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function result(){
        return redirect()->back();
    }
    public function search(Request $request){
        $request->validate([
            'district' => 'required',
            'blood_group' => 'required',
        ]);
        
        $district  = $request->district;
        $blood_group  = $request->blood_group;

        $users = User::where('donation_type','রক্ত')->where('district',$district)
        ->where('blood_group',$blood_group)
        ->get();
        
        if($users){
            return view('front.user.search',compact('users','blood_group'));
        }
        
    }


    public function searchredirect(){
        return redirect()->back()->with('status','Search manually');
    }

    public function platelets(Request $request){
        $request->validate([
            'district' => 'required',
            'blood_group' => 'required',
        ]);
        $district = $request->district;
        $blood_group = $request->blood_group;
        $users = User::where('donation_type','প্লাটিলেট')->where('district',$district)
        ->where('blood_group',$blood_group)
        ->get();

        if($users){
            return view('front.user.platelets',compact('users','blood_group'));
        }

    }

    public function about(){
        return view('front.about.about');
    }
    public function bloodDonors(){
        $bloodDonors = User::where('donation_type','রক্ত')
        ->orderBy('id', 'DESC')
        ->paginate(10);
        return view('front.blood.bloodDonors',compact('bloodDonors'));
    }



}
