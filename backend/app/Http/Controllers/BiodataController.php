<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    //
    public function index()
    {
        $biodata = biodata::all();
        return view('tabel', compact('biodata'));

    }

    public function store(Request $request)
    {
        $biodata = new Biodata();
        $biodata->nama = $request->nama;
        $biodata->alamat = $request->alamat;
        $biodata->save();
        return redirect()->back();

    }
}
