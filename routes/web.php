<?php

use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\ProfileController;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

//  admin routes
require __DIR__.'/admin.php';

// auth routs
require __DIR__.'/auth.php';
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $galleries = Gallery::all();
    return view('front.home',compact('galleries'));
});



//profile 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.view');
    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); 
    Route::post('/upload-profile', [ProfileController::class, 'uploadProfile']);
});
Route::post('/test-req', [ProfileController::class, 'test']);


//front controller
Route::controller(FrontController::class)->group(function () {
    Route::get('/search', 'result');
    Route::post('/search', 'search');

    Route::get('/searchplatelets', 'searchredirect');
    Route::post('/searchplatelets', 'platelets');
    // Route::get(md5('/edit-profile'), 'editInfo')->name('edit-profile');
    Route::get('/about','about');
    Route::get('/blood-donors','bloodDonors');
   
});





