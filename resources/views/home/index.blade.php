@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        
        <h4>Selamat datang, {{ auth()->user()->name }}!</h4>
        <div class="fs-6 pt-3 lh-lg">
            <p>Aplikasi ini akan memberikan beberapa tes yang harus dilakukan untuk mengukur berbagai kemampuan siswa, selain itu terdapat pembelajaran dengan materi Struktur Percabangan dan Struktur Perulangan. Untuk lebih jelasnya isi pada aplikasi ini yaitu sebagai berikut.</p>
            <ol>
                <li>Tes Gaya Belajar</li>
                <li>Tes Berpikir Logis</li>
                <li>Pretest Asesmen Adaptif</li>
                <li>Materi Pembelajaran</li>
                <li>Posttest Asesmen Adaptif</li>
                <li>Tes Berpikir Logis 2</li>
            </ol>
            <p>Untuk memulai tes, silahkan menekan tombol di bawah ini atau memilih tab tes gaya belajar di bagian sidebar.</p>
        </div>
        
        <a href="/home/styles" type="button" class="btn btn-blue">Mulai</a>
        
    </main>
@endsection