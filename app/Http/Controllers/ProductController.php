<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'stock' => 'required|numeric',
        ]);

        // Remove commas from the price string
        $price = str_replace(',', '', $request->price);

        Product::create([
            'product_name' => $request->product_name,
            'description' => $request->description,
            'price' => intval($price),
            'stock' => $request->stock
            ]);
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
                // Mengambil data produk yang akan diedit
                $product = Product::findOrFail($id);

                // Menampilkan view edit dengan data produk yang akan diedit
                return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
                // Validasi data yang diterima dari formulir
                $request->validate([
                    'product_name' => 'required|string',
                    'description' => 'required|string',
                    'price' => 'required|string',
                    'stock' => 'required|numeric',
                ]);
        
                // Mengambil data produk yang akan diedit
                $product = Product::findOrFail($id);
        
                // Menghapus koma dari string harga
                $price = str_replace(',', '', $request->price);
        
                // Memperbarui data produk
                $product->update([
                    'product_name' => $request->product_name,
                    'description' => $request->description,
                    'price' => intval($price),
                    'stock' => $request->stock
                ]);
        
                // Redirect ke halaman index produk dengan pesan sukses
                return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan data produk yang akan dihapus
        $product = Product::findOrFail($id);

        // Hapus data produk dari database
        $product->delete();

        // Redirect ke halaman index produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
