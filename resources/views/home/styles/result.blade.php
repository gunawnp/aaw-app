@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$learning_s)
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data belum tersedia, silahkan ikuti tes!</h5>
                    <a href="/home/styles" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
                </div>
            </div>
        @else
            {{-- @dd($style[3]->title_style) --}}
            
            @for ($i = 0; $i < 4; $i++)
                @if ($learning_s == $style[$i]->title_style)
                    <div class="lh-lg row mt-3 justify-content-center mx-5">
                        <h4 class="fs-6 fw-bold text-center mb-4">Gaya Belajar Anda Yang Paling Tinggi Adalah</h4>
                        <div class="card text-center p-0">
                            <div class="card-header fs-6 p-4">
                                <h5 class="fw-bold fs-4">{{ $style[$i]->title_style }}</h5>
                                <h5 class="fw-bold fs-4">{{ $style[$i]->cap_style }}</h5>
                            </div>
                            <div class="card-body my-3">
                                <p class="card-text px-5 fs-6">
                                    {{ $style[$i]->desc_style }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @php
                        $except = $i;
                    @endphp
                @endif
            @endfor

            <div class="lh-lg row mt-3 justify-content-center mt-4 mb-5">
            <h4 class="fs-6 fw-bold text-center mb-4">Gaya Belajar Yang Lainnya Yaitu</h4>
                @for ($i = 0; $i < 4; $i++)
                    @if ($i == $except)
                        @continue
                    @else
                        <div class="col-sm-4">
                            <div class="card text-center p-0">
                                <div class="card-header fs-6 py-3">
                                    <h5 class="fw-bold fs-6">{{ $style[$i]->title_style }}</h5>
                                    <h5 class="fw-bold fs-6">{{ $style[$i]->cap_style }}</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text fs-6 text-justify px-2">
                                        {{ $style[$i]->desc_style }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endfor
            </div>
            
            <hr>
            <div class="text-center">
                <p class="fs-6 my-4"> Tes gaya belajar Kolb anda telah selesai, silahkan lanjutkan dengan mengikuti tes berpikir logis <br> dengan cara menekan tombol di bawah ini atau pilih Tes Berpikir Logis pada sidebar untuk memulainya.</p>
                <a href="/home/logics" type="button" class="btn btn-blue mb-5">Tes Berpikir Logis</a>
            </div>
        @endif
    </main>
@endsection