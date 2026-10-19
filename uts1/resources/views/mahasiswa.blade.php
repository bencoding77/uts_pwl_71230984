@extends('main.parent')
@section('title', 'Form Mahasiswa')
@section('article')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 text-center">
                      <h3 class="mb-3">Form Mahasiswa</h3>
                        <form action="/proses-post" method="POST">
                            @csrf
                            <label>NIM</label>
                            <input type="number" name="nim" placeholder="Masukkan NIM" required>
                            <br>
                            <label>Nama</label>
                            <input type="text" name="nama" placeholder="Masukkan Nama" required>
                            <br>
                            <button type="submit">Kirim</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection