@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($done == false)
            <div class="fs-6 lh-lg text-justify me-4">
                <div class="row mb-4">
                    <h4 class="fw-bold mb-4">Deskripsi Tes Berpikir Logis</h4>
                    <div class="col-md-6">
                        <p>
                            Setelah melakukan tes gaya belajar, selanjutnya kamu akan mengerjakan tes berpikir logis untuk mengetahui tingkat berpikir logis kamu. Mungkin sebelumnya kamu belum mengetahui hal ini, maka dari itu dengan tes ini kamu akan mengetahuinya. Hasil tes ini dapat dibagikan kepada guru, orang tua, pembimbing, dan fasilitator komunitas lainnya. Tes ini berisi soal-soal kasus yang berjumlah 10 soal dengan tipe pilihan ganda dengan 5 pilihan, beserta pilihan alasannya.
                            Untuk memulai tes ini silahkan klik tombol di bawah ini!
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img id="logic" src="/illus/logic.svg" alt="Logic" width="300" class="mx-auto d-block"/>
                    </div>
                </div>
                
                    
                
                
                <!-- Button trigger modal -->
                <div class="text-center">
                    <button type="button" class="btn btn-blue mb-5 text-center" data-bs-toggle="modal" data-bs-target="#mulaiModal">
                        Mulai tes
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="mulaiModal" tabindex="-1" aria-labelledby="mulaiModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius: 15px">
                        <div class="modal-body">
                            <p class="fs-6 my-3 text-center">Apakah anda yakin akan memulai tes?</p> 
                        </div>
                        <div class="modal-footer justify-content-center ">
                            <a href="/home/logics/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        </div>
                    </div>
                </div>
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