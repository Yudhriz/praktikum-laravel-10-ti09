<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;
// use DB;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $kategori_produk = KategoriProduk::all();
        //perintah ini menggunakan eloquent
        // $kategori_produk = DB::table('kategori_produk')->get();
        //perintah diatas menggunakan query builder
        $produk = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk_id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->get();

        return view('admin.produk.create', compact('produk', 'kategori_produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produk = new Produk;
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     */
    public function view($id)
    {
        $produk = Produk::find($id); //select * from produk where id=1
        return view('admin.produk.view', ['produk' => $produk]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk = Produk::find($id); //select * from produk where id=1
        $kategori_produk = KategoriProduk::find($id);
        return view('admin.produk.edit', ['produk' => $produk, 'kategori_produk' => $kategori_produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $produk = new Produk;
        $id = $request->id;
        $produk = Produk::find($id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete(); //delete from produk where id=1
        return redirect('/produk');
    }
}
