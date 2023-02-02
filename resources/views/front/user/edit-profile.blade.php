@extends('layouts.front')
@section('title','প্রোফাইল-সম্পাদনা')
@section('content')
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 mt-4 ">
              <div class="text-center">
               <p>
                   @if ($user->profile_url)
                   <img src="{{asset($user->profile_url)}}" alt="user" class="avatar" 
                   id="profilePreview"
                   >
                   @else
                   <img src="{{asset('assets/img/user.png')}}" alt="user" class="" style="width:20%"
                   id="profilePreview"
                   >
                   @endif
               
               </p>
            
               
               <form action="{{url('/upload-profile')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="my-4 fw-bold">প্রোফাইল পরিবর্তন</label>
              <input type="file" id="profile" name="profileImage" class="form-control mx-auto w-80 @error('profileImage') is-invalid @enderror" >


              @error('profileImage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


              <button type="submit" class="btn-custom float-end w-50">পরিবর্তন</button>
              </form>
              
        </div>
        <div class="col-md-2"></div>


   
    </div>



    

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 border rounded border-secondary p-3">
        
        <p class="fw-bold">  সর্বশেষ রক্ত দানের তারিখ পরিবর্তন </p>



        <form action="{{url('/date-change')}}" method="POST">
          
         @csrf
         @method('PATCH')
          <div class="input-group mb-2">
            <span class="input-group-addon p-2">
                <i class="fa-solid fa-calendar-days text-success"></i>
           </span>
            <input 
            type="date"
             id="last_donated"
             name="last_donated"
             value="{{$user->last_donated}}"
             class="form-control @error('last_donated') is-invalid @enderror" 
              required
            >   
               
            
            </div>
            @error('last_donated')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror

              
             <button type="submit" class="btn-custom w-50 float-end">পরিবর্তন</button>
            </form>


        </form> 
      </div>
      <div class="col-md-2"></div>
    </div>




    <div class="row my-4">
        
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center border rounded py-4 border-secondary">
            <h3 class="mt-4">পাসওয়ার্ড পরিবর্তন</h3>

           
            @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>

           @endif
            <form action="{{route('profile.update')}}" method="POST">
                @csrf
                @method('PATCH')

 
            <input type="password" name="old_password" placeholder="বর্তমান পাসওয়ার্ড" class="form-control my-4  @error('old_password') is-invalid @enderror">
            @error('old_password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <input type="password" name="new_password" placeholder="নতুন পাসওয়ার্ড" class="form-control my-4 @error('new_password') is-invalid @enderror">
            @error('new_password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <input type="password" name="new_password_confirmation" placeholder="কনফার্ম পাসওয়ার্ড" class="form-control my-4 @error('new_password_confirmation') is-invalid @enderror">
            @error('new_password_confirmation')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror



            
             <button type="submit" class="btn-custom w-50 float-end">পরিবর্তন</button>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</main>
@endsection

@push('custom-scripts')

<script>
    
    $(document).ready(()=>{
      $('#profile').change(function(){
        const file = this.files[0];
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            $('#profilePreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
</script>
    
@endpush