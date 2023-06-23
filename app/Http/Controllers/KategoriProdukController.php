<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB;


class KategoriProdukController extends Controller
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
        $kategori_produk = DB::table('kategori_produk')
            ->select('kategori_produk.*')
            ->get();
        return view('admin.kategori_produk.kategori_produk', compact('kategori_produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->get();

        return view('admin.kategori_produk.create', compact('produk', 'kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori_produk = new KategoriProduk;
        $kategori_produk->nama = $request->nama;
        $kategori_produk->save();
        return redirect('kategori_produk');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $kategori_produk = KategoriProduk::find($id); //select * from kategori_produk where id=1
        return view('admin.kategori_produk.view', ['kategori_produk' => $kategori_produk]);
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
