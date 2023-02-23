@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$done)
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data belum tersedia, silahkan ikuti tes!</h5>
                    <a href="/home/logics" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
                </div>
            </div>
        @else
            <div class="lh-lg row mt-3 ">
                <h4 class="fw-bold mb-4">Penilaian</h4>
                <div class="col-md-6">
                    <p class="fs-6 mb-4">Berikut adalah hasil dari tes tingkatan berpikir logis. Di bawah ini diberikan sebuah nilai secara keseluruhan dengan rentang 10-100. Semakin tinggi nilai, semakin bagus. Kemudian di bawah bagian nilai terdapat detail kemampuan berpikir logis siswa yang bisa diperhatikan setiap poinnya. </p>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold mb-5 text-center">Nilai Anda</h5>
                    <h1 class="text-center mb-5">{{ $data->sum*10 }}</h1>
                </div>
            </div>

            <hr>

            <div class="lh-lg row mt-5 justify-content-center">
                <h5 class="fw-bold mb-4 text-center">Skor Hasil Tes Berpikir Logis</h5>
                <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center justify-content-center">
                    <thead>
                        <tr>
                            <th class="fs-6">No</th>
                            <th class="fs-6">Indikator Berpikir Logis</th>
                            <th class="fs-6">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5">1</td>
                            <td class="px-5">Penalaran Proporsional</td>
                            <td class="px-5">{{ $data->logic_1 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">2</td>
                            <td class="px-5">Penalaran Proporsional</td>
                            <td class="px-5">{{ $data->logic_2 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">3</td>
                            <td class="px-5">Pengontrolan Variabel</td>
                            <td class="px-5">{{ $data->logic_3 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">4</td>
                            <td class="px-5">Pengontrolan Variabel</td>
                            <td class="px-5">{{ $data->logic_4 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">5</td>
                            <td class="px-5">Penalaran Probabilistik</td>
                            <td class="px-5">{{ $data->logic_5 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">6</td>
                            <td class="px-5">Penalaran Probabilistik</td>
                            <td class="px-5">{{ $data->logic_6 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">7</td>
                            <td class="px-5">Penalaran Korelasional</td>
                            <td class="px-5">{{ $data->logic_7 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">8</td>
                            <td class="px-5">Penalaran Korelasional</td>
                            <td class="px-5">{{ $data->logic_8 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">9</td>
                            <td class="px-5">Penalaran Kombinatorial</td>
                            <td class="px-5">{{ $data->logic_9 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5">10</td>
                            <td class="px-5">Penalaran Kombinatorial</td>
                            <td class="px-5">{{ $data->logic_10 * 10 }}</td>
                        </tr>
                        <tr>
                            <td class="px-5 fw-bold" colspan="2">Total</td>
                            <td class="px-5 fw-bold">{{ $data->sum*10 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <hr>
            <div class="text-center">
                <p class="fs-6 my-4"> Tes tingkatan berpikir logis anda telah selesai, silahkan lihat hasil dari ke dua tes.</p>
                <a href="/home/profile" type="button" class="btn btn-blue mb-5">Profile</a>
            </div>
        @endif
    </main>
@endsection 