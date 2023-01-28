<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::where('role_as','0')->paginate(10);
        return view('admin.user.index',compact('users'));
    }

    public function viewUser(int $id){
        $user = User::find($id);
        if($user){
            return view('admin.user.view',compact('user'));
        }else{
            $user = 'User Not Found';
            return view('admin.user.view',compact('user'));
            
        }
    }


    public function admin(){
        $admins = User::where('role_as','1')->get();
        return view('admin.user.admin',compact('admins'));
    }


    public function makeAdmin(int $id){
        $user = User::find($id);
        if($user){
            if(Auth::user()->role_as == '1'){
                $user->role_as = 1;
                $user->update();
                return redirect()->back();
            }else{
                return redirect('admin/users')->with('status','Only Admin can make user to admin');
            }
        }else{
            return redirect('admin/users')->with('status','User Not Found');
        }
        return view('admin.user.admin',compact('admins'));
    }


    public function removeAdmin(int $id){
        $user = User::find($id);
        if($user){
            if(User::where('role_as','1')->count() == 1){
                return redirect()->back()->with('status','You can not remove admin');
            }else{
            if(Auth::user()->role_as == '1'){
                $user->role_as = 0;
                $user->update();
                return redirect()->back();
            }else{
                return redirect('admin/users')->with('status','Only Admin can make user to admin');
            }
        }
        }else{
            return redirect('admin/users')->with('status','User Not Found');
        }
        return view('admin.user.admin',compact('admins'));
    }

    public function logged(){
        $loggedUser  = Session::paginate(10);
        return view('admin.user.logged',compact('loggedUser'));
    }

    public function searchuser(Request $request){
        $user = User::where('phone',$request->phone)->first();
        if($user){
            return view('admin.user.view',compact('user'));
        }else{
            $user = 'User Not Found';
            return view('admin.user.view',compact('user'));
            
        }
    }

    public function searchredirect(){
        return redirect()->back()->with('status','Search manually from user table search bar ');
    }
    // edit user password
    public function editPassword(int $id){
        $user = User::whereId($id)->first();
        return view('admin.user.edit-password',compact('user'));
    }
    //update password
    public function updatePass(int $id,Request $request){
        $request->validate([
            'password' => 'required'
        ]);
        User::whereId($id)->update([
            'password' => Hash::make($request->password)
        ]);
        return redirect('admin/users')->with('status', 'Password changed successfully!');
    }

    //platelets
    public function plateletsDonors(){
        $users = User::where('donation_type','প্লাটিলেট')->paginate(10);
        return view('admin.user.platelets',compact('users'));
    }
    //blood
    public function bloodDonors(){
        $users = User::where('donation_type','রক্ত')->paginate(10);
        return view('admin.user.blood',compact('users'));
    }

    // destroy user
    public function destroy(int $id){
        $user = User::find($id);
        if($user->role_as == 1){
            return redirect('admin/users')->with('status','You can not delete the admin account');
        }else{

            $user->delete();
            return redirect('admin/users')->with('status',$user->name.' has been removed');
        }
    }
}
