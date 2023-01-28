@extends('layouts.admin')
@section('title','Edit Gallery')
@section('content')
<main id="main" class="main">
    <div class="container">
            <h5 class="d-inline">Edit Gallery</h5>
            <a href="{{url('admin/gallery')}}" class="float-end">Back</a>
           <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-5">
                <img id="galleryPreview" src="{{asset($gallery->galleryImage)}}" class="w-50">
                <form action="{{url('admin/update-gallery/'.$gallery->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label>Upload Gallery Image</label>
                    <input 
                    type="file" 
                    name="galleryImage"
                    class="form-control @error('galleryImage') is-invalid @enderror" 
                    id="gallery">
                    @error('galleryImage')
                     <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <button type="submit" class="btn btn-dark my-3 w-50 float-end">Upload</button>
                </form>
            </div>
            <div class="col-md-3"></div>
           </div>
    </div>
</main>
@endsection
@push('custom-scripts')
    <script>
        $(document).ready(()=>{
      $('#gallery').change(function(){
        const file = this.files[0];
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
            $('#galleryPreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    });
    </script>
@endpush