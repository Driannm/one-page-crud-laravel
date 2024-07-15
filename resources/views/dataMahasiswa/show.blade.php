@extends('layouts.app')
  
@section('title', 'Detail Data')
  
@section('contents')
    <h1 class="mb-0">Detail Data Penduduk</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="NIK" class="form-control" placeholder="NIK" value="{{ $mahasiswa->NIK }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="Nama Lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $mahasiswa->Nama_Lengkap }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="{{ $mahasiswa->Alamat }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nomor Hp</label>
            <input type="text" name="No_Hp" class="form-control" placeholder="Nomor Hp" value="{{ $mahasiswa->No_Hp }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mahasiswa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mahasiswa->updated_at }}" readonly>
        </div>
    </div>
    <div class="mt-3 text-left">
        <a href="{{ route('dataMahasiswa') }}" id="btn-kembali" class="btn btn-secondary">Kembali</a>
    </div>
@endsection