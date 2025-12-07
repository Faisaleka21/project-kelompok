<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $laporan = Laporan::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$laporan,
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
                'Id_siswa' => 'required|exists:siswas,Id_siswa',
                'Total_materi' => 'required|integer',
                'Total_kuis' => 'required|integer',
                'Rata_nilai' => 'required|float',
                'Tgl_laporan' => 'required|date',
            ]);
            $laporan = Laporan::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$laporan,
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
            $laporan = Laporan::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$laporan,
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
            $laporan = Laporan::findOrFail($id);
            $validate = $request->validate([
                'Id_siswa' => 'required|exists:siswas,Id_siswa',
                'Total_materi' => 'required|integer',
                'Total_kuis' => 'required|integer',
                'Rata_nilai' => 'required|float',
                'Tgl_laporan' => 'required|date',
            ]);
            $laporan->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$laporan,
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
            $laporan = Laporan::findOrFail($id);
            $laporan->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$laporan,
            ],202);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
