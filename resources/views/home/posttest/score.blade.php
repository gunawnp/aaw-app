@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$done)
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data belum tersedia, silahkan ikuti tes!</h5>
                    <a href="/home/posttest" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
                </div>
            </div>
        @else
            <div class="lh-lg row mt-3 ">
                <h4 class="fw-bold mb-4">Penilaian</h4>
                
                <p class="fs-6 mb-4">Berikut adalah hasil dari Posttest Asesmen Adaptif. Di bawah ini diberikan tabel nilai secara keseluruhan dari nomor 1-20 beserta levelnya, level terdiri dari level a, level b, level n, level 1, dan level 2. Level a adalah level terendah dan level 2 adalah level tertinggi. Kemudian di bagian bawah terdapat grafik dari Posttest Asesmen Adaptif ini. </p>
            </div>
            <div class="lh-lg row mt-3">
                <div class="col-md-6 justify-content-center">
                    <h6 class="fw-bold mb-4 text-center">Tabel Skor Hasil Posttest Asesmen Adaptif</h6>
                    <table class="table table-striped table-hover table-info table-bordered border-info text-center justify-content-center">
                        <thead>
                            <tr>
                                <th rowspan="2" class="align-middle">No</th>
                                <th colspan="5">Level</th>
                            </tr>
                            <tr>
                                <th>b</th>
                                <th>a</th>
                                <th>n</th>
                                <th>1</th>
                                <th>2</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($array as $ar)
                            
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    @if (array_key_exists(1, $ar))
                                        @if ($ar[1] == 1)
                                            <td>✓</td>
                                        @else
                                            <td>✕</td>
                                        @endif
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if (array_key_exists(2, $ar))
                                        @if ($ar[2] == 1)
                                            <td>✓</td>
                                        @else
                                            <td>✕</td>
                                        @endif
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if (array_key_exists(3, $ar))
                                        @if ($ar[3] == 1)
                                            <td>✓</td>
                                        @else
                                            <td>✕</td>
                                        @endif
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if (array_key_exists(4, $ar))
                                        @if ($ar[4] == 1)
                                            <td>✓</td>
                                        @else
                                            <td>✕</td>
                                        @endif
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if (array_key_exists(5, $ar))
                                        @if ($ar[5] == 1)
                                            <td>✓</td>
                                        @else
                                            <td>✕</td>
                                        @endif
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 ps-5 fs-6">
                    <p>Jumlah yang dikerjakan: &nbsp {{ $data->total }} butir</p>
                    <p>Jumlah benar: &nbsp {{ $data->correct }} butir</p>
                    <p>Jumlah salah: &nbsp {{ $data->wrong }} butir</p>
                    <h6>{{ $data->correct }}/{{ $data->total }} x 100 = {{ $data->sum }}</h6>
                    <br>
                    <p>Nilai yang didapatkan dari tes</p>
                    <h3>{{ $data->sum }}</h3>
                </div>
            </div>

            <hr>

            <div class="lh-lg row mt-3 ">
                <div>
                    {!! $chart->container() !!}
                </div>
            </div>
            
            
            <div class="text-center">
                <a href="/home/styles/pref" type="button" class="btn btn-blue mt-3 mb-5">Selesai</a>
            </div>
        @endif
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {!! $chart->script() !!}
@endsection 