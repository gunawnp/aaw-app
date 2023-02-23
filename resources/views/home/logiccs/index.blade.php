@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($done == false)
            <div class="fs-6 lh-lg text-justify me-4">
                <div class="row mb-4">
                    <h4 class="fw-bold mb-4">Deskripsi Tes Berpikir Logis 2</h4>
                    <div class="col-md-6">
                        <p>
                            Setelah melakukan tes berpikir logis pertama, selanjutnya kamu akan mengerjakan tes berpikir logis ke 2 untuk menilai pengetahuan kamu. Tes ini berisi soal-soal pernyataan yang bisa kamu jawab dengan <b> memilih pilihan diantara sangat tidak setuju, tidak setuju, netral, setuju, dan sangat setuju</b>. <br> Soal ini <b>berjumlah 12 soal</b>.
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
                            <a href="/home/logics2/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lanjutkan ke tes berikutnya!</h5>
                </div>
            </div>
        @endif
        
    </main>
@endsection