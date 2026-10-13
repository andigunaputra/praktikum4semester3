@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Konfirmasi Laporan</h1>

    <x-alert :message="$message" />

    <a href="{{ route('laporan.form') }}">Kembali ke Form</a>
    <a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
</div>
@endsection
