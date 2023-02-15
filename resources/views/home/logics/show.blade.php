@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($done == false)
            <div class="fs-6 lh-lg text-justify">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <h5 class="fw-bold mb-3">Perhatikan Soal Berikut!</h5>
                    </div>

                    @if (session()->has('success'))
                        <div class="col-5">
                            <div class="alert alert-success alert-oke alert-dismissible fade show d-flex align-items-center py-2 m-0" role="alert">
                                <i class="bi bi-check-circle-fill pe-3"></i>
                                <div>
                                    {{ session('success') }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                
                @foreach ($logics as $logic)
                    <p>
                        {{ $logic->id }}. {!! $logic->que !!}
                    </p>

                    @if ($logic->id == 3 || $logic->id == 4)
                        <img class="img-fluid mx-auto d-block my-4" src="/img/logic-1.png" alt="tikus" width="500px">
                    @endif

                    @if ($logic->id == 7)
                        <img class="img-fluid mx-auto d-block my-4" src="/img/logic-2.png" alt="tikus" width="500px">
                    @endif

                    @if ($logic->id == 8)
                        <img class="img-fluid mx-auto d-block my-4" src="/img/logic-3.png" alt="ikan" width="500px">
                    @endif

                    <form method="post" action="/home/logics/begin" id="myform" class="justify-content-center">
                        @csrf

                        <div class="row">
                            @if ($logic->id == 9)
                                <div class="mb-3">
                                    <label for="text-area" class="form-label">Jawaban</label>
                                    <textarea class="form-control" id="text-area" rows="3" name="answerText" required placeholder="DTA, DTB, DIA, ..."></textarea>
                                </div>
                                @error('answerText')
                                    <div class="alert alert-danger" role="alert">
                                        Silahkan isi terlebih dahulu!
                                    </div>
                                @enderror

                            @elseif($logic->id == 10)
                                <div class="mb-3">
                                    <label for="text-area" class="form-label">Jawaban</label>
                                    <textarea class="form-control" id="text-area" rows="3" name="answerText" required placeholder="BKHM, BKMH, BHMK, ..."></textarea>
                                </div>
                                @error('answerText')
                                    <div class="alert alert-danger" role="alert">
                                        Silahkan isi terlebih dahulu!
                                    </div>
                                @enderror
                            @else

                                <div class="col-md-4">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            @php
                                                $array = explode('&',$logic->option);
                                            @endphp

                                            @if ($logic->id == 7 || $logic->id == 8)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-1" value="A">
                                                    <label class="form-check-label" for="answer1-1">
                                                        {{ $array[0] }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-2" value="B">
                                                    <label class="form-check-label" for="answer1-2">
                                                        {{ $array[1] }}
                                                    </label>
                                                </div>

                                            @else

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-1" value="A">
                                                    <label class="form-check-label" for="answer1-1">
                                                        {{ $array[0] }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-2" value="B">
                                                    <label class="form-check-label" for="answer1-2">
                                                        {{ $array[1] }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-3" value="C">
                                                    <label class="form-check-label" for="answer1-3">
                                                        {{ $array[2] }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-4" value="D">
                                                    <label class="form-check-label" for="answer1-4">
                                                        {{ $array[3] }}
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="answerOption" id="answer1-5" value="E">
                                                    <label class="form-check-label" for="answer1-5">
                                                        {{ $array[4] }}
                                                    </label>
                                                </div>
                                            @endif

                                        </div>
                                    </div>
                                    
                                    @error('answerOption')
                                        <div class="alert alert-danger" role="alert">
                                            Isi salah satu!
                                        </div>
                                    @enderror
                                </div>
                                                
                                <div class="col-md-8">
                                    <div class="card mb-3 px-0">
                                        <div class="card-body">
                                            @php
                                                $array = explode('&',$logic->reason);
                                            @endphp
                                            
                                            @foreach ($array as $ar)    
                                                <div class="form-check">
                                                    <input class="form-check-input p-2 me-2" type="radio" name="answerReason" id="answer2- . {{ $loop->iteration }}" value="{{ $loop->iteration }}">
                                                    <label class="form-check-label" for="answer2- . {{ $loop->iteration }}">
                                                        {{ $ar }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('answerReason')
                                        <div class="alert alert-danger" role="alert">
                                            Isi salah satu!
                                        </div>
                                    @enderror
                                </div>

                            @endif
                        </div>

                        @if (isset($data))
                            @if ($data["logic_" . $logic->id] !== null)
                                @if ($logic->id == 10)
                                    <div class="alert alert-success" role="alert">
                                        Sudah terisi, silahkan klik selesai di bawah!
                                    </div>  
                                @else
                                    <div class="alert alert-success" role="alert">
                                        Sudah terisi, silahkan lanjutkan ke nomor berikutnya!
                                    </div>   
                                @endif
                            @endif
                        @endif

                        <input type="hidden" name="no" value="{{ $logic->id }}">
                        <input type="hidden" name="answer1" value="{{ $logic->answer1 }}">
                        <input type="hidden" name="answer2" value="{{ $logic->answer2 }}">


                        @if ($logic->id == 10 && isset($data) && $data["logic_" . $logic->id] !== null)
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
                                        <a href="/home/logics/score" type="button" class="btn btn-blue px-4 py-2">Ya</a>
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

                    </form>

                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{ $logics->links() }}
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/logics/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
    </main>
@endsection