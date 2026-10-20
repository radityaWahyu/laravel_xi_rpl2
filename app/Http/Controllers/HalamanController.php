<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function tampilForm()
    {
        return view('halaman_form');
    }

    public function kirimData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return "berhasil memasukkan data";
    }
}
