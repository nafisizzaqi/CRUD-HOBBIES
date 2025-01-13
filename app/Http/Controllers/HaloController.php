<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function coba()
    {
        $nama = 'Joko';
        $data = ['nama' => $nama];
        return view('halo', $data);
    }
}
