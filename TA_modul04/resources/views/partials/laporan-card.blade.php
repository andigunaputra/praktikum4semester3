<div class="laporan-card">
    <h3>{{ $laporan->nama_pelapor }}</h3>

    <p>Lokasi: {{ $laporan->lokasi }}</p>

    <p>
        Tinggi Genangan:
        {{ $laporan->tinggi_genangan }} cm
    </p>

    <p>
        Tanggal Kejadian:
        {{ $laporan->tanggal_kejadian }}
    </p>

    @if ($laporan->tinggi_genangan < 30)
        <span>Waspada</span>
    @elseif ($laporan->tinggi_genangan <= 70)
        <span>Siaga</span>
    @else
        <span>Awas</span>
    @endif
</div>
