<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index($id, $id1) 
    {
        // dd($id + $id1);
        return redirect()->route('create');
    }

    public function create() 
    {
        return view('create');
    }

    public function store(Request $request) 
    {
        dd($request->all());
    }

    public function tes($nama, $ttl)
    {
        dd($nama.$ttl);
    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}
