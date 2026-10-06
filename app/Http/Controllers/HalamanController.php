<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    //
    public function halamanUtama()
    {
        return view('utama');
    }

    public function beranda()
    {
        return view('beranda');
    }

    public function contact()
    {
        return view('contact');
    }
}
