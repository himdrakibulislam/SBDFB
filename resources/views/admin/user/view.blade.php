@extends('layouts.admin')
@section('title','users')
@section('content')
<main id="main" class="main">
    <div class="container">
        @if (is_object($user))

        <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8 ">
           <div class="text-center">
            @if ($user->profile_url)
            <img src="{{asset($user->profile_url)}}" alt="user" class="allusers" >
            @else
            <img src="{{asset('assets/img/user.png')}}" alt="user" class="rounded-circle" style="width:20%">
            @endif
            <h4 class="my-2">{{$user->name}}</h4>
            <a href="{{url('admin/edit-password/'.$user->id)}}"
              class="btn btn-outline-dark my-3 w-50"
              >
            Edit Password
            </a>
           </div>

           <div class="row">
             <div class="col-md-6">
                <p><i class="fa-solid fa-phone mx-3"></i><a href="tel:{{$user->phone}}">{{$user->phone}}</a></p>

                <p><i class="fa-solid fa-location-dot mx-3"></i>{{$user->address}}</p>
                <p><i class="fa-solid fa-location-dot mx-3"></i>{{$user->district}}</p>

                <p><i class="fa-solid fa-droplet mx-3"></i>{{$user->blood_group}}</p>
                
                
            
             </div>


             <div class="col-md-6">
                <p><i class="fa-solid fa-user mx-3"></i>{{$user->gender}}</p>
                
                @if ($user->email)
                <p><i class="fa-solid fa-envelope mx-3"></i>{{$user->email}}</p>
                    
                @endif


                <p class="border rounded border-dark">
                  <b class="ms-4">সর্বশেষ রক্তদান</b>
                  <br>
                  <i class="fa-solid fa-calendar-days mx-3"></i>{{date('d / F / Y',strtotime($user->last_donated))}}</p>

                  <p> <b>অনুদানের ধরণ </b>: 
                    {{$user->donation_type}}
                  </p>
             </div>
           </div>

         </div>
         <div class="col-md-2"></div>
         <div class="col-md-3">
         <form action="{{url('admin/user/delete/'.$user->id)}}"
         method="POST"
         >
         @csrf
         @method('delete')
         <button type="submit"
          class="btn btn-outline-danger w-100 float-end"
          >Delete User</button>

        </form>
        </div>   
        </div>

     

        @else
        <h3 class="text-center my-4">{{$user}}</h3>
        @endif
       
    </div>
</main>
@endsection