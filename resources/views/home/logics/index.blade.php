@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($logics)
            <div class="fs-6 lh-lg text-justify me-4">
                <p>
                    Setelah melakukan tes gaya belajar, selanjutnya Anda akan mengerjakan tes berpikir logis untuk mengetahui tingkat logika Anda. Mungkin sebelumnya Anda belum mengetahui hal ini, maka dari itu dengan tes ini Anda akan mengetahuinya. Tes ini dibuat berdasarkan tes berpikir logis umum yang digabungkan dengan materi Pemrograman Dasar, khususnya Struktur Percabangan dan Struktur Perulangan. Hasil tes ini dapat dibagikan kepada guru, orang tua, pembimbing, dan fasilitator komunitas lainnya.
                </p>
                <p>
                    Tes ini berisi soal-soal kasus yang berjumlah 10 soal, soal ini dikerjakan dengan membuat kode program sederhana menggunakan bahasa C dan dituliskan pada bagian jawaban. Kode tersebut harus menghasilkan program seperti yang ditampilkan pada soal. Untuk memulai tes silahkan menekan tombol di bawah ini atau bisa juga dengan memilih melalui tombol pada bagian sidebar.
                </p>
            </div>
            
            <a href="/home/logics/begin" type="button" class="btn btn-blue">Mulai Tes Berpikir Logis</a>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/logics/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection