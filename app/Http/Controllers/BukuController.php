<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::get();
        

        return response()->json($bukus);
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
            'isi' => 'required|string|max:255',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun terbit' => 'required',
        ]);
    
        $buku = Buku::create($validated);
    
        return response()->json($buku, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $buku = Buku::findOrFail($id);
    return response()->json($buku);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::findOrFail($id);
        $validated = $request->validate([
            'isi' => 'required|string|max:255',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun terbit' => 'required',
        ]);
    
        $buku->update($validated);
    
        return response()->json($buku);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::findOrFail($id);
    $buku->delete();

    return response()->json(null, 204);
    }
}
