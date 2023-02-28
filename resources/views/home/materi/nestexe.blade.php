@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <div>
            <div class="card bg-blue ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ps-5">
                            <p class="fs-1 pt-3 fw-bold text-white">Struktur Percabangan</p>
                            <p class="text-white fs-6">Pada materi ini, kamu akan mempelajari materi-materi percabangan seperti if, if else, dan switch. Materi ini digunakan untuk memahami kondisi pada suatu kasus yang dituangkan dalam kode program.</p>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <img src="/img/materi-1.png" alt="Percabangan" width="350px" class="me-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 text-justify">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-bold mb-4">Halaman Kerja Materi Percabangan</h4>
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
                            <form action="/home/materi/percabangan/exercise" method="post">
                            @csrf
                            <ol>
                                <li class="mb-5">
                                    Terdapat sebuah toko buku. Mereka memberikan hadiah berupa perlengkapan sekolah kepada pembeli yang belanja di atas Rp 100.000. Coba buatkan programnya menggunakan if!

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise1" id="exampleFormControlTextarea1" rows="10" required>@if (isset($data->exercise1)){{ $data->exercise1 }}@endif</textarea>
                                    </div>
                                    
                                </li>
                                <li class="mb-5">
                                    Terdapat sebuah aplikasi untuk memeriksa keuntungan penjualan. Jika uang yang didapatkan lebih dari Rp 200.000, maka dinyatakan untung. Tetapi jika tidak, maka belum untung. Coba buatkan programnya menggunakan if-else!

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea2" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise2" id="exampleFormControlTextarea2" rows="10" required>@if (isset($data->exercise2)){{ $data->exercise2 }}@endif</textarea>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    Terdapat sebuah aplikasi untuk menilai suatu harga barang. Jika barang harganya di bawah Rp 50.000 maka barang tersebut murah, jika barang di atas Rp 50.000 maka barang tersebut mahal, dan jika barang di atas Rp 100.000 maka barang tersebut sangat mahal. Coba buatkan programnya menggunakan if-else if-else!

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea3" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise3" id="exampleFormControlTextarea3" rows="10" required>@if (isset($data->exercise3)){{ $data->exercise3 }}@endif</textarea>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    Terdapat sebuah aplikasi untuk memeriksa jenis sampah. Jika kita memasukkan pilihan pertama, maka akan menjelaskan sampah organik. Jika kita memasukkan pilihan ke dua, maka akan menjelaskan sampah anorganik. Jika kita memasukkan pilihan ke tiga, maka akan menjelaskan sampah b3. Coba buatkan programnya menggunakan switch!

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea4" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise4" id="exampleFormControlTextarea4" rows="10" required>@if (isset($data->exercise4)){{ $data->exercise4 }}@endif</textarea>
                                    </div>
                                </li>
                                <li class="mb-5">
                                    Di sebuah toko handphone diadakan promo besar, promo tersebut yaitu ketika membeli handphone android terdapat dua promo, jika pembelian lebih dari Rp 1.000.000 maka akan mendapatkan diskon 10%, jika pembelian lebih dari Rp 2.000.000 maka akan mendapatkan diskon 20%. Selain itu terdapat promo lain pada pembelian handphone apple terdapat dua promo, jika pembelian lebih dari Rp 5.000.000 maka akan mendapatkan diskon 10%, jika pembelian lebih dari Rp 7.000.000 maka akan mendapatkan diskon 20%. Coba buatkan programnya menggunakan percabangan dalam percabangan atau nested-if!

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea5" class="form-label fw-bold">Jawaban</label>
                                        <textarea class="form-control" name="exercise5" id="exampleFormControlTextarea5" rows="10" required>@if (isset($data->exercise5)){{ $data->exercise5 }}@endif</textarea>
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