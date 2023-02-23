@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        
        {{-- Uji Coba --}}
        
        <h4>Selamat datang, {{ auth()->user()->name }}!</h4>

        <div class="fs-6 pt-3 lh-lg text-justify">
            <p>
                Halo semuanya! Perkenalkan saya Gunawan Pratama dari Universitas Pendidikan Indonesia jurusan Pendidikan Ilmu Komputer. Terima kasih yaa sudah bersedia mengikuti tes ini. Jadi tujuan tes ini yaitu untuk mengukur atau menguji coba soal yang akan digunakan untuk penelitian. Soal ini berbentuk pilihan ganda dengan soal kasus kode program, yang terdiri dari 10 soal yang memiliki 5 level. Jika ada pertanyaan terkait pengerjaan, jangan sungkan untuk bertanya. Sekali lagi terima kasih yaa! Selamat mengerjakan!
            </p>
            <p>
                Untuk <b>Kelompok 1</b> silahkan ikuti <b>Uji Coba 1</b> dan untuk <b>Kelompok 2</b> silahkan ikuti <b>Uji Coba 2</b>
            </p>
            
            <p>Untuk menuju halaman tes, silahkan menekan tombol di bawah ini!</p>
        </div>

        <!-- Button trigger modal 1 -->
        <button type="button" class="btn btn-blue mb-5 me-5" data-bs-toggle="modal" data-bs-target="#mulaiModal">
        Uji Coba 1
        </button>
        
        <!-- Modal 1 -->
        <div class="modal fade" id="mulaiModal" tabindex="-1" aria-labelledby="mulaiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px">
            <div class="modal-body">
                <p class="fs-6 my-3 text-center">Apakah anda yakin akan memulai tes?</p> 
            </div>
            <div class="modal-footer justify-content-center ">
                <a href="/home/trials-1/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Button trigger modal 2 -->
        <button type="button" class="btn btn-blue mb-5" data-bs-toggle="modal" data-bs-target="#mulaiModall">
        Uji Coba 2
        </button>
        
        <!-- Modal 2 -->
        <div class="modal fade" id="mulaiModall" tabindex="-1" aria-labelledby="mulaiModallLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px">
            <div class="modal-body">
                <p class="fs-6 my-3 text-center">Apakah anda yakin akan memulai tes?</p> 
            </div>
            <div class="modal-footer justify-content-center ">
                <a href="/home/trials-2/begin?page=2" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
            </div>
            </div>
        </div>
        </div>
        
    </main>
@endsection