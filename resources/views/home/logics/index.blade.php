@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($logics)
            <div class="fs-6 lh-lg text-justify me-4">
                <div class="mb-5">
                    <h4 class="fw-bold mb-4">Deskripsi Tes Berpikir Logis</h4>
                    <p>
                        Setelah melakukan tes gaya belajar, selanjutnya Anda akan mengerjakan tes berpikir logis untuk mengetahui tingkat logika Anda. Mungkin sebelumnya Anda belum mengetahui hal ini, maka dari itu dengan tes ini Anda akan mengetahuinya. Tes ini dibuat berdasarkan tes berpikir logis umum yang digabungkan dengan materi Pemrograman Dasar, khususnya Struktur Percabangan dan Struktur Perulangan. Hasil tes ini dapat dibagikan kepada guru, orang tua, pembimbing, dan fasilitator komunitas lainnya.
                    </p>
                    <p>
                        Tes ini berisi soal-soal kasus yang berjumlah 10 soal, soal ini dikerjakan dengan membuat kode program sederhana menggunakan bahasa C dan dituliskan pada bagian jawaban. Kode tersebut harus menghasilkan program seperti yang ditampilkan pada soal. Untuk memulai tes silahkan menekan tombol di bawah ini atau bisa juga dengan memilih melalui tombol pada bagian sidebar.
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
                                    <pre id="editor">#include &lt;stdio.h&gt
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
                        <form method="post" action="/home/logics" id="myform" class="d-md-flex justify-content-center">
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
                <p>Agar lebih paham, silahkan kerjakan contoh soal berikut di halaman selanjutnya dengan klik tombol di bawah.</p>
            </div>
            
            <a href="/home/logics/next" type="button" class="btn btn-blue mb-5">Selanjutnya</a>
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