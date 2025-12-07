<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{ 
            $kelas = Kelas::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$kelas,
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try{
            $validate = $request->validate([
                'Id_guru' => 'required|exists:gurus,Id_guru',
                'Nama_kelas' => 'required|string|max:255',
                'Kode_kelas' => 'required|string|max:255',
                'Deskripsi' => 'required|text|max:255',
                'Tgl_buat' => 'required|date',
            ]);
            $kelas = Kelas::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$kelas,
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        try{
            $kelas = Kelas::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$kelas,
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        try{
            $kelas = Kelas::findOrFail($id);
            $validate = $request->validate([
                'Id_guru' => 'required|exists:gurus,Id_guru',
                'Nama_kelas' => 'required|string|max:255',
                'Kode_kelas' => 'required|string|max:255',
                'Deskripsi' => 'required|text|max:255',
                'Tgl_buat' => 'required|date',
            ]);
            $kelas->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$kelas,
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $kelas = Kelas::findOrFail($id);
            $kelas->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$kelas,
            ],202);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
