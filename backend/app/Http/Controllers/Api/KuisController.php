<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kuis;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $kuis = Kuis::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$kuis,
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
                'Id_materi' => 'required|exists:materis,Id_materi',
                'Pertanyaan' => 'required|string|max:255',
                'Jawaban' => 'required|string|max:255',
            ]);
            $kuis = Kuis::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$kuis,
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
            $kuis = Kuis::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$kuis,
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
            $kuis = Kuis::findOrFail($id);
            $validate = $request->validate([
                'Id_materi' => 'required|exists:materis,Id_materi',
                'Pertanyaan' => 'required|string|max:255',
                'Jawaban' => 'required|string|max:255',
            ]);
            $kuis->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$kuis,
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
            $kuis = Kuis::findOrFail($id);
            $kuis->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$kuis,
            ],202);
           
        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
