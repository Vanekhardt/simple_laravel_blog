<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;




Route::get('/', function () {
    return view('welcome');
});

//1-define the route that can the user access the page
//2-define the controller that render the html page
//3-built the html page and put some static data to show use how can the data represents
 Route::get('/blog',[BlogController::class,'Action'])->name("home");
 Route::get('/blog/create',[BlogController::class,'create'])->name("create");
 

 Route::post('/blog',[BlogController::class,'store'])->name("store");
 Route::get('/blog/edit/{post}',[BlogController::class,"edit"])->name("edit");
 Route::put('/blog/{post}',[BlogController::class,"editpost"])->name("editpost");
 Route::get('/blog/{post}',[BlogController::class,'PostDetail'])->name("post.detail");
 Route::delete('/blog/delete/{post}',[BlogController::class,"delete"])->name("post.delete");