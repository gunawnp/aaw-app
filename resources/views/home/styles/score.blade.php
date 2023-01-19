@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($empty)
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data belum tersedia, silahkan ikuti tes!</h5>
                    <a href="/home/styles/begin" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
                </div>
            </div>
        @else
            <div class="lh-lg row mt-3 justify-content-center">
                <h4 class="fw-bold mb-4">Skor Pernyataan</h4>
                <p class="fs-6">Berikut adalah hasil dari tes gaya belajar Kolb. Di bawah ini terdapat dua tabel, tabel pertama (sebelah kiri) yaitu jawaban atau penentu gaya belajar yang didapatkan dari sumber. Dan tabel kedua (sebelah kanan) adalah nomor-nomor yang diisi olehmu pada tes ini.</p>
                <div class="col-md-5 me-5 mt-4">
                    <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
                        <thead>
                            <tr>
                                <th class="fs-6" colspan="5">Nomor Pernyataan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 20; $i++)
                                <tr>
                                    <td>{{ $datavalue[0][$i] }}</td>
                                    <td>{{ $datavalue[1][$i] }}</td>
                                    <td>{{ $datavalue[2][$i] }}</td>
                                    <td>{{ $datavalue[3][$i] }}</td>
                                </tr>
                            @endfor

                            <tr class="fw-bold">
                                <td class="px-4">Activist</td>
                                <td class="px-4">Reflector</td>
                                <td class="px-4">Theorist</td>
                                <td class="px-4">Pragmatist</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-5 me-5 mt-4 mb-3">
                    <table class="table table-striped table-hover table-primary table-bordered border-info w-auto text-center">
                        <thead>
                            <tr>
                                <th class="fs-6" colspan="5">Nomor Pernyataan Yang Diisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 20; $i++)
                                <tr>
                                    <td></td>
                                    <td>{{ $datainclude[0][$i] }}</td>
                                    <td>{{ $datainclude[1][$i] }}</td>
                                    <td>{{ $datainclude[2][$i] }}</td>
                                    <td>{{ $datainclude[3][$i] }}</td>
                                </tr>
                            @endfor
                            
                            <tr class="fw-bold">
                                <td></td>
                                <td class="px-4">Activist</td>
                                <td class="px-4">Reflector</td>
                                <td class="px-4">Theorist</td>
                                <td class="px-4">Pragmatist</td>
                            </tr>

                            <tr class="fw-bold">
                                <td>Total</td>
                                @foreach ($countdata as $cd)
                                    <td class="px-4 fs-6">{{ $cd }}</td>
                                @endforeach
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                <hr>
            </div>
            <div class="text-center">
                <p class="fs-6 mt-3"> Untuk melihat preferensi gaya belajar silahkan tekan tombol di bawah ini atau pilih Preferensi di bagian Tes Gaya Belajar pada sidebar.</p>
                <a href="/home/styles/pref" type="button" class="btn btn-blue mb-5">Preferensi</a>
            </div>
        @endif
    </main>
@endsection