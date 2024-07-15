<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at', 'DESC')->get();

        return view('dataMahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataMahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request -> validate([
            'NIK' => 'required',
            'Nama_Lengkap' => 'required',
            'Alamat' => 'required',
            'No_Hp' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('dataMahasiswa')->with('success', 'Data Penduduk berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        return view('dataMahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        return view('dataMahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        $mahasiswa->update($request->all());
  
        return redirect()->route('dataMahasiswa')->with('success', 'Data Penduduk Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
  
        $mahasiswa->delete();
  
        return redirect()->route('dataMahasiswa')->with('success', 'Data Penduduk Berhasil Dihapus!');
    }

    public function search(Request $request)
    {
        $query = $request->input('search'); // Mengambil input dari form pencarian
        $mahasiswa = Mahasiswa::where('Nama_Lengkap', 'LIKE', "%{$query}%")
                              ->orWhere('NIK', 'LIKE', "%{$query}%")
                              ->orWhere('Alamat', 'LIKE', "%{$query}%")
                              ->orWhere('No_Hp', 'LIKE', "%{$query}%")
                              ->orderBy('created_at', 'DESC')
                              ->get();

        return view('dataMahasiswa.index', compact('mahasiswa'));
    }

}
