<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Beranda_C extends Controller

{
    public function berandaBackend()
    {
        return view('backend.v_beranda.index', [
            'judul' => 'Halaman Beranda',
        ]);        
    }
}