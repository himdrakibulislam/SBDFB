@extends('layouts.admin')
@section('title','Gallery')
@section('content')
<main id="main" class="main">
    <div class="container">
        
            <h5 class="d-inline">Gallery</h5>
            <a href="{{url('admin/add-gallery')}}" class="float-end"><i class="fa-solid fa-plus"></i></a>
        
            <div class="row">
                @foreach ($gallery as $item)
                <div class="col-md-4 text-center my-4">
                    
                    <img src="{{asset($item->galleryImage)}}" class="w-50 rounded m-1" alt="gallery">
                    <br>



                    <form action="{{url('admin/delete-gallery/'.$item->id)}}"
                        class="d-inline float-end"
                        method="post">
                        @csrf
                        @method('delete')

                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>

                    </form>
                    


                    <a href="{{url('admin/edit-gallery/'.$item->id)}}" class="btn btn-dark float-end btn-sm">
                        <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                     
                </div>
                @endforeach
            </div>
    </div>
</main>
@endsection