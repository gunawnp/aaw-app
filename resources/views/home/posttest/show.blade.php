@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$done)
            <div class="fs-6 lh-lg text-justify mb-5">
                <div class="row justify-content-between">
                    <div class="col-5">
                        <h5 class="fw-bold mb-3">Perhatikan Soal Berikut!</h5>
                    </div>

                    <div class="col-5">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-oke alert-dismissible fade show d-flex align-items-center py-2 m-0" role="alert">
                                <i class="bi bi-check-circle-fill pe-3"></i>
                                <div>
                                    {{ session('success') }}
                                </div>
                            </div>
                        @endif
                        @if (session()->has('end'))
                            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center py-2 m-0" role="alert">
                                <i class="bi bi-check-circle-fill pe-3"></i>
                                <div>
                                    Tes sudah selesai, silahkan klik tombol selesai di bawah!
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                
                @foreach ($datatest as $dt)
                    <p>
                        {{ $dt->no }} {{ $dt->que }}
                    </p>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="editor-container" style="height: 780px">
                                        <pre id="editor" class="editor"></pre>
                                    </div>
                                </div>
                            </div>
                            <form method="post" action="/home/posttest/begin" id="myform" class="d-md-flex justify-content-center">
                                @csrf
                                <input type="hidden" name="code" id="code" value="">
                                <input type="hidden" name="id" value="{{ $dt->id }}">

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-blue btn btn-blue py-2 my-3" data-bs-toggle="modal" data-bs-target="#mulaiModal">
                                Submit
                                </button>

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
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="card mb-4 px-0 fs-6">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h6>Hasil Program</h6>
                                        <i class="bi bi-question-circle" 
                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip"
                                        data-bs-title="Tidak ada kode inputan seperti scanf, semua nilai disimpan dalam suatu variabel"></i>
                                    </div>
                                    <div class="card-body">
                                        <p class="font-monospace"> {!! $dt->answer->program !!}</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @if (session()->has('end'))
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-blue mb-5" data-bs-toggle="modal" data-bs-target="#selesaiModal">
                                {{ session('end') }}
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
                                    <a href="/home/posttest/score" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/logics/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
        
        <script>

            var editor = document.querySelector("#editor");

            ace.edit(editor, {
                theme: 'ace/theme/xcode',
                mode: 'ace/mode/c_cpp',
                enableBasicAutocompletion: true
            })
            
            var editor = ace.edit("editor");

            editor.setValue("#include <stdio.h>\nint main(){\n\n\t\n\n\treturn 0;\n}");

            var position = {row: 3, column: 1};

            editor.moveCursorToPosition(position);
            editor.clearSelection();
            editor.textInput.focus();

            setTimeout(function() {
                $(".alert-oke").alert('close');
            }, 2500);
        </script>
    </main>
@endsection