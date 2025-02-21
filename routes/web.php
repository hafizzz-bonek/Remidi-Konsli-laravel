<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;


Route::get('/', function () {
    return view('welcome');
});

// route ::get('/blog', function (){
//     // ambil data dari database
//     $profile = 'aku anak rpl';
//     return view ('blog',['data' => $profile]);
// })->name('blog');

route::get('/blog', [Blogcontroller::class, 'index']);

// route::view('/blog','blog', ['data' => 'sholeh']);


route::get('/blog/{id}', function (request $request) {
    // $name = $request->name;
    // $password = $request->password;
    // anggap aja melakukan update data
    return redirect()->router('blog');
    // return 'ini adalah blog '.$request->id;
});