<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('karyawan.index')->with([
            'karyawan' => Karyawan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required|min:3',
            'nik' => 'required|min:3|max:7',
            'alamat' => 'required|min:3',
            'jabatan' => 'required|min:3',
            'gaji' => 'required|min:3',
        ]);

        $karyawan = new Karyawan;
        $karyawan -> nama = $request ->nama;
        $karyawan -> nik = $request ->nik;
        $karyawan -> alamat = $request ->alamat;
        $karyawan -> jabatan = $request ->jabatan;
        $karyawan -> gaji = $request ->gaji;
        $karyawan ->save();

        return to_route('karyawan.index')->with('success','Data Berhasil di tambahkan');
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
    public function edit($id)
    {
        //
        return view('karyawan.edit')->with([
            'karyawan' => Karyawan::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan -> nama = $request ->nama;
        $karyawan -> nik = $request ->nik;
        $karyawan -> alamat = $request ->alamat;
        $karyawan -> jabatan = $request ->jabatan;
        $karyawan -> gaji = $request ->gaji;
        $karyawan ->save();

        return to_route('karyawan.index')->with('success','Data Berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $karyawan = Karyawan::find($id);
        $karyawan -> delete();

        return back()->with('Success', 'Data berhasil dihapus!');
    }
}
