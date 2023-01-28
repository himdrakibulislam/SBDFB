<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        
        return view('auth.register');
       
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string','max:255'],
            'district' => ['required', 'string','max:255'],
            'blood_group' => ['required', 'string','max:255'],

            'phone' => ['required', 'string','min:11', 'max:11', 'unique:'.User::class],
            
            'last_donated' => ['required','string', 'max:255'],
            'donation_type' => ['required','string', 'max:255'],

            'email' => [ 'nullable','unique:'.User::class],

            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'district' => $request->district,

            

            'blood_group' => $request->blood_group,
            'phone' => $request->phone,
            'donation_type' => $request->donation_type,
            'last_donated' => $request->last_donated
            ,

            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
