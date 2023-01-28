@extends('layouts.admin')
@section('title','users')
@section('content')
<main id="main" class="main">
    <div class="container">
        @if (is_object($user))

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="text-center">
               @if ($user->profile_url)
               <img src="{{asset($user->profile_url)}}" alt="user" class="allusers" >
               @else
               <img src="{{asset('assets/img/user.png')}}" alt="user" class="rounded-circle" style="width:20%">
               @endif
               <h4 class="my-3">{{$user->name}}</h4>
               <form action="{{url('admin/update-password/'.$user->id)}}" method="POST">

                @csrf
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required >
 
                
                 @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <button type="submit" class="btn btn-outline-dark float-end my-2 w-50">Update</button>
               </form>
            </div>
            <div class="col-md-3"></div>
                @else
                <h3 class="text-center my-5 fw-bold">User Not Found</h3>
                @endif

</div>
@endsection