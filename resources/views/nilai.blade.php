@php
$nama = "Yudha Rizky";
$nilai = 89.99;
@endphp
{{-- struktur kendali if --}}
@if ($nilai >= 60)
@php $ket = "Lulus"; @endphp
@else
@php $ket = "Gagal"; @endphp
@endif
Siswa {{ $nama }} dengan nilai {{ $nilai }}
dinyatakan {{ $ket }}
