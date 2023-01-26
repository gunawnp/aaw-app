@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($logics)
            <div class="fs-6 lh-lg text-justify me-4">
                <h4 class="fw-bold mb-4">Contoh Soal</h4>
                <p>
                    Terdapat tiga variabel untuk suatu program, yaitu variabel a, b, c, dan d. Nilai dari variabel a yaitu 2, variabel b yaitu 3, dan variabel c yaitu 4, kemudian variabel d adalah hasil dari penjumlahan dari variabel a, b, dan c yang menghasilkan 9. Jika variabel c bernilai 10 maka berapa isi dari variabel d? Untuk menjawabnya silahkan buat kode program sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="editor-container">
                                    <pre id="editor">#include &lt;stdio.h&gt
int main() {

	

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
                                    <pre class="m-0">Nilai c: 4 <br>Nilai dari variabel d yaitu 9</pre>
                                </div>
                            </div>
                            @if (session('output'))
                                <div class="card px-0">
                                    <div class="card-body">
                                        <pre class="m-0">{{ session('output') }}</pre>
                                        @if (preg_match("/yaitu 15/", session('output')))
                                            <h4 class="text-center mt-4">Jawaban Benar!</h4>
                                        @else
                                            <h4 class="text-center mt-4">Jawaban Salah!</h4>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <p class="mt-3">Silahkan anda jalankan dengan menekan tombol run. Maka anda akan mendapatkan jawabannya di sebelah kanan.</p>
                <p>Setelah anda memahami contoh, silahkan untuk memulai tes ini dengan klik tombol di bawah untuk mulai. </p>
            </div>
            
            <a href="/home/logics/begin" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
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