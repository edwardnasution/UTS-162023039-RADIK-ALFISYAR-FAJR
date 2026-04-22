<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    // 1. Tampilkan semua produk (Read)
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // 2. Tampilkan form tambah (Create)
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kode_produk' => 'required|unique:products',
            'stok'        => 'required|integer',
            'harga'       => 'required|numeric',
        ]);

        // Simpan data
        Product::create([
            'user_id'     => Auth::id(),
            'nama_produk' => $request->nama_produk,
            'kode_produk' => $request->kode_produk,
            'stok'        => $request->stok,
            'harga'       => $request->harga,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambah');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk dihapus');
    }
}
