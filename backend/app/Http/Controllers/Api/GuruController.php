<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $guru = Guru::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$guru,
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
                'Email' => 'required|email|unique:gurus',
                'Password' => 'required|integer|max:11',
                'Nama_guru' => 'required|string|max:255',
                'Bidang_studi' => 'required|string|max:255',
            ]);
            $guru = Guru::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$guru,
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
            $guru = Guru::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$guru,
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
            $guru = Guru::findOrFail($id);
            $validate = $request->validate([
                'Email' => 'required|email|unique:gurus',
                'Password' => 'required|integer|max:11',
                'Nama_guru' => 'required|string|max:255',
                'Bidang_studi' => 'required|string|max:255',
            ]);
            $guru->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$guru,
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
            $guru = Guru::findOrFail($id);
            $guru->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$guru,
            ],202);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
