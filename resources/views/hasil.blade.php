<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<body>

<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6">
<div class="card mt-5">
<div class="card-body">
<table class="table table-bordered table-striped">
    <tr>
        <td style="width:150px">Nama</td>
        <td>{{ $data->nama }}</td>
    </tr>
    <tr>
        <td>Tempat Tanggal Lahir</td>
        <td>{{ $data->ttl }}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>{{ $data->jenis_kelamin}}</td>
    </tr>
    <tr>
        <td>hobi</td>
        <td>{{ $data->hobi }}</td>
    </tr>
    </div>
                    </div>
                </div>
            </div>
        </div>

</table>
