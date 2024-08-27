<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penuliss = Penulis::get();

        return response()->json($penuliss);
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
        $validated = $request->validate([
            'nama' => 'required',
            'tahun lahir' => 'required',
        ]);
    
        $penuliss = Penulis::create($validated);
    
        return response()->json($penuliss, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penuliss = Penulis::findOrFail($id);
    return response()->json($penuliss);
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
