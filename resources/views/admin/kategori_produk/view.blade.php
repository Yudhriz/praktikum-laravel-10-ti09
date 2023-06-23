@extends('admin.layout.appadmin')
@section('content')
    <h1>Data Kategori Produk ID: #{{ $kategori_produk->id }}</h1>
    <table class="table table-striped mt-4">
        <tbody>
            <tr>
                <td>ID</td>
                <td>{{ $kategori_produk->id }}</td>
            </tr>
            <tr>
                <td>Nama Kategori Kategori_produk</td>
                <td>{{ $kategori_produk->nama }}</td>
            </tr>
        </tbody>
    </table>
@endsection
