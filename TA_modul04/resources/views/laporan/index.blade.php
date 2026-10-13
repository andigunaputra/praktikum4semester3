@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Banjir</h1>

    <a href="{{ route('laporan.form') }}">Buat Laporan</a>

    @forelse ($laporan as $item)
        @include('partials.laporan-card', [
            'laporan' => $item
        ])
    @empty
        <p>Belum ada laporan banjir.</p>
    @endforelse
@endsection
