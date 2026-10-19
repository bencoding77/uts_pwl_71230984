@extends('main.parent')
@section('title', 'Hasil Pengiriman Data')
@section('article')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 text-center">
        <h3 class="mb-3">Hasil Pengiriman Data ({{ $metode }})</h3>
        <table border="1" cellpadding="5">
            <tr>
                <th colspan="2">Data Yang Dikirim</th>
            </tr>
            <tr>
                <td>NIM</td>
                <td>{{ $nim }}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $nama }}</td>
            </tr>
                <td>Metode</td>
                <td>{{ $metode }}</td>
            </tr>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
 
 
