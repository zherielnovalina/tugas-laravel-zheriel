<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bukus = DB::table('bukus')->get();
        return view('layouts.perpustakaan.buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.perpustakaan.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode_buku' => 'required',
            'judul_buku' => 'required',
            'penulis_buku' => 'required',
            'penerbit_buku' => 'required',
            'tahun_penerbit' => 'required',
            'stok' => 'required',
            'rak_id' => 'required',
        ]);

        $query = DB::table('bukus')->insert([
            'kode_buku' => $request['kode_buku'],
            'judul_buku' => $request['judul_buku'],
            'penulis_buku' => $request['penulis_buku'],
            'penerbit_buku' => $request['penerbit_buku'],
            'tahun_penerbit' => $request['tahun_penerbit'],
            'stok' => $request['stok'],
            'rak_id' => $request['rak_id'],
        ]);

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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