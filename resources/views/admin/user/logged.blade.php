@extends('layouts.admin')
@section('title','Logged User')
@section('content')
<main id="main" class="main">
    <div class="container table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">
                        IP
                    </th>
                    <th scope="col">
                        Device
                    </th>
                    <th scope="col">
                        User
                    </th>
                    <th scope="col">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
               @foreach ($loggedUser as $user)
               <tr>
                       
                        <td  scope="row">{{$user->ip_address}} </td>
                        <td  scope="row">{{$user->user_agent}}</td>

                        @if ($user->user_id)
                        <td  scope="row">{{$user->user->name}}</td>
                            @else
                            <td  scope="row">Unknown</td>
                        @endif


                        <td>
                            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                <i class="fa-solid fa-ellipsis-vertical fa-2x"></i>
                                
                              </a>
                    
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                               
                               <li class="notification-item">
                                <a href="{{url('admin/user/'.$user->user_id)}}"
                                    class="btn btn-outline-success btn-sm w-100"
                                    >view</a>
                               </li>
                               <li>
                                <hr class="dropdown-divider">
                              </li>


                               

                               <li class="notification-item ">
                                <a href="edit" 
                                class="btn btn-outline-success btn-sm w-100"
                                ><i class="fa-solid fa-pen-to-square"></i></a>
                               </li>
                               <li>
                                <hr class="dropdown-divider">
                              </li>


                               <li class="notification-item ">
                                <a href="delete" class="btn btn-outline-success btn-sm w-100"><i class="fa-solid fa-trash"></i></a>
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
    {{ $loggedUser->links() }}
</main>
@endsection