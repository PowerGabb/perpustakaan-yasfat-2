@extends('layouts.second')
@section('title', 'Aturan Pinjam')
@section('content')
    <div class="container contents">
        <div class="row">
            <div class="col-12 col">
                <div class="card">
                    <div class="card-header">
                        <h3>Peraturan Peminjaman Buku {{ date('Y') }}</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="mb-4">Dengan Meminjam Buku <span class="text-primary">{{ $data->title }}</span> Maka
                            Kamu Setuju:</h3>
                        <ol class=" mb-4">

                            <li>Menjaga Kondisi Buku</li>
                            <li>Mengembalikan Buku Kurang Dari 7 Hari Setelah Di Pinjam</li>
                            <li>Mengembalikan Buku Kepada Penjaga Perpus</li>
                            <li>Menjaga Kondisi Perpustakaan</li>
                            <li>Mengganti Buku Apabila Hilang</li>


                        </ol>

                        <p class="text-danger">Setelah Kamu Menyetujui, Maka Tunggu Hingga Status Peminjaman Berubah</p>
                        <a href="/pinjam/buku/{{ $data->id }}/sekarang" class="btn btn-primary">Pinjam Sekarang</a>
                        <a href="/" class="btn btn-danger">Batalkan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
