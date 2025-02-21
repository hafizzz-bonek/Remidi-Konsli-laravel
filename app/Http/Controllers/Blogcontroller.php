<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    function index()
    {
        // $a = 1;
        // $b = 3;
        // $c = $a + $b;
        // return 'hasil dari $c adalah '.$c;
        return view('blog', ['data' => 'belajar9i']);
    }
}
