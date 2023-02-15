@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$done)
            <div class="fs-6 lh-lg text-justify me-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h4 class="fw-bold mb-4">Deskripsi Pretest Asesmen Adaptif</h4>
                        <p>
                            Setelah melakukan tes gaya belajar dan tes tingkatan berpikir logis selanjutnya kamu akan mengerjakan pretest asesmen adaptif dengan mata pelajaran struktur percabangan dan struktur perulangan. Hasil tes ini dapat dibagikan kepada guru, orang tua, pembimbing, dan fasilitator komunitas lainnya.
                        </p>
                        <p>
                            Tes ini berisi soal-soal kasus yang berjumlah 10 soal namun berbentuk adaptif, terdapat dua level ke atas dan dua level ke bawah. Ketika jawaban kamu dua kali benar, maka akan meningkat level kesulitan soalnya pada nomor berikutnya. Namun jika salah, maka level kesulitan akan turun dan dapat mengerjakan nomor tersebut berkali-kali hingga level terendah.
                            Soal ini dikerjakan dengan memilih pilihan ganda dari 5 pilihan yang menurut kamu benar. <br> <br>
                            Untuk memulai tes, silahkan klik tombol di bawah!
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img id="logic" src="/illus/online_test.svg" alt="Pretest" width="300" class="mx-auto d-block mt-5 pt-5"/>
                    </div>
                </div>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-blue mb-5" data-bs-toggle="modal" data-bs-target="#mulaiModal">
            Mulai tes
            </button>

            <!-- Modal -->
            <div class="modal fade" id="mulaiModal" tabindex="-1" aria-labelledby="mulaiModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="border-radius: 15px">
                <div class="modal-body">
                    <p class="fs-6 my-3 text-center">Apakah kamu yakin akan memulai tes?</p> 
                </div>
                <div class="modal-footer justify-content-center ">
                    <a href="/home/pretest/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                </div>
                </div>
            </div>
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/pretest/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection