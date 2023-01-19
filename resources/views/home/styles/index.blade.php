@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($styles)
            <div class="fs-6 lh-lg text-justify me-4">
                <p>
                    Kuesioner ini dirancang untuk mengetahui gaya belajarmu sebagai orang dewasa. Selama beberapa tahun, mungkin Anda telah mengembangkan kebiasaan belajar yang dapat membantu Anda untuk mendapatkan lebih banyak manfaat dari beberapa pengalaman daripada yang lain. Anda mungkin tidak menyadarinya tentang hal ini, maka kuesioner ini dapat membantu Anda menentukan preferensi belajar Anda dan dapat dibagikan kepada guru, pembimbing, dan fasilitator komunitas lainnya.
                </p>
                <p>
                    Kuesioner ini mungkin membutuhkan waktu sekitar <b>10 menit</b> untuk Anda selesaikan. Keakuratan dari hasil Anda, tergantung dari seberapa jujur Anda. <b>Tidak ada jawaban yang benar ataupun jawaban yang salah</b>.
                </p>
                <p>
                    Jika Anda lebih setuju daripada tidak setuju dengan pernyataannya, berilah tanda <b>ceklis (√)</b> pada kotak di sebelah kiri pertanyaan. Jika Anda lebih tidak setuju daripada setuju, <b>biarkan kotaknya kosong</b>. Dan jika Anda bingung situasi mana yang harus dipikirkan ketika akan menjawab pertanyaannya, pikirkan saja apa yang akan Anda lakukan ketika bekerja dengan orang lain. Lanjutkan dengan pilihan pertama Anda, daripada terlalu memikirkan respons Anda.
                </p>
            </div>
            
            <a href="/home/styles/begin" type="button" class="btn btn-blue">Mulai Tes Gaya Belajar</a>
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