@extends('layouts.app')
  
@section('title', 'Edit Data')
  
@section('contents')
    <h1 class="mb-0">Edit Data Penduduk</h1>
    <hr />
    <form action="{{ route('dataMahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIK</label>
                <input type="text" name="NIK" class="form-control" placeholder="NIK" value="{{ $mahasiswa->NIK }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" name="Nama_Lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->Nama_Lengkap }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="{{ $mahasiswa->Alamat }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Nomor Hp</label>
                <input type="text" name="No_Hp" class="form-control" placeholder="Nomor Hp" value="{{ $mahasiswa->No_Hp }}">
            </div>
        </div>
        <div class="mt-3 text-left">
            <button type="submit" class="btn btn-info">Perbarui</button>
            <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary ml-3">Kembali</a>
        </div>
    </form>
@endsection
