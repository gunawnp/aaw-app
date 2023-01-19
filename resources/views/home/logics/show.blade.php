@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($logics)
            <div class="lh-lg">
                <h5 class="fw-bold mb-4">Pernyataan</h5>
                {{-- @error('dataStyle')
                    <div class="alert alert-danger align-items-center alert-dismissible fade show" role="alert">
                        <div>
                            <i class="bi bi-exclamation-triangle pe-3"></i>Pilihan anda terlalu sedikit!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @enderror --}}
                <form action="/home/styles/begin" method="post">
                    @csrf
                    {{-- @foreach ($styles as $style)
                        <div class="form-check mb-3">
                            <input class="form-check-input p-3 me-3" type="checkbox" value="{{ $style->id }}" id="check-{{ $style->id }}" name="dataStyle[]" @checked(is_array(old('dataStyle')) && in_array($style->id, old('dataStyle')))>
                            <label class="form-check-label fs-6" for="check-{{ $style->id }}">
                                {{ $style->id }}. {{ $style->que }}
                            </label>
                        </div>
                    @endforeach --}}
                    <button class="btn btn-blue mt-3 mb-5" type="submit">Submit</button>
                </form>
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/styles/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection