<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 mt-5">
            <h3 class="text-center mb-3">Form Biodata</h3>
            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif <br />
            <!-- form validasi -->
            <form action="{{ url('hasil') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="text" name="nama" type="text" class="form-control"
                            value="{{ old('nama') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Tempat Tgl Lahir</label>
                    <div class="col-8">
                        <input id="text1" name="ttl" type="text" class="form-control"
                            value="{{ old('ttl') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="radio_0" type="radio" class="custom-control-input"
                                value="Laki-laki">
                            <label for="radio_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jenis_kelamin" id="radio_1" type="radio" class="custom-control-input"
                                value="Perempuan">
                            <label for="radio_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text2" class="col-4 col-form-label">Hobi</label>
                    <div class="col-8">
                        <input id="text2" name="hobi" type="text" class="form-control"
                            value="{{ old('hobi') }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
