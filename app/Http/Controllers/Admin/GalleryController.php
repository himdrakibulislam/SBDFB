<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }
    public function add(){
        return view('admin.gallery.add');
    }
    public function store(Request $request){
        $request->validate([
            'galleryImage' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $uploadPath = 'uploads/gallery/';
        
        try {
            if($request->hasFile('galleryImage')){
            
                $filename = $request->galleryImage->getClientOriginalExtension();
                $galleryImg = Str::random(13).'.'.$filename;
    
         
    
                // Image::make($request->galleryImage)->resize(400, 200)->save($uploadPath.$galleryImg);

                $request->galleryImage->move($uploadPath,$galleryImg);

                $gallery = new Gallery();
                $gallery->galleryImage = $uploadPath.$galleryImg;
                $gallery->save();               
                return redirect('admin/gallery')->with('status','Gellary Added');
    
            }
        } catch (\Throwable $th) {
             return redirect()->back()->with('status','An Error Occured');
        }
    }

    public function edit(int $id){
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'galleryImage' => 'required|mimes:jpeg,png,jpg,gif'
        ]);

        $uploadPath = 'uploads/gallery/';
        $editableData = Gallery::find($id);
        try {
            if($request->hasFile('galleryImage')){
                if(File::exists($editableData->galleryImage)){
                    File::delete($editableData->galleryImage);
                }
                $filename = $request->galleryImage->getClientOriginalExtension();
                $galleryImg = Str::random(13).'.'.$filename;
    
         
    
                // Image::make($request->galleryImage)->resize(400, 150)->save($uploadPath.$galleryImg);

                $request->galleryImage->move($uploadPath,$galleryImg);
                
                $editableData->galleryImage = $uploadPath.$galleryImg;
                $editableData->update();               
                return redirect('admin/gallery')->with('status','Gellary Added');
    
            }
        } catch (\Throwable $th) {
             return redirect()->back()->with('status','An Error Occured');
        }
    }


    public function destroy(int $id){
        $gallery = Gallery::find($id);
        if(File::exists($gallery->galleryImage)){
            File::delete($gallery->galleryImage);
        }
        $gallery->delete();
        return redirect()->back()->with('Gallery Removed');

    }
}
