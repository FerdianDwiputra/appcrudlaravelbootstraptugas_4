<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('products.beranda', [
            'products' => Produk::all()
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function proses(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk'   => 'required|min:2',
            'harga'         => 'required|numeric',
            'stok'          => 'required|numeric',
            'deskripsi'     => 'required|min:10',
            ]);

        $simpan = Produk::create($validatedData);

        if ($simpan == false) {
            return redirect('/produk')->with('error', 'Produk gagal disimpan');
        }
        return redirect('/produk')->with('success', 'Produk berhasil disimpan');
    }

    public function read($id)
    {
        return view('products.read', [
            'produk' => Produk::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('products.update', [
            'produk' => Produk::find($id)
        ]);
    }

    public function update(Request $request, $id)
{
    // Validate incoming data
    $validatedData = $request->validate([
        'nama_produk'   => 'required|min:2',
        'harga'         => 'required|numeric',
        'stok'          => 'required|numeric',
        'deskripsi'     => 'required|min:10',
    ]);

    // Attempt to update the product
    $produk = Produk::find($id);

    if (!$produk) {
        return redirect('/produk')->with('error', 'Produk tidak ditemukan');
    }

    $produk->update($validatedData);

    // Return success message
    return redirect('/produk')->with('success', 'Produk berhasil diubah');
}


    public function delete($id)
    {
        Produk::destroy($id);

        if (Produk::destroy($id) == false) {
            return redirect('/produk')->with('error', 'Produk gagal dihapus');
        }
        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }
}
