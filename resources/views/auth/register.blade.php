@extends('layouts.front')
@section('title','রেজিস্ট্রেশন')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 shadow mt-3">
                <div class="shadow-header text-center">
                    <p>রেজিস্ট্রেশন</p>
                </div>
            
  
                

             <form action="{{url('/register')}}" method="POST">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <small class="label">নাম <span class="text-danger star">*</span> </small>
                <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-user text-success"></i>
                   </span>
                    <input id="name"
                     type="text" 
                     value="{{ old('name') }}"
                     class="form-control @error('name') is-invalid @enderror" 
                     name="name" placeholder="নাম" required>     
                </div>
                @error('name')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror






                <div class="border py-2 ms-4">
                    <div class="checkbox-wrapper-31 me-5 ms-5">
                        <input type="checkbox" 
                        name="gender"
                        value="পুরুষ"
                        class="gender"
                        />
                        <svg viewBox="0 0 35.6 35.6">
                          <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                          <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                          <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                        </svg>
                        <label >পুরুষ</label>
                      </div>
    
    
                     <div class="checkbox-wrapper-31">
                        <input 
                        type="checkbox" 
                        name="gender" 
                        value="মহিলা"
                        class="gender"/>
                        <svg viewBox="0 0 35.6 35.6">
                          <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                          <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                          <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                        </svg>
                        <label>মহিলা</label>
                      </div>
                      @error('gender')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 
               




                 
                 <small class="label">মোবাইল নাম্বার <span class="text-danger star">*</span> </small>
                <div class="input-group mb-2">
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



                 <small class="label">ঠিকানা <span class="text-danger star">*</span> </small>
                <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-location-dot text-success"></i>
                   </span>
                    <input id="address"
                     type="text" 
                     value="{{ old('address') }}"
                     class="form-control @error('address') is-invalid @enderror" 
                     name="address" placeholder="ঠিকানা" required>     
                </div>
                @error('address')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror




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



                 <small class="label">অনুদানের ধরণ
                    <span class="text-danger star">*</span> </small>
                 <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fas fa-donate text-success"></i>
                   </span>
                    <select
                     id="donation_type"
                     name="donation_type"
                     class="form-control @error('donation_type') is-invalid @enderror" 
                      required
                    >   
                       
                    <option value="রক্ত">রক্ত</option>
                    <option value="প্লাটিলেট">প্লাটিলেট </option>
                    {{-- <option value="উভয়">উভয়</option>     --}}
                   
                    
                    
                    </select>  
                </div>
                @error('donation_type')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror



                 <small class="label">সর্বশেষ রক্ত দানের তারিখ <span class="text-danger star">*</span> </small>
                 <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-calendar-days text-success"></i>
                   </span>
                    <input 
                    type="date"
                     id="last_donated"
                     name="last_donated"
                     class="form-control @error('last_donated') is-invalid @enderror" 
                      required
                    >   
                       
                    
                </div>
                @error('last_donated')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror




                 <small class="label">ইমেইল (যদি থাকে)  </small>
                 <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-envelope text-success"></i>
                   </span>
                    <input 
                    type="email"
                     id="email"
                     name="email"
                     placeholder="ইমেইল (যদি থাকে)"
                     class="form-control @error('email') is-invalid @enderror" 
                      
                    >   
                </div>
                @error('email')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror




                 <small class="label">পাসওয়ার্ড<span class="text-danger star">*</span> </small>
                <div class="input-group mb-2">
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



                     <small class="label">কনফার্ম পাসওয়ার্ড<span class="text-danger star">*</span> </small>
                <div class="input-group mb-2">
                    <span class="input-group-addon p-2">
                        <i class="fa-solid fa-lock text-success"></i>
                   </span>
                    <input  
                    type="password" 
                    value="{{ old('password_confirmation') }}"
                    class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="কনফার্ম পাসওয়ার্ড" required>
                </div>
                @error('password_confirmation')
                     <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                


                <div>
                   
                    <button 
                    type="submit"
                    class="btn-custom float-end d-inline">রেজিস্ট্রেশন</button>
                </div>
             </form>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection


@push('custom-scripts')
<script type="text/javascript">
$(document).ready(function(){

   $('.gender').click(function() {
      $('.gender').not(this).prop('checked', false);
   });

   
});
</script>
@endpush