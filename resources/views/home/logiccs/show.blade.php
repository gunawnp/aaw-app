@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($done == false)
            <div class="fs-6 lh-lg text-justify">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <h5 class="fw-bold mb-3">Perhatikan Pernyataan Berikut!</h5>
                    </div>

                </div>
                
                @if (!$errors->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        Harus diisi semua nomor!
                    </div>
                @endif
                
                <form method="post" action="/home/logics2/begin" id="myform" class="justify-content-center">
                @csrf

                @foreach ($logics as $logic)
                    <p class="mb-0 mt-4">
                        {{ $logic->id }}. {!! $logic->que !!}
                    </p>


                        <div class="">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="store.{{ $logic->id }}" id="inlineRadio1 . {{ $logic->id }}" value="1">
                                <label class="form-check-label" for="inlineRadio1 . {{ $logic->id }}">Sangat Tidak Setuju</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="store.{{ $logic->id }}" id="inlineRadio2 . {{ $logic->id }}" value="2">
                                <label class="form-check-label" for="inlineRadio2 . {{ $logic->id }}">Tidak Setuju</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="store.{{ $logic->id }}" id="inlineRadio3 . {{ $logic->id }}" value="3">
                                <label class="form-check-label" for="inlineRadio3 . {{ $logic->id }}">Netral</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="store.{{ $logic->id }}" id="inlineRadio4 . {{ $logic->id }}" value="4">
                                <label class="form-check-label" for="inlineRadio4 . {{ $logic->id }}">Setuju</label>
                            </div> 
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="store.{{ $logic->id }}" id="inlineRadio5 . {{ $logic->id }}" value="5">
                                <label class="form-check-label" for="inlineRadio5 . {{ $logic->id }}">Sangat Setuju</label>
                            </div> 
                        </div>

                        

                        
                        
                        
                        
                        @endforeach
                        <!-- Button trigger modal -->
                        <div class="text-center">
                            <button type="button" class="btn btn-blue btn btn-blue py-2 my-3 px-5 mb-4" data-bs-toggle="modal" data-bs-target="#mulaiModal">
                            Submit
                            </button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="mulaiModal" tabindex="-1" aria-labelledby="mulaiModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content" style="border-radius: 15px">
                                <div class="modal-body">
                                    <p class="fs-6 my-3 text-center">Apakah anda yakin dengan jawaban ini?</p> 
                                </div>
                                <div class="modal-footer justify-content-center ">
                                    <button type="submit" class="btn btn-blue px-4 py-2">Ya</button>
                                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                                </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lanjutkan ke tes selanjutnya!</h5>
                    <a href="/home/pretest" type="button" class="btn btn-blue mb-5">Pretest</a>
                </div>
            </div>
        @endif
    </main>
@endsection