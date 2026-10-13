@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Laporan Banjir</h1>
    <p>Silakan isi data laporan banjir dengan lengkap dan benar.</p>

    {{-- Menampilkan pesan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Data belum valid!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form laporan banjir --}}
    <form action="{{ route('laporan.konfirmasi') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_pelapor">Nama Pelapor</label>
            <input
                type="text"
                id="nama_pelapor"
                name="nama_pelapor"
                value="{{ old('nama_pelapor') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="lokasi">Lokasi Banjir</label>
            <input
                type="text"
                id="lokasi"
                name="lokasi"
                value="{{ old('lokasi') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
            <input
                type="number"
                id="tinggi_genangan"
                name="tinggi_genangan"
                min="10"
                max="150"
                value="{{ old('tinggi_genangan') }}"
                required
            >
        </div>

        <div class="mb-3">
            <label for="tanggal_kejadian">Tanggal Kejadian</label>
            <input
                type="date"
                id="tanggal_kejadian"
                name="tanggal_kejadian"
                value="{{ old('tanggal_kejadian') }}"
                required
            >
        </div>

        <button type="submit">Kirim Laporan</button>
    </form>
</div>
@endsection
