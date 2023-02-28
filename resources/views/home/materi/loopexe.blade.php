@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <div>
            <div class="card" style="background-color: #3f3d56">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ps-5">
                            <p class="fs-1 pt-3 fw-bold text-white">Struktur Perulangan</p>
                            <p class="text-white fs-6">Pada materi ini, kamu akan mempelajari materi-materi perulangan seperti for, while, do-while. Materi ini digunakan untuk melakukan perulangan suatu blok kode dalam kode program.</p>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <img src="/img/materi-2.png" alt="Percabangan" width="350px" class="me-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 text-justify">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-bold mb-4">Halaman Kerja Materi Perulangan</h4>
                    </div>
                    @if (isset($data))
                        <div class="col-md-6">
                            <div class="alert alert-success" role="alert">
                                <i class="bi bi-check-circle pe-3"></i>
                                Soal sudah diisi!
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-md-9">
                    {{-- Definisi --}}
                    <div id="definisi">
                        <div class="fs-6 lh-lg mt-3 mb-5">
                            <form action="/home/materi/perulangan/exercise" method="post">
                            @csrf
                            <ol>
                                <li class="mb-5">
                                    Andi ingin menghitung jumlah semua bilangan bulat dari 3 hingga 21 dengan kelipatan 3. Buatlah sebuah program menggunakan perulangan for untuk membantu Andi menghitungnya.

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise1" id="exampleFormControlTextarea1" rows="10" required>@if (isset($data->exercise1)){{ $data->exercise1 }}@endif</textarea>
                                    </div>
                                    
                                </li>
                                <li class="mb-5">
                                    Budi ingin menghitung berapa banyak bilangan ganjil yang terdapat dalam rentang bilangan 1 hingga 20 dan mencetak setiap bilangannya. Buatlah program menggunakan perulangan while untuk membantu Budi menghitungnya.

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea2" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise2" id="exampleFormControlTextarea2" rows="10" required>@if (isset($data->exercise2)){{ $data->exercise2 }}@endif</textarea>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    Chonky ingin menginputkan beberapa bilangan bulat positif, tetapi tidak tahu berapa banyak bilangan yang ingin dimasukkan. Program harus terus meminta pengguna untuk memasukkan bilangan bulat positif sampai pengguna memasukkan angka negatif. Ketika bilangan tersebut positif maka akan menjumlahkan setiap angka yang dimasukkan, tetapi ketika bilangan tersebut negatif, maka perulangan akan berhenti. Buatlah program menggunakan perulangan do-while untuk membantu Chonky.

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea3" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise3" id="exampleFormControlTextarea3" rows="10" required>@if (isset($data->exercise3)){{ $data->exercise3 }}@endif</textarea>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    Dina ingin menampilkan pola segitiga siku-siku menggunakan bintang (*). Maka dibuatlah sebuah program yang harus meminta pengguna untuk memasukkan tinggi segitiga dan kemudian menampilkan pola yang sesuai. Buatlah program menggunakan perulangan bersarang.

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea4" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise4" id="exampleFormControlTextarea4" rows="10" required>@if (isset($data->exercise4)){{ $data->exercise4 }}@endif</textarea>
                                    </div>
                                </li>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-blue">Submit</button>
                                </div>
                            </ol>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

@endsection