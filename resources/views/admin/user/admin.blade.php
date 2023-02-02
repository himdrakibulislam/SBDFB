@extends('layouts.admin')
@section('title','Admins')
@section('content')
<main id="main" class="main">
    <div class="container table-responsive">
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
               @foreach ($admins as $admin)
               <tr>
                       
                        <td  scope="row">{{$admin->name}} 
                            <span class="badge bg-success mx-2 float-end">Admin</span>
                        </td>
                        <td  scope="row"><a href="tel:{{$admin->phone}}">{{$admin->phone}}</a></td>
                        <td  scope="row">{{$admin->blood_group}}</td>
                        <td>


                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                
                              </a>
                    
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                               
                               <li class="notification-item">
                                <a href="{{url('admin/user/'.$admin->id)}}"
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
                                <form action="{{url('admin/user/remove-admin/'.$admin->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                        class="btn btn-outline-success btn-sm w-100"
                                        >Remove Admin
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
</main>
@endsection