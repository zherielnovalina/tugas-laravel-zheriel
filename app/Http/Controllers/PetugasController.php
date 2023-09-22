<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $petugass = DB::table('petugass')->get();
        return view('layouts.perpustakaan.petugas.index', compact('petugass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.perpustakaan.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required',
            'alamat_petugas' => 'required',
        ]);

        $query = DB::table('petugass')->insert([
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'no_telp_petugas' => $request['no_telp_petugas'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect('/petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $petugass = DB::table('petugass')->where('id' , $id)->get();
        return view('layouts.perpustakaan.petugas.show' , compact('petugass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $petugass = DB::table('petugass')->where('id' , $id)->get();
        return view('layouts.perpustakaan.petugas.edit' , compact('petugass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'no_telp_petugas' => 'required|max:13',
            'alamat_petugas' => 'required|min:20',
        ]);

        $query = DB::table('petugass')->where('id' , $id)->update([ 
            'nama_petugas' => $request['nama_petugas'],
            'jabatan_petugas' => $request['jabatan_petugas'],
            'no_telp_petugas' => $request['no_telp_petugas'],
            'alamat_petugas' => $request['alamat_petugas'],
        ]);

        return redirect()->route('petugas.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('petugass')->where('id', $id)->delete();
        return redirect()->route('petugas.index');
    }
}