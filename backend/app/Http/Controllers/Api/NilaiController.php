<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $nilai = Nilai::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$nilai,
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
                'Id_kuis' => 'required|exists:kuis,Id_kuis',
                'Id_siswa' => 'required|exists:siswas,Id_siswa',
                'Nilai' => 'required|integer',
                'Tgl_nilai' => 'required|date',
            ]);
            $nilai = Nilai::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$nilai,
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
            $nilai = Nilai::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$nilai,
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
            $nilai = Nilai::findOrFail($id);
            $validate = $request->validate([
                'Id_kuis' => 'required|exists:kuis,Id_kuis',
                'Id_siswa' => 'required|exists:siswas,Id_siswa',
                'Nilai' => 'required|integer',
                'Tgl_nilai' => 'required|date',
            ]);
            $nilai->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$nilai,
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
            $nilai = Nilai::findOrFail($id);
            $nilai->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$nilai,
            ],202);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
