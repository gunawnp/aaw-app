@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">

        <div class="fs-6 lh-lg text-justify mb-5">
            <div class="row justify-content-between">
                <div class="col-5">
                    <h5 class="fw-bold mb-3">Perhatikan Soal Berikut!</h5>
                </div>
            </div>

            @foreach ($data as $dt)
                <p>
                    
                    {{ $dt->no }} {!! $dt->que !!}
                </p>

                @if (session()->has('success'))
                    <div class="col-5 mb-5">
                        <div class="alert alert-success alert-oke alert-dismissible fade show d-flex align-items-center py-2 m-0" role="alert">
                            <i class="bi bi-check-circle-fill pe-3"></i>
                            <div>
                                {{ session('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                

                <form method="post" action="/home/trials-1/begin" id="myform">
                    @csrf
                    <div class="row">
                        <div class="card mb-3">
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{ $dt->id }}">

                                @php
                                    $array = explode('#',$dt->answer->option);
                                @endphp

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-1" value="a">
                                    <label class="form-check-label ms-4" for="answer1-1">
                                        {!! $array[0] !!}
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-2" value="b">
                                    <label class="form-check-label ms-4" for="answer1-2">
                                        {!! $array[1] !!}
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-3" value="c">
                                    <label class="form-check-label ms-4" for="answer1-3">
                                        {!! $array[2] !!}
                                    </label>
                                </div>

                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-4" value="d">
                                    <label class="form-check-label ms-4" for="answer1-4">
                                        {!! $array[3] !!}
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-5" value="e">
                                    <label class="form-check-label ms-4" for="answer1-5">
                                        {!! $array[4] !!}
                                    </label>
                                </div>
                            </div>
                        </div>

                        @if ($dt->id == 100 && isset($datatest))
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-blue mb-5" data-bs-toggle="modal" data-bs-target="#selesaiModal">
                                    Selesai
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="selesaiModal" tabindex="-1" aria-labelledby="selesaiModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content" style="border-radius: 15px">
                                    <div class="modal-body">
                                        <p class="fs-6 my-3 text-center">Apakah anda yakin menyelesaikan tes?</p> 
                                    </div>
                                    <div class="modal-footer justify-content-center ">
                                        <a href="/home" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        
                        @else

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
                            
                        @endif
                            

                    </div>
                </form>
            @endforeach
        </div>

    </main>
@endsection