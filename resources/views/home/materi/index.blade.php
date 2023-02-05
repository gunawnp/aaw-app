@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <p class="fs-3 fw-bold text-center mb-4">Pilih Materi Pembelajaran</p>
        <div class="row mb-4 d-flex justify-content-center">
            <div class="col-md-5 mx-2">
                <div class="card mx-auto" style="width: 25rem; border-radius: 5%;">
                    <img src="/img/materi-1.png" class="card-img-top" alt="Percabangan" style="border-top-left-radius: 5%; border-top-right-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Materi Percabangan</h5>
                        <p class="card-text mb-0 text-muted" style="font-size: 15px;">Pada materi ini, kamu akan mempelajari materi-materi percabangan seperti if, if else, dan switch. Materi ini digunakan untuk memahami kondisi pada suatu kasus yang dituangkan dalam kode program.</p>
                        <a href="/home/materi/percabangan" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mx-2">
                <div class="card mx-auto" style="width: 25rem; border-radius: 5%;">
                    <img src="/img/materi-2.png" class="card-img-top" alt="Percabangan" style="border-top-left-radius: 5%; border-top-right-radius: 5%;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Materi Perulangan</h5>
                        <p class="card-text mb-0 text-muted" style="font-size: 15px;">Pada materi ini, kamu akan mempelajari materi-materi perulangan seperti for, while, do-while. Materi ini digunakan untuk melakukan perulangan suatu blok kode dalam kode program.</p>
                        <a href="/home/materi/perulangan" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection