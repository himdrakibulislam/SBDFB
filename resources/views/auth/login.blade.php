@extends('layouts.front')
@section('title','লগইন')
@section('content')
    <div class="container adjust">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 shadow mt-3">
                <div class="shadow-header text-center">
                    <p>লগইন করুন</p>
                </div>
            
  
                

             <form action="{{url('/login')}}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-phone text-success"></i>
                   </span>
                    <input id="phone"
                     type="number" 
                     value="{{ old('phone') }}"
                     class="form-control @error('phone') is-invalid @enderror" 
                    
                     name="phone" placeholder="মোবাইল নাম্বার" required>     
                </div>
                @error('phone')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror



                <div class="input-group mb-3">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-lock text-success"></i>
                   </span>
                    <input  
                    type="password" 
                    value="{{ old('password') }}"
                    class="form-control @error('password') is-invalid @enderror" name="password" placeholder="পাসওয়ার্ড" required>
                </div>
                @error('password')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror





                <div>
                   <a href="{{route('password.request')}}" class="d-inline">Forgot Password?</a>
                    <button 
                    type="submit"
                    class="btn-custom float-end d-inline">লগইন</button>
                </div>
             </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


 {{-- <!-- Email Address -->
 <div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Remember Me -->
<div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    <x-primary-button class="ml-3">
        {{ __('Log in') }}
    </x-primary-button>
</div> --}}