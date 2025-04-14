@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Create Produk</h2>

    <a href="/produk" class="btn btn-primary mb-4">Kembali</a>

    <form class="row g-3" action="/produk/proses" method="POST">
        @csrf
        <div class="col-12">
            <label for="inputnama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="inputnama"
                placeholder="Nama Produk" name="nama_produk">
        </div>
        <div class="col-md-6">
            <label for="inputharga" class="form-label">harga</label>
            <input type="number" class="form-control @error('harga') is-invalid @enderror" id="inputharga"
                placeholder="5000" name="harga">
        </div>
        <div class="col-md-6">
            <label for="inputstok" class="form-label">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="inputstok" placeholder="15"
                name="stok">
        </div>
        <div class="col-12">
            <label for="inputdeskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="inputdeskripsi"
                placeholder="Bagus banget" name="deskripsi">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
