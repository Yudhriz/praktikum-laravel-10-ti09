@extends('admin.layout.appadmin')
@section('content')
    {{-- <h1>Form Input Produk</h1> --}}
    <form class="mt-4" method="POST" action="{{ url('produk/update') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group row mb-2">
            <input type="hidden" name="id" value="{{ $produk->id }}">
            <label for="text1" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <input id="text1" name="kode" type="text" class="form-control" value="{{ $produk->kode }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="text" class="col-4 col-form-label">Nama Produk</label>
            <div class="col-8">
                <input id="text" name="nama" type="text" class="form-control" value="{{ $produk->nama }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="text2" class="col-4 col-form-label">Harga Jual</label>
            <div class="col-8">
                <input id="text2" name="harga_jual" type="text" class="form-control"
                    value="{{ $produk->harga_jual }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="text3" class="col-4 col-form-label">Harga Beli</label>
            <div class="col-8">
                <input id="text3" name="harga_beli" type="text" class="form-control"
                    value="{{ $produk->harga_beli }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="text4" class="col-4 col-form-label">Stok</label>
            <div class="col-8">
                <input id="text4" name="stok" type="text" class="form-control" value="{{ $produk->stok }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="text4" class="col-4 col-form-label">Minimal Stok</label>
            <div class="col-8">
                <input id="text4" name="min_stok" type="text" class="form-control" value="{{ $produk->min_stok }}">
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="textarea" class="col-4 col-form-label">Deskripsi</label>
            <div class="col-8">
                <textarea id="textarea" name="deskripsi" cols="40" rows="5" class="form-control">{{ $produk->deskripsi }}</textarea>
            </div>
        </div>
        <div class="form-group row mb-2">
            <label for="select" class="col-4 col-form-label">Kategori Produk</label>
            <div class="col-8">
                <select id="select" name="kategori_produk_id" class="custom-select form-select">
                    <option value="{{ $produk->kategori_produk_id }}">{{ $produk->kategori_produk_id }} -
                        {{ $produk->kategori_produk->nama }}</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-2">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
