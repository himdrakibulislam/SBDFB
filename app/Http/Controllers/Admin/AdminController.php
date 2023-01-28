<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
    
        $alldonners = User::count();
        $blood = User::where('donation_type','রক্ত')->count();
        $platelets = User::where('donation_type','প্লাটিলেট')->count();
        return view('admin.dashboard',compact('alldonners','blood','platelets'));
    }
}
