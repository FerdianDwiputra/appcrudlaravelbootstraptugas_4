@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Read Produk</h2>

    <a href="/produk" class="btn btn-primary mb-4">Kembali</a>

    <table class="table table-striped table-bordered">
        <tr>
            <th>Nama Produk</th>
            <td>{{ $produk->nama_produk }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>{{ $produk->harga }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $produk->stok }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $produk->deskripsi }}</td>
        </tr>
        <tr>
            <th>Dibuat pada</th>
            <td>{{ $produk->created_at }}</td>
        </tr>
    </table>
@endsection
