@extends('layouts.front')
@section('content')
    <div class="container my-5">
      <div class="row">
        <p class="bg-black-50  p-3 border rounded" style="text-align:justify;font-size:16px; margin-bottom: 8px">রক্তদান একটি মহৎ অভ্যাস। বিশ্বে দিন দিন স্বেচ্ছায় রক্তদান বাড়ছে।এই মহৎ উদ্যোগে সোনারতরী রক্তদান ফাউন্ডেশন বাংলাদেশ অগ্রণী ভূমিকা পালন করায় দৃঢ় প্রত্যয় প্রকাশ করে।
          রক্ত দাতা এবং গ্রহিতা সবাইকে সোনারতরী ফাউন্ডেশন স্বাগত জানায়। রক্তদাতার সঙ্গে গ্রহীতার যোগাযোগ করিয়ে দেওয়াই আমাদের উদ্দেশ্য।আপনি যদি রক্তদানে ইচ্ছুক হয়ে থাকেন তাহলে নিচের <b>‘সদস্য হতে চাই‘</b> বাটনে ক্লিক করুন এবং রক্তদাতার খোঁজ করতে ক্লিক করুণ <b>‘রক্তদাতা চাই‘</b> বাটনে।</p>

          <div class="col-md-4 mt-4">
            <a href="{{url('register')}}" class="btn btn-danger w-100">সদস্য হতে চাই</a>
          </div>
          <div class="col-md-4 mt-4">
            <a href="#donation" class="btn btn-danger w-100">প্লাটিলেট অনুসন্ধান করুন
            </a>
          </div>
          <div class="col-md-4 mt-4">
            <a href="#donation" class="btn btn-danger w-100">রক্তদাতা চাই</a>
          </div>
      </div>
      
       <div id="donation" class="row my-5 bg-success p-3 text-white rounded">
        <div class="col-md-6">
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


                 <button type="submit" class="btn btn-danger w-50 float-end mt-4">অনুসন্ধান করুন</button>
            
            </form>
        </div>




        <div class="col-md-6">

            <h3 class="plt">প্লাটিলেট অনুসন্ধান করুন</h3>
            <form action="{{url('searchplatelets')}}" method="POST">
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


                 <button type="submit" class="btn btn-danger w-50 float-end mt-4">অনুসন্ধান করুন</button>
            
            </form>
        </div>
       </div>
          
       <!-----Notice------>

       <div class="row my-5">
        <div class="col-md-6">
          <h4 class="fw-bold">রক্তদাতার জন্য পরামর্শ</h4>
          <ul>
            <li style="text-align:justify">একদম খালি পেটে কিংবা একেবারে ভরা পেটে রক্ত দেওয়া উচিত নয়। হালকা খাবার গ্রহণের আধা ঘণ্টা থেকে এক ঘণ্টার মধ্যে রক্ত দিতে হবে।</li>

          <li style="text-align:justify">  স্বাভাবিকের চেয়ে দু-তিন গ্লাস বেশি পানি পান করুন, রক্তদানের আগেই।</li>

          <li style="text-align:justify">রক্ত দেওয়ার পর অন্তত ৩০ মিনিট বিশ্রাম নিন। সেদিন গাড়ি বা সাইকেল চালানোসহ যেকোনো ভারী কাজ থেকে বিরত থাকুন।</li>

          <li style="text-align:justify" >  ধূমপায়ী ব্যক্তির রক্ত নিলে রোগীর কোনো সমস্যা হওয়ার আশঙ্কা নেই। তবে ধূমপায়ী রক্তদাতা যেদিন রক্ত দেবেন, সেদিন তাঁর নিজের নিরাপত্তার জন্য ধূমপান থেকে বিরত থাকা উচিত।</li>

          <li style="text-align:justify">রক্তসঞ্চালনের আগে রোগী ও রক্তদাতার রক্তের গ্রুপ মেলানোর পাশাপাশি ক্রস ম্যাচিং ও স্ক্রিনিং পরীক্ষা জরুরি। এ পরীক্ষায় জানা যায়, দাতার রক্তে কোনো রক্তবাহিত রোগ আছে কি না।</li>


          <li style="text-align:justify"> তাপে রক্তকণিকা নষ্ট হয়ে যায়। তাই হিমায়িত রক্ত কখনো গরম করা উচিত নয়। ব্লাড ব্যাংক থেকে রক্ত আনার ৩০ মিনিটের মধ্যে রক্তসঞ্চালন শুরু করতে হবে এবং ৪ ঘণ্টার মধ্যে শেষ করতে হবে।</li>

          </ul>
        </div>


        <div class="col-md-6">
         

         <h4 class="fw-bold"> রক্তদানের পর যে বিষয়গুলি মনে রাখা দরকার:</h4>

         <ul>
          <li style="text-align:justify">
           রক্তদানের পর লাগিয়ে দেওয়া স্ট্রিপ ব্যান্ডেজ অন্তত কয়েক ঘণ্টা রাখুন।
          </li>
          <li style="text-align:justify">
            পর্যাপ্ত পরিমাণ পানি পান করুন।
          </li>
          <li style="text-align:justify">
           ত্বকের র‌্যাশ এড়ানোর জন্য ব্যান্ডেজ খোলার পর ভালো করে সাবান পানি দিয়ে পরিষ্কার করে নিন।
          </li>
          <li style="text-align:justify">
            ওই দিন ভারী কিছু তুলবেন না বা এক্সারসাইজ না করাই ভালো।
          </li>
          <li style="text-align:justify">
            যদি সূঁচ ফোটানো জায়গা থেকে রক্তপাত হতে থাকে তা হলে ক্ষতের উপর চাপ দিয়ে হাত সোজা করে ৫-১০ মিনিট উপরের দিকে তুলে রাখুন, যতক্ষণ না রক্তপাত বন্ধ হচ্ছে।
          </li>
          <li style="text-align:justify">
            রক্ত দেওয়ার পর মাথা ঘুরলে বা কোনও রকম শারীরিক অস্বস্তি হলে কিছু ক্ষণ বসে থাকুন বা শুয়ে থাকুন। যতক্ষণ না সুস্থ বোধ করছেন।
          </li>


         </ul>
        </div>
        
        <div class="col-md-6 my-4 text-center">
          <a  href="https://www.facebook.com/sbdfb2020?mibextid=ZbWKwL" target="_blank" class="btn btn-success w-75 " >
           <i class="fa-brands fa-facebook fa-1x me-2"></i>
           ফেইসবুক 
           
            পেইজে জয়েন করুন
           </a>
         </div>
         
         <div class="col-md-6 my-4 text-center">
          <a  href="https://www.facebook.com/groups/1898415033764121" target="_blank" class="btn btn-success w-75 " >
           <i class="fa-brands fa-facebook fa-1x me-2"></i>
           ফেইসবুক গ্রুপে জয়েন করুন </a>
         </div>
       
      

       </div>

    </div>

    <!----Gallery---->
    {{-- <div id="carouselExampleCaptions" class="carousel slide"   data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        @foreach ($galleries as $key=>$item)
        <div class="carousel-item {{$key == 0 ? 'active':''}}">
          <img src="{{asset($item->galleryImage)}}" class="carouselImg"  alt="gallery"  >
        
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div> --}}

    <div class="owl-carousel">
     @foreach ($galleries as $item)
     <div> <img class="carouselImg" src="{{asset($item->galleryImage)}}" >  </div>
     @endforeach
      
    </div>
    
    
@endsection

@push('custom-scripts')
<script>

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
// owl.on('mousewheel', '.owl-stage', function (e) {
//     if (e.deltaY>0) {
//         owl.trigger('next.owl');
//     } else {
//         owl.trigger('prev.owl');
//     }
//     e.preventDefault();
// });

  
</script>
    
@endpush