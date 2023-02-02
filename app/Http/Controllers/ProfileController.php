<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use PhpParser\Node\Stmt\TryCatch;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function profile(Request $request): View
    {
        return view('front.user.profile', [
            'user' => $request->user(),
        ]);
    }
    public function edit(Request $request): View
    {
        return view('front.user.edit-profile', [
            'user' => $request->user(),
        ]);
        
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
             
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("status", "Old Password Doesn't match!");
        }
           #Update the new Password
           User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect('/profile')->with('status', 'Password changed successfully!');
    }


    public function uploadProfile(Request $request){
        $request->validate([
            'profileImage' => 'required|mimes:jpeg,png,jpg,gif'
        ]);
        $uploadPath = 'uploads/profile/';
        
        try {
            if($request->hasFile('profileImage')){
                if(File::exists($request->user()->profile_url)){
                    File::delete($request->user()->profile_url);
                }
    
                $filename = $request->profileImage->getClientOriginalExtension();
                $profile = Str::random(13).'.'.$filename;
    
                // $request->profileImage->move($uploadPath,$profile);
    
                Image::make($request->profileImage)->resize(300, 200)->save($uploadPath.$profile);
    
                User::whereId($request->user()->id)->update([
                    'profile_url' => $uploadPath.$profile
                ]);
                return redirect('/profile')->with('status','Profile Updated!');
    
            }
        } catch (\Throwable $th) {
             return redirect()->back()->with('status','An Error Occured');
        }

    }


    public function dateChange(Request $request){
        $request->validate([
            'last_donated' => 'required'
        ]);
        User::whereId(auth()->user()->id)->update([
            'last_donated' => $request->last_donated
        ]);
        return redirect('/profile')->with('status', 'Date changed successfully!');
    }
    
    
    
}
