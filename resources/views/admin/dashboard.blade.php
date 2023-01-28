@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    
  <main id="main" class="main">

    
    <h3>Dashboard</h3>
    <div class="row">
      <div class="col-md-3 bg-success text-white rounded text-center py-3 me-2 mt-3">
        <h3>All Donors</h3>
        <small class="total">{{$alldonners}}</small>
      </div>
      <div class="col-md-4  bg-danger text-white rounded text-center py-3 me-2 mt-3">
        <h3>Blood Donors</h3>
        <small class="total">{{$blood}}</small> 
      </div>
      <div class="col-md-3 bg-secondary text-white rounded text-center py-3 me-2 mt-3">
          <h3>Platelets Donors</h3>
           <small class="total">{{$platelets}}</small>
      </div>
    </div>

  </main><!-- End #main -->
@endsection