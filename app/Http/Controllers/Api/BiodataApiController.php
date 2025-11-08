<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\biodata;

class BiodataApiController extends Controller
{
    //
     //
     public function index()
     {
         $biodata = biodata::all();
         return response()->json($biodata);
 
     }
 
     public function store(Request $request)
     {
         $biodata = biodata::create([
         'nama' => $request->nama,
         'alamat' => $request->alamat
         ]);

         return response()->json([
            'message'=> 'Data berhasil disimpan',
            'data'=> $biodata
         ]);
 
     }
}
