@extends('layouts.main')

@section('content')
    <h2 class="mb-4">Data Pengguna</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <a href="/produk/create" class="btn btn-success mb-2">Create Produk</a>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $produk)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>{{ $produk->harga }}</td>
                        <td>{{ $produk->stok }}</td>
                        <td>{{ $produk->deskripsi }}</td>
                        <td>
                            <a href="/produk/{{ $produk->id }}" class="btn btn-info">Detail</a>
                            <a href="/produk/{{ $produk->id }}/edit" class="btn btn-primary">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $produk->id }}"
                                aria-controls="deleteModal{{ $produk->id }}"
                                aria-label="Hapus produk {{ $produk->nama_produk }}">
                                Hapus
                            </button>
                        </td>
                    </tr>

                    <div class="modal fade" id="deleteModal{{ $produk->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $produk->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $produk->id }}">Konfirmasi Penghapusan
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Tutup"></button>
                                </div>
                                <div class="modal-body" id="deleteModalDescription{{ $produk->id }}">
                                    Apakah Anda yakin ingin menghapus produk <strong>{{ $produk->nama_produk }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        aria-label="Batal">Batal</button>

                                    <!-- Formulir Penghapusan -->
                                    <form action="/produk/{{ $produk->id }}/delete" method="POST"
                                        style="display:inline;" aria-labelledby="deleteModalLabel{{ $produk->id }}"
                                        aria-describedby="deleteModalDescription{{ $produk->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            aria-label="Hapus produk {{ $produk->nama_produk }}">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
