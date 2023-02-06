@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if ($done == false)
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
                                    <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

	

	return 0;
}</pre>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/home/logicsii" id="myform" class="d-md-flex justify-content-center">
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
                    <a href="/home/logicsii/begin" type="button" class="btn btn-blue px-4 py-2">Ya</a>
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Tidak</button>
                </div>
                </div>
            </div>
            </div>
        @else
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data sudah diisi, silahkan lihat bagian penilaian</h5>
                    <a href="/home/logicsii/score" type="button" class="btn btn-blue mb-5">Penilaian</a>
                </div>
            </div>
        @endif
    </main>
@endsection