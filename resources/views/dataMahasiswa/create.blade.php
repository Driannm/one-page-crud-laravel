@extends('layouts.app')
  
@section('title', 'Input Data')
  
@section('contents')
    <h1 class="mb-0">Data Penduduk Baru</h1>
    <hr />
    <form action="{{ route('dataMahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NIK" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="Nama_Lengkap" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="Alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="col">
                <input type="text" name="No_Hp" class="form-control" placeholder="Nomor Hp">
            </div>
        </div>

        <div class="mt-5 text-left">
        <button id="btn" class="btn btn-success" type="submit">Simpan Data</button>
        <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection