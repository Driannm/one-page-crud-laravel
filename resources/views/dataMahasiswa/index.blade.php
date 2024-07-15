@extends('layouts.app')

@section('title', 'Dinas Kependudukan dan Catatan Sipil')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Data Penduduk</h1>
        <a href="{{ route('dataMahasiswa.create') }}" class="btn btn-success">Tambah Data Penduduk</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    {{-- Form Pencarian --}}
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="{{ route('dataMahasiswa.search') }}">
        <div class="input-group">
            <input type="text" name="search" class="form-control bg-light border-3 small" placeholder="Cari data.." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
            <tr>
                <th style="color: black;">#</th>
                <th style="color: black;">NIK</th>
                <th style="color: black;">Nama Lengkap</th>
                <th style="color: black;">Alamat</th>
                <th style="color: black;">Nomor HP</th>
                <th style="color: black;">Ditambahkan Pada</th>
                <th style="color: black;">Diperbarui Pada</th>
                <th style="color: black;">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswa->count() > 0)
                @foreach($mahasiswa as $mh)
                    <tr>
                        <td class="align-middle" style="color: black;">{{ $mh->id }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->NIK }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->Nama_Lengkap }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->Alamat }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->No_Hp }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->created_at }}</td>
                        <td class="align-middle" style="color: black;">{{ $mh->updated_at }}</td>
                        <td class="align-middle">
                            <a href="{{ route('dataMahasiswa.show', $mh->id) }}" type="button" class="btn btn-primary">Detail</a>
                            <a href="{{ route('dataMahasiswa.edit', $mh->id)}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dataMahasiswa.destroy', $mh->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Data Penduduk Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
