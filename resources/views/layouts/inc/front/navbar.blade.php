<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-cente">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

     
 <a href="{{url('/')}}" class="logo me-auto me-lg-0"><img src="{{asset('assets/img/logo.png')}}" alt="logo" class="logo-style"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>


        
        

      

        <li>
          <a class="nav-link scrollto {{request()->is('/') ? 'active' : '' }}" href="{{url('/')}}">
            <small class="navsize">
              হোম 

            </small>
          </a>
        </li>

         <li>
          <a class="nav-link scrollto  {{request()->is('blood-donors') ? 'active' : '' }}" href="{{url('/blood-donors')}}">
            <small class="navsize">
              রক্তদাতা
              

            </small>
          </a>
        </li>


        <li>
          <a class="nav-link scrollto {{request()->is('about') ? 'active' : '' }}" href="{{url('/about')}}">
            <small class="navsize">
              যোগাযোগ
            

            </small>
          </a>
        </li>

        {{-- <li>
          <a class="nav-link scrollto {{request()->is('/notice') ? 'active' : '' }}" href="{{url('/notice')}}">
            নোটিশ
          </a>
        </li>

        <li>
          <a class="nav-link scrollto" href="#about">
          ভলান্টিয়ার্স
          </a>
        </li> --}}
        
        
               @if (Route::has('login'))
                
                    @auth



                   


                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        @if (Auth::user()->profile_url)
                        <img class="rounded-circle me-2" style="width:30px; height:30px" src="{{asset(Auth::user()->profile_url)}}" alt="">
                        @else
                        <img class="rounded-circle me-2" style="width:30px; height:30px" src="{{asset('assets/img/user.png')}}" alt="">
                        @endif
                        
                      </a>
                      <div class="dropdown-menu dropdown-menu-end text-center">
                        <small class="text-center">{{Auth::user()->name}}</small>
                          <a href="{{route('profile.view')}}" class="dropdown-item">
                             প্রোফাইল
                            <br>
                         
                          </a>
                          
                          <div class="dropdown-divider"></div>
                         
                          <form action="{{url('logout')}}" method="POST">
                            <button type="submit" class="btn-custom ">
                              @csrf
                                লগ আউট
                            </button>
                            </form>
                      </div>
                  </li>




                   
                    @else

                    <li>
                      <a class="nav-link scrollto {{request()->is('login') ? 'active' : '' }}" href="{{url('/login')}}">
                        <small class="navsize">
                        লগইন
                      
          
                      </small>
                      </a>
                   </li>
                        @if (Route::has('register'))
                        <li>
                          <a class="nav-link scrollto {{request()->is('register') ? 'active' : '' }}" href="{{url('/register')}}">
                            <small class="navsize">
                            রেজিস্ট্রেশন
                          </small>
                          </a>
                        </li>
                        @endif
                    @endauth
                
         @endif



         




    
    

      
          </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
  

    
  </div>
</header><!-- End Header -->










