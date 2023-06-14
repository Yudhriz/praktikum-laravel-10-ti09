<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
// use DB;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kategori_produk = KategoriProduk::all();

        // $produk = DB::table('produk')
        //     ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
        //     ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        //     ->get();
        $pesanan = DB::table('pesanan')
            ->select('pesanan.*')
            ->get();
        return view('admin.pesanan.pesanan', compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
