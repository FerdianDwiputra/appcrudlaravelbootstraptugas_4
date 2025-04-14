@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Update Produk</h2>

    <a href="/produk" class="btn btn-success mb-4">Kembali</a>

    <form class="row g-3" action="/produk/{{ $produk->id }}/update" method="POST">
        @csrf
        @method('PUT')

        <div class="col-12">
            <label for="inputnama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="inputnama"
                value="{{ old('nama_produk', $produk->nama_produk) }}" name="nama_produk">
            @error('nama_produk')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputharga" class="form-label">Harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="inputharga"
                value="{{ old('harga', $produk->harga) }}" name="harga">
            @error('harga')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="inputstok" class="form-label">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="inputstok"
                value="{{ old('stok', $produk->stok) }}" name="stok">
            @error('stok')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="inputdeskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="inputdeskripsi"
                value="{{ old('deskripsi', $produk->deskripsi) }}" name="deskripsi">
            @error('deskripsi')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
