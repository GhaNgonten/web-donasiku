@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">

                <div class="card-header bg-white py-3">
                    <h5 class="mb-0 fw-bold text-success">Lengkapi Form Donasi</h5>
                </div>

                <div class="card-body p-4">

                    {{-- ERROR GLOBAL --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('donasi.store') }}" method="POST">
                        @csrf

                        {{-- DATA DONATUR --}}
                        <h6 class="text-muted mb-3 fw-bold text-uppercase" style="font-size: 0.8rem;">
                            Informasi Donatur
                        </h6>

                        {{-- Nama --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_donatur"
                                   class="form-control @error('nama_donatur') is-invalid @enderror"
                                   value="{{ old('nama_donatur') }}"
                                   placeholder="Contoh: Budi Sudarsono" required>

                            @error('nama_donatur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}"
                                       placeholder="nama@email.com" required>

                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- No HP --}}
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Nomor WhatsApp</label>
                                <input type="text" name="no_hp"
                                       class="form-control @error('no_hp') is-invalid @enderror"
                                       value="{{ old('no_hp') }}"
                                       placeholder="0812xxxx" required>

                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">

                        {{-- DATA DONASI --}}
                        <h6 class="text-muted mb-3 fw-bold text-uppercase" style="font-size: 0.8rem;">
                            Detail Donasi
                        </h6>

                        {{-- Kategori --}}
                        <div class="mb-3">
                            <label class="form-label">Pilih Kategori Donasi</label>
                            <select name="kategori_id"
                                    class="form-select @error('kategori_id') is-invalid @enderror"
                                    required>
                                <option value="">-- Pilih Kategori --</option>
                                @foreach($categories as $item)
                                    <option value="{{ $item->id }}"
                                        {{ old('kategori_id') == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama_kategori }}
                                    </option>
                                @endforeach
                            </select>

                            @error('kategori_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Nominal --}}
                        <div class="mb-3">
                            <label class="form-label">Nominal Donasi (Rp)</label>
                            <input type="number" name="nominal"
                                   class="form-control @error('nominal') is-invalid @enderror"
                                   value="{{ old('nominal') }}"
                                   min="1"
                                   placeholder="Contoh: 50000" required>

                            @error('nominal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Pesan --}}
                        <div class="mb-3">
                            <label class="form-label">Pesan / Doa (Opsional)</label>
                            <textarea name="pesan"
                                      class="form-control @error('pesan') is-invalid @enderror"
                                      rows="3"
                                      placeholder="Tuliskan doa atau pesan...">{{ old('pesan') }}</textarea>

                            @error('pesan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- BUTTON --}}
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success btn-lg">
                                Kirim Donasi
                            </button>
                            <a href="{{ route('home') }}" class="btn btn-light">
                                Batal
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection