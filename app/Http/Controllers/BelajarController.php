<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function store(Request $request)
    {
        $nama = "saya";
        return view('belajar',compact('nama'));
    }
}
