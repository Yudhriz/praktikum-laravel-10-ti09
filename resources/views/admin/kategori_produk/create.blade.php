@extends('admin.layout.appadmin')
@section('content')

{{-- <h1 >Form Input Produk</h1> --}}
<form class="mt-4" method="POST" action="{{url('kategori_produk/store')}}" enctype="multipart/form-data" >
{{ csrf_field() }}
  <div class="form-group row mb-2">
    <label for="text" class="col-4 col-form-label">Nama Kategori Produk</label>
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row mb-2">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection
