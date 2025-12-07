<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $admin = Admin::all();
            return response()->json([
                'type'=>'succes',
                'data'=>$admin,
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
                'Username' => 'required|string|max:255',
                'Password' => 'required|string|max:255',
            ]);
            $admin = Admin::create($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$admin,
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
            $admin = Admin::findOrFail($id);
            return response()->json([
                'type'=>'succes',
                'data'=>$admin,
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
            $admin = Admin::findOrFail($id);
            $validate = $request->validate([
                'Username' => 'required|string|max:255',
                'Password' => 'required|string|max:255',
            ]);
            $admin->update($validate);
            return response()->json([
                'type'=>'succes',
                'data'=>$admin,
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
            $admin = Admin::findOrFail($id);
            $admin->delete();
            return response()->json([
                'type'=>'succes',
                'data'=>$admin,
            ],201);

        }catch(\Exception $e){
            return response()->json([
                'message'=>$e->getMessage(),
                'data'=>null
            ],401);
        }
    }
}
