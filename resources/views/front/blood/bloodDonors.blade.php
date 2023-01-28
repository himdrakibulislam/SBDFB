@extends('layouts.front')
@section('title','রক্তদাতা')
@section('content')
<div class="container adjust">
    <div class="row mb-5 ">
        
        <div class="col-md-2"></div>
        <div class="col-md-8 shadow my-4 py-5 ">
            
            <h3>রক্ত অনুসন্ধান করুন</h3>
            <form action="{{url('search')}}" method="POST">
                @csrf
                <small class="label">জেলা <span class="text-danger star">*</span> </small>
                 <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-location-dot text-success"></i>
                   </span>
                    <select
                     id="district"
                     name="district"
                     class="form-control @error('district') is-invalid @enderror" 
                      required
                    >   
                    <option value="ঢাকা">ঢাকা</option>
                    <option value="কুমিল্লা">কুমিল্লা</option>   
                    <option value="ফেনী">ফেনী</option>   
                    <option value="ব্রাহ্মণবাড়িয়া">ব্রাহ্মণবাড়িয়া</option>   
                    <option value="রাঙ্গামাটি">রাঙ্গামাটি</option>   
                    <option value="নোয়াখালী">নোয়াখালী</option>   
                    <option value="চাঁদপুর">চাঁদপুর</option>   
                    <option value="লক্ষ্মীপুর">লক্ষ্মীপুর</option>   
                    <option value="চট্টগ্রাম">চট্টগ্রাম</option>   
                    <option value="কক্সবাজার">কক্সবাজার</option>   
                    <option value="খাগড়াছড়ি">খাগড়াছড়ি</option>   
                    <option value="বান্দরবান">বান্দরবান</option>   
                    <option value="সিরাজগঞ্জ">সিরাজগঞ্জ</option>   
                    <option value="পাবনা">পাবনা</option>   
                    <option value="বগুড়া">বগুড়া</option>   
                    <option value="রাজশাহী">রাজশাহী</option>   
                    <option value="নাটোর">নাটোর</option>   
                    <option value="জয়পুরহাট">জয়পুরহাট</option>   
                    <option value="চাঁপাইনবাবগঞ্জ">চাঁপাইনবাবগঞ্জ</option>   
                    <option value="নওগাঁ">নওগাঁ</option>   
                    <option value="যশোর">যশোর</option>   
                    <option value="সাতক্ষীরা">সাতক্ষীরা</option>   
                    <option value="মেহেরপুর">মেহেরপুর</option>   
                    <option value="নড়াইল">নড়াইল</option>   
                    <option value="চুয়াডাঙ্গা">চুয়াডাঙ্গা</option>   
                    <option value="কুষ্টিয়া">কুষ্টিয়া</option>   
                    <option value="মাগুরা">মাগুরা</option>   
                    <option value="খুলনা">খুলনা</option>   
                    <option value="বাগেরহাট">বাগেরহাট</option>   
                    <option value="ঝিনাইদহ">ঝিনাইদহ</option>   
                    <option value="ঝালকাঠি">ঝালকাঠি</option>   
                    <option value="পটুয়াখালী">পটুয়াখালী</option>   
                    <option value="পিরোজপুর">পিরোজপুর</option>   
                    <option value="বরিশাল">বরিশাল</option>   
                    <option value="ভোলা">ভোলা</option>   
                    <option value="বরগুনা">বরগুনা</option>   
                    <option value="সিলেট">সিলেট</option>   
                    <option value="মৌলভীবাজার">মৌলভীবাজার</option>   
                    <option value="হবিগঞ্জ">হবিগঞ্জ</option>   
                    <option value="সুনামগঞ্জ">সুনামগঞ্জ</option>   
                    <option value="নরসিংদী">নরসিংদী</option>   
                    <option value="গাজীপুর">গাজীপুর</option>   
                    <option value="শরীয়তপুর">শরীয়তপুর</option>   
                    <option value="নারায়ণগঞ্জ">নারায়ণগঞ্জ</option>   
                    <option value="টাঙ্গাইল">টাঙ্গাইল</option>   
                    <option value="কিশোরগঞ্জ">কিশোরগঞ্জ</option>   
                    <option value="মানিকগঞ্জ">মানিকগঞ্জ</option>   
                      
                    <option value="মুন্সিগঞ্জ">মুন্সিগঞ্জ</option>   
                    <option value="রাজবাড়ী">রাজবাড়ী</option>   
                    <option value="মাদারীপুর">মাদারীপুর</option>   
                    <option value="গোপালগঞ্জ">গোপালগঞ্জ</option>   
                    <option value="ফরিদপুর">ফরিদপুর</option>   
                    <option value="পঞ্চগড়">পঞ্চগড়</option>   
                    <option value="দিনাজপুর">দিনাজপুর</option>   
                    <option value="লালমনিরহাট">লালমনিরহাট</option>   
                    <option value="নীলফামারী">নীলফামারী</option>   
                    <option value="গাইবান্ধা">গাইবান্ধা</option>   
                    <option value="ঠাকুরগাঁও">ঠাকুরগাঁও</option>   
                    <option value="রংপুর">রংপুর</option>   
                    <option value="কুড়িগ্রাম">কুড়িগ্রাম</option>   
                    <option value="শেরপুর">শেরপুর</option>   
                    <option value="ময়মনসিংহ">ময়মনসিংহ</option>   
                    <option value="জামালপুর">জামালপুর</option>   
                    <option value="নেত্রকোণা">নেত্রকোণা</option>   
                       
                    </select>  
                </div>
                @error('district')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror




                 <small class="label">রক্তের গ্রুপ <span class="text-danger star">*</span> </small>
                 <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-droplet text-success"></i>
                   </span>
                    <select
                     id="blood_group"
                     name="blood_group"
                     class="form-control @error('blood_group') is-invalid @enderror" 
                      required
                    >   
                       
                    <option value="A+">A+</option>    
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    
                    
                    </select>  
                </div>
                @error('blood_group')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror


                 <button type="submit" class="btn btn-danger w-50 float-end mt-3">অনুসন্ধান করুন</button>
            
            </form>
        </div>
        <div class="col-md-2"></div>




        @if (!empty($bloodDonors))

        @foreach ($bloodDonors as $donor)
            
        <div class="col-md-4 mt-4 border border-success rounded">


            
                <div class="text-center mt-3">
                 <p>
                    @if ($donor->profile_url)
                    <img src="{{asset($donor->profile_url)}}" alt="user" class="avatar " >
                    @else
                    <img src="{{asset('assets/img/user.png')}}" alt="user" class="rounded-circle" style="width:20%">
                    @endif
                 
                 </p>
              
                 
                 <h4 class="my-2">{{$donor->name}}</h4>
                 <b><i class="fa-solid fa-droplet mx-3 text-danger"></i>{{$donor->blood_group}}</b>
                </div>
     
                <div class="row my-5">
                  <div class="col-md-6">
                     <p><i class="fa-solid fa-phone mx-3"></i><a href="tel:{{$donor->phone}}">{{$donor->phone}}</a></p>
     
                     <p><i class="fa-solid fa-location-dot mx-3"></i>{{$donor->address}}</p>
                     <p><i class="fa-solid fa-location-dot mx-3"></i>{{$donor->district}}</p>
     
                    
                     
                
                 
                  </div>
     
     
                  <div class="col-md-6">
                     <p><i class="fa-solid fa-user mx-3"></i>{{$donor->gender}}</p>
                     
                     @if ($donor->email)
                     <p><i class="fa-solid fa-envelope mx-3"></i>{{$donor->email}}</p>
                         
                     @endif
     
     
                     <p class="border rounded border-dark">
                         <small class="ms-4 fw-bold">সর্বশেষ রক্তদান</small>
                         <br>
                         <i class="fa-solid fa-calendar-days ms-2"></i>
                        <small> {{date('d / F / Y',strtotime($donor->last_donated))}}</small>
                      </p>
     
                         <small> <b>অনুদানের ধরণ </b>: 
                           {{$donor->donation_type}}
                         </small>
                  </div>
                </div>
        </div>
        @endforeach
        @else
        
        <h3 class="text-center fw-bold">No Donors</h3>
        @endif

        
        
        
    </div>
    {{ $bloodDonors->links() }}
</div>
@endsection