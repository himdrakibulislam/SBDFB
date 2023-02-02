@extends('layouts.admin')
@section('title','Blood donners')
@section('content')
<main id="main" class="main">
    <div class="container table-responsive">
        
        <form method="POST" action="{{url('admin/search-user')}}" class="d-flex" role="search">
            @csrf
            <input class="form-control me-2" name="phone" type="search" id="searchuser"  
            maxlength="11"
            placeholder="Search by contact number" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">
                        নাম
                    </th>
                    <th scope="col">
                        ফোন নাম্বার
                    </th>
                    <th scope="col">
                        রক্তের গ্রুপ
                    </th>
                    <th scope="col">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
               <tr>
                       
                        <td  scope="row">{{$user->name}} </td>
                        <td  scope="row"><a href="tel:{{$user->phone}}">{{$user->phone}}</a></td>
                        <td  scope="row">{{$user->blood_group}} <small>{{$user->donation_type}}</small></td>
                        <td>
                            

                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                
                              </a>
                    
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                               
                               <li class="notification-item">
                                <a href="{{url('admin/user/'.$user->id)}}"
                                    class="btn btn-outline-success btn-sm w-100"
                                    >view</a>
                               </li>
                               <li>
                                <hr class="dropdown-divider">
                              </li>


                               

                               {{-- <li class="notification-item ">
                                <a href="edit" 
                                class="btn btn-outline-success btn-sm w-100"
                                ><i class="fa-solid fa-pen-to-square"></i></a>
                               </li>
                               <li>
                                <hr class="dropdown-divider">
                              </li>


                               <li class="notification-item ">
                                <a href="delete" class="btn btn-outline-success btn-sm w-100"><i class="fa-solid fa-trash"></i></a>
                               </li> --}}



                               <li class="notification-item">
                                <form action="{{url('admin/user/add-admin/'.$user->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                        class="btn btn-outline-success btn-sm w-100"
                                        >Make Admin
                                    </button>
                                </form>
                               </li>
                               <li>
                                <hr class="dropdown-divider">
                              </li>

                              </ul>
                        </td>
                        
                </tr>
               @endforeach
            </tbody>
        </table>

        
        
    </div>
    {{ $users->links() }}
</main>
@endsection

