@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Riwayat Donasi Terbaru</h2>
        <a href="{{ route('donasi.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Donasi Sekarang
        </a>
    </div>

    {{-- NOTIFIKASI --}}
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">

                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4">No</th>
                            <th>Donatur</th>
                            <th>Kategori</th>
                            <th>Nominal</th>
                            <th>Tanggal</th>
                            <th class="pe-4">Pesan</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($donasi as $key => $item)
                            <tr>
                                <td class="ps-4">{{ $key + 1 }}</td>

                                {{-- DONATUR --}}
                                <td>
                                    <div class="fw-bold">
                                        {{ $item->donatur->nama_donatur ?? '-' }}
                                    </div>
                                    <small class="text-muted">
                                        {{ $item->donatur->email ?? '-' }}
                                    </small>
                                </td>

                                {{-- KATEGORI --}}
                                <td>
                                    <span class="badge bg-info text-dark">
                                        {{ $item->kategori->nama_kategori ?? '-' }}
                                    </span>
                                </td>

                                {{-- NOMINAL --}}
                                <td class="fw-bold text-success">
                                    Rp {{ number_format($item->nominal, 0, ',', '.') }}
                                </td>

                                {{-- TANGGAL --}}
                                <td>
                                    {{ \Carbon\Carbon::parse($item->tanggal_donasi)->translatedFormat('d F Y') }}
                                </td>

                                {{-- PESAN --}}
                                <td class="pe-4">
                                    <small class="text-secondary fst-italic">
                                        "{{ $item->pesan ?? '-' }}"
                                    </small>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    Belum ada data donasi yang masuk.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>
    </div>

</div>
@endsection