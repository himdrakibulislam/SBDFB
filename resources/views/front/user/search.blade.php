@extends('layouts.front')
@section('title','রক্ত')
@section('content')
    <div class="container search-page">
       @if (count($users) > 0)
       <h3 class="text-center w-100 text-white bg-success py-2">{{$blood_group}} <small>রক্তদাতাদের তালিকা</small></h3>
       <div class="table-responsive my-4">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>নং</th>
                    <th>নাম</th>
                    <th>ঠিকানা</th>
                    <th>যোগাযোগ</th>
                    <th>সর্বশেষ রক্তদান</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$user->name}}</td>
                    <td>
                        <p>{{$user->address}}</p>
                        <small><b>জেলাঃ </b></small><small>{{$user->district}}</small>
                        <br>
                        <small><b>ধরণঃ </b></small>
                        <small>{{$user->donation_type}}</small>
                    </td>
                    <td>
                        <a href="tel:{{$user->phone}}">{{$user->phone}}</a>
                    </td>
                    <td>
                        {{date('d/F/Y',strtotime($user->last_donated))}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       </div>
       
           @else
           <h3 class="text-center mt-4">{{$blood_group}} 
            <small>রক্তদাতাদের তালিকা পাওয়া যায়নি </small>
           </h3>
       @endif
    </div>
@endsection