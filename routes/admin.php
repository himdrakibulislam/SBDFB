<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','isAdmin'])->prefix('admin')->group(function(){


    Route::get('/dashboard',[AdminController::class,'index']);

    // user
    Route::controller(UserController::class)->group(function () {
        Route::get('/all-admins', 'admin');
        Route::get('/users', 'index');
        Route::get('/user/logged', 'logged');
        Route::get('/user/{id}', 'viewUser');
        Route::post('/user/add-admin/{id}', 'makeAdmin');
        Route::post('/user/remove-admin/{id}', 'removeAdmin');      
        Route::get('/search-user', 'searchredirect');       
        Route::post('/search-user', 'searchuser');       
        Route::get('/edit-password/{id}', 'editPassword');
        Route::post('/update-password/{id}', 'updatePass');
        Route::get('/platelets-donors', 'plateletsDonors');
        Route::get('/blood-donors', 'bloodDonors');


        //delete user 
        Route::delete('/user/delete/{id}','destroy');
    });

    //gallery
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/gallery','index');
        Route::get('/add-gallery','add');
        Route::post('/add-gallery','store');
        Route::get('/edit-gallery/{id}','edit');
        Route::put('/update-gallery/{id}','update');
        Route::delete('/delete-gallery/{id}','destroy');
    }); 
    

});
