@extends('admin.layout.appadmin')
@section('content')
    <h1>Data Produk ID: #{{ $produk->id }}</h1>
    <table class="table table-striped mt-4">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $produk->id }}</td>
            </tr>
            <tr>
                <td>Kode Produk</td>
                <td>{{ $produk->kode }}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $produk->nama }}</td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>{{ $produk->harga_jual }}</td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>{{ $produk->harga_beli }}</td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>{{ $produk->stok }}</td>
            </tr>
            <tr>
                <td>Min Stok</td>
                <td>{{ $produk->min_stok }}</td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>{{ $produk->deskripsi }}</td>
            </tr>
            <tr>
                <td>Kategori Produk ID</td>
                <td>{{ $produk->kategori_produk_id }} - {{ $produk->kategori_produk->nama }}</td>
            </tr>
        </tbody>
    </table>
@endsection
