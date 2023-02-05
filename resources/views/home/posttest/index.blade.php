@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$done)
            <div class="fs-6 lh-lg text-justify me-4">
                <div class="mb-5">
                    <h4 class="fw-bold mb-4">Deskripsi Posttest Asesmen Adaptif</h4>
                    <p>
                        Setelah melakukan tes gaya belajar dan tes tingkatan berpikir logis selanjutnya Anda akan mengerjakan posttest asesmen adaptif dengan mata pelajaran struktur percabangan dan struktur perulangan. Hasil tes ini dapat dibagikan kepada guru, orang tua, pembimbing, dan fasilitator komunitas lainnya.
                    </p>
                    <p>
                        Tes ini berisi soal-soal kasus yang berjumlah 10 soal namun berbentuk adaptif, terdapat dua level ke atas dan dua level ke bawah. Ketika jawaban Anda dua kali benar, maka akan meningkat level kesulitan soalnya pada nomor berikutnya. Namun jika salah, maka level kesulitan akan turun dan dapat mengerjakan nomor tersebut berkali-kali hingga level terendah.
                        Soal ini dikerjakan dengan membuat kode program sederhana menggunakan bahasa C dan dituliskan pada bagian jawaban. Kode tersebut harus menghasilkan program seperti yang ditampilkan pada soal.
                    </p>
                </div>

                <h4 class="fw-bold mb-4">Cara Mengerjakan</h4>
                <p class="fs-6">Silahkan perhatikan contoh pengerjaan di bawah ini!</p>
                <p>
                    Terdapat tiga variabel untuk suatu program, yaitu variabel x, y, dan z. Nilai dari variabel x yaitu 5 dan variabel y yaitu 6, kemudian variabel z adalah hasil dari perkalian dari variabel x dengan y yang menghasilkan 30. Jika variabel y bernilai 8 maka berapa isi dari variabel z? Untuk menjawabnya silahkan buat kode program sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="editor-container">
                                    <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

	int x, y, z;
	x = 5;
	y = 8;
	printf("Nilai y: %d\n", y);
	z = x * y;
	printf("Nilai dari variabel z yaitu %d", z);

	return 0;
}</pre>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/home/posttest" id="myform" class="d-md-flex justify-content-center">
                            @csrf
                            <input type="hidden" name="code" id="code" value="">
                            <input type="submit" value="Run" class="btn btn-blue py-2 mt-3">
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="card mb-4 px-0">
                                <h6 class="card-header">Hasil Program</h6>
                                <div class="card-body">
                                    <pre class="m-0">Nilai y: 6 <br>Nilai dari variabel z yaitu 30</pre>
                                </div>
                            </div>
                            @if (session('output'))
                                <div class="card px-0">
                                    <div class="card-body">
                                        <pre class="m-0">{{ session('output') }}</pre>
                                    </div>
                                </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
                <p class="mt-3">Silahkan anda jalankan dengan menekan tombol run. Maka anda akan mendapatkan jawabannya di sebelah kanan.</p>
                <p>Dari contoh di atas terdapat sebuah soal dengan instruksi yang jelas, kemudian anda hanya diarahkan untuk menuliskan kode program yang sesuai dengan perintah. Silahkan perhatikan contoh dan instruksinya pada setiap soal. Pada contoh dan soal-soal yang akan dikerjakan tidak mengandung perintah untuk inputan atau "scanf", jadi semuanya disimpan dalam suatu variabel.</p>
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
                    <p class="fs-6 my-3 text-center">Apakah anda yakin akan memulai tes?</p> 
                </div>
                <div class="modal-footer justify-content-center ">
                    <a href="/home/posttest/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                </div>
                </div>
            </div>
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/posttest/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
        
    </main>
@endsection