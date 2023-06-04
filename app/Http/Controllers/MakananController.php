<?php

namespace App\Http\Controllers;
use App\Models\Makanan;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function tampil()
    {
        $makanan = Makanan::all();
        
        //cek database
        //dd($makanan);

        return view('welcome', ['makanan' => $makanan]);
    }
}
