@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <div>
            <div class="card bg-blue ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ps-5">
                            <p class="fs-1 pt-3 fw-bold text-white">Struktur Percabangan</p>
                            <p class="text-white fs-6">Pada materi ini, kamu akan mempelajari materi-materi percabangan seperti if, if else, dan switch. Materi ini digunakan untuk memahami kondisi pada suatu kasus yang dituangkan dalam kode program.</p>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <img src="/img/materi-1.png" alt="Percabangan" width="350px" class="me-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 text-justify">
                <div class="col-md-9">
                    {{-- Definisi --}}
                    <div id="definisi">
                        <h4 class="fw-bold">Definisi Struktur Percabangan</h4>
                        <div class="fs-6 lh-lg mt-3 mb-5">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>
                                        Struktur percabangan adalah salah satu implementasi algoritma dalam suatu program yang digunakan untuk memecahkan masalah dengan berbagai alternatif jawaban atau kondisi yang tersedia berdasarkan pada suatu syarat. Terdapat dua bentuk instruksi percabangan yang sering digunakan, yaitu dengan statemen if dan statemen case. 
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <img src="/img/materi-1-a.png" alt="Struktur Percabangan" width="180px">
                                </div>
                            </div>
                            <p class="mt-3">
                                Percabangan juga memiliki nama lain di buku-buku pemrograman seperti Decision, Branch, Selections, Pemilihan, Kondisi, dan nama lain yang masih berkaitan, namun makna dan tujuannya tetap sama. Ada beberapa percabangan yang perlu diperhatikan yaitu percabangan tidak bersyarat, percabangan sederhana, percabangan bertingkat, dan percabangan bersarang. 
                            </p>
                        </div>
                    </div>

                    <hr>

                    {{-- Sederhana --}}
                    <div id="simple-nest">
                        <h4 class="fw-bold mt-5">Percabangan Sederhana</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Percabangan sederhana digunakan untuk memecahkan suatu masalah dengan memperhatikan kondisi yang dimiliki bernilai benar atau salah. Jika kondisi atau syarat terpenuhi, maka pernyataannya akan dijalankan. Dalam percabangan sederhana, terdapat dua macam percabangan yaitu sebagai berikut.
                            </p>

                            {{-- Percabangan tunggal --}}
                            <div id="percabangan-tunggal">
                                <h6 class="fw-bold mt-4">1. Percabangan tunggal/one-way-case/if-then</h6>
                                <p>Percabangan tunggal dinotasikan sebagai berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-5 mb-0"><b>if</b> (kondisi) <br>&nbsp; <b>then</b> pernyataan</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            Pada bagian kondisi, berisi kondisi atau persyaratan. Jika kondisi tersebut bernilai true atau benar, maka pernyataan akan dikerjakan. Dan jika false atau salah maka pernyataan tidak akan dikerjakan.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="/img/materi-1-b.png" alt="Tunggal" width="200px">
                                    </div>
                                </div>

                                <p>Contoh biasa percabangan tunggal:</p>
                                <div class="card mb-3" style="width: 25rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-5 "><b>if</b> (saklar on) <br>&nbsp; <b>then</b> lampu menyala</p>
                                        <p class="font-monospace ms-5 "><b>if</b> (x > 100) <br>&nbsp; <b>then</b> y = x + 20</p>
                                        <p class="font-monospace ms-5 "><b>if</b> (nilai < 80) <br>&nbsp; <b>then</b> keterangan “Tidak Lulus”</p>
                                    </div>
                                </div>

                                <p>Contoh dalam algoritma program:</p>
                                <img src="/img/materi-1-c.png" alt="Contoh" width="250px" class="d-block mx-auto">
                                <p>Langkah-langkah:</p>
                                <ol>
                                    <li>Mulai program</li>
                                    <li>Masukkan nilai</li>
                                    <li>Jika nilai < 80 bernilai true, maka jalankan langkah 4. Jika nilai < 80 bernilai false, maka tidak menjalankan langkah 4</li>
                                    <li>Menuliskan keterangan “Tidak Lulus”</li>
                                    <li>Program Selesai</li>
                                </ol>

                                <p>Algoritma program di atas jika ditulis dalam bahasa pemrograman C adalah sebagai berikut.</p>
                                <div class="editor-container mb-4">
                                    <pre id="editor" class="editor">#include &lt;stdio.h&gt
        int main() {

            int nilai;
            printf("masukkan nilai:");
            scanf("%d", &nilai);
            if (nilai < 80){
                printf("Tidak Lulus\n");
            }

            return 0;
        }</pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">masukkan nilai: 60 <br> Tidak Lulus</p>
                                    </div>
                                </div>


                            </div>
                            <div id="percabangan-ganda">
                                {{-- Percabangan ganda --}}
                                <h6 class="fw-bold mt-5">2. Percabangan ganda/two-way-case/if-then-else</h6>
                                <p>Percabangan ganda dinotasikan sebagai berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-5 mb-0"><b>if</b> (kondisi) <br>&nbsp; <b>then</b> pernyataan 1</p>
                                        <p class="font-monospace ms-5 mb-0"><b>else</b> (kondisi) <br>&nbsp; <b>then</b> pernyataan 2</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            Pada bagian kondisi, berisi kondisi atau persyaratan. Jika kondisi tersebut bernilai true atau benar, maka pernyataan 1 akan dikerjakan. Dan jika false atau salah maka pernyataan 2 akan dikerjakan.
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="/img/materi-1-d.png" alt="Tunggal" width="200px">
                                    </div>
                                </div>

                                <p>Contoh biasa percabangan ganda:</p>
                                <div class="card mb-3" style="width: 25rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-5 "><b>if</b> (x > 0) <br>&nbsp; <b>then</b> bilangan positif <br><b>else</b><br>&nbsp; <b>then</b> bilangan negatif </p>

                                        <p class="font-monospace ms-5 "><b>if</b> (ember penuh) <br>&nbsp; <b>then</b> matikan air <br><b>else</b><br>&nbsp; <b>then</b> nyalakan air </p>

                                        <p class="font-monospace ms-5 "><b>if</b> (nilai > 75) <br>&nbsp; <b>then</b> keterangan “Lulus” <br><b>else</b><br>&nbsp; <b>then</b> keterangan “Tidak Lulus” </p>
                                    </div>
                                </div>

                                <p>Contoh dalam algoritma program:</p>
                                <img src="/img/materi-1-e.png" alt="Contoh" width="250px" class="d-block mx-auto">
                                <p>Langkah-langkah:</p>
                                <ol>
                                    <li>Mulai program</li>
                                    <li>Masukkan nilai</li>
                                    <li>Jika nilai > 75 bernilai true, maka jalankan langkah 4. Jika nilai > 75 bernilai false, maka jalankan langkah 5</li>
                                    <li>Menuliskan keterangan “Lulus”</li>
                                    <li>Menuliskan keterangan “Tidak Lulus”</li>
                                    <li>Program Selesai</li>
                                </ol>

                                <p>Algoritma program di atas jika ditulis dalam bahasa pemrograman C adalah sebagai berikut.</p>
                                <div class="editor-container mb-4">
                                            <pre id="editor" class="editor">#include &lt;stdio.h&gt
        int main() {

            int nilai;
            printf("masukkan nilai:");
            scanf("%d", &nilai);
            if (nilai > 75){
                printf("Lulus\n");
            }
            else {
                printf("Tidak Lulus\n");
            }

            return 0;
        }</pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">masukkan nilai: 80 <br> Lulus</p>
                                    </div>
                                </div>

                                <div class="card mb-5" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">masukkan nilai: 50 <br> Tidak Lulus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- Bertingkat --}}
                    <div id="tiered-nest">
                        <h4 class="fw-bold mt-5">Percabangan Bertingkat</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Percabangan bertingkat atau percabangan majemuk atau biasa juga disebut dengan <i>multi-way-case</i> adalah percabangan yang biasanya terdapat dua kondisi atau lebih.  Pada percabangan bertingkat, dapat menggunakan <i>if . . else if . . else</i> dan menggunakan <i>switch</i>.
                            </p>

                            {{-- Perintah pertama --}}
                            <div id="perintah-pertama">
                                <h6 class="fw-bold mt-4">1.	Perintah if . . else if . . else</h6>
                                <p>Percabangan bertingkat if . . else if . . else dinotasikan sebagai berikut:</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-3" style="width: 20rem;">
                                            <div class="card-body">
                                                <p class="font-monospace ms-5 mb-0">
                                                    <b>if</b> (kondisi 1) <br>&nbsp; <b>then</b> pernyataan 1 <br>
                                                    <b>else if</b> (kondisi 2) <br>&nbsp; <b>then</b> pernyataan 2 <br>
                                                    <b>else if</b> (kondisi 3) <br>&nbsp; &nbsp<b>then</b> pernyataan 3 <br>
                                                    ... <br>&nbsp; ... <br>
                                                    <b>else</b><br>&nbsp; &nbsp <b>then</b> pernyataan n
                                                </p>
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/img/materi-1-f.png" alt="Contoh" width="370px" class="d-block mx-auto mt-3">
                                    </div>
                                </div>

                                <p>
                                    Algoritma atau urutan dari percabangan ini yaitu ketika satu kondisi pertama tidak memenuhi, maka kondisi berikutnya yang akan diperiksa, dan jika kondisi kedua tidak terpenuhi juga, maka akan berlanjut kepada kondisi berikutnya, terus menerus hingga mendapatkan kondisi yang memenuhi atau hingga masuk ke kondisi else.
                                </p>

                                <p>Contoh pada percabangan bertingkat yaitu sebagai berikut.</p>
                                <div class="editor-container mb-4" style="height: 300px">
                                    <pre id="editor" class="editor">#include &lt;stdio.h&gt
    int main() {

    int x;
    printf(“Masukkan nilai x: ”); scanf(“%d”, &x);
    if (x > 0){
        printf(“x adalah bilangan positif”);
    }
    else if (x < 0){
        printf(“x adalah bilangan negatif”);
    }
    else{
        printf(“x adalah bilangan nol”);
    }

    return 0;
}</pre>
                                </div>

                                <p>
                                    Pada program di atas digunakan sebagai penentu nilai yang dimasukkan termasuk ke dalam bilangan positif, negatif, atau nol. Algoritmanya dimulai dengan memasukkan suatu bilangan, dan akan dilakukan pengecekan sesuai kondisi.
                                </p>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">Masukkan nilai x: 8 <br> x adalah bilangan positif</p>
                                    </div>
                                </div>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">Masukkan nilai x: -4 <br> x adalah bilangan negatif</p>
                                    </div>
                                </div>

                                {{--  --}}

                                <p>Contoh lainnya pada percabangan bertingkat yaitu sebagai berikut.</p>
                                <div class="editor-container mb-4" style="height: 470px">
                                    <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

    int nilai;
    char huruf;
    printf("Masukkan nilai: "); scanf("%d", &nilai);

    if (nilai >= 81 && nilai <= 100){
        huruf ='A';
    }
    else if (nilai >= 71 && nilai < 81){
        huruf ='B';
    }
    else if (nilai >= 61 && nilai < 71){
        huruf ='C';
    }
    else if (nilai >= 51 && nilai < 61){
        huruf ='D';
    }
    else {
        huruf ='E';
    }

    printf("Nilai yang dikonversi ke huruf adalah: %d\n“, huruf);

    return 0;
}</pre>
                                </div>

                                <p>
                                    Pada program di atas akan dimulai dari memasukkan nilai dari rentang 0 sampai 100. Nilai tersebut akan dikonversi atau diubah ke nilai dalam bentuk huruf dari A, B, C, D, dan E. Setelah memasukkan nilai maka akan dilakukan pengecekan pada setiap kondisi. Kondisi pertama, jika nilai lebih dari sama dengan 81 dan kurang dari sama dengan dari 100, maka nilai akan diubah ke nilai yang berbentuk huruf, yaitu nilai A. Begitupun seterusnya. Setelah mendapatkan nilai dan keluar dari percabangan, maka akan ditampilkan nilai huruf seperti pada program.
                                </p>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 27rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">Masukkan nilai: 85 <br>Nilai yang dikonversi ke huruf adalah: A</p>
                                    </div>
                                </div>
                                <div class="card mb-3" style="width: 27rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">Masukkan nilai: 68 <br>Nilai yang dikonversi ke huruf adalah: C</p>
                                    </div>
                                </div>


                            </div>
                            <div id="perintah-switch">
                                {{-- Perintah switch --}}
                                <h6 class="fw-bold mt-5">2. Perintah Switch</h6>
                                
                                <p>
                                    Pada percabangan bertingkat selain menggunakan <i>if . . else if . . else</i>, bisa juga dengan menggunakan <i>switch</i>, karena memiliki nilai kondisi berupa nilai pasti seperti operasi pembanding atau rentang nilai. 
                                </p>

                                <p>Percabangan bertingkat dengan <i>switch</i> dinotasikan sebagai berikut:</p>
                                <div class="card mb-3" style="width: 20rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-5 mb-0">
                                            <b>switch</b> (ekspresi) <br>&nbsp <b>case</b> nilai 1: <br>&nbsp &nbsp pernyataan 1 <br>&nbsp &nbsp break <br>
                                            &nbsp<b>case</b> nilai 2: <br>&nbsp &nbsp pernyataan 2 <br>&nbsp &nbsp break <br>
                                            &nbsp<b>...</b><br>
                                            &nbsp<b>default:</b> <br>&nbsp &nbsp pernyataan default
                                        </p>
                                    </div>
                                </div>

                                <p>
                                    Berdasarkan notasi di atas, <i>switch</i> menggunakan ekspresi yang berupa variabel, variabel tersebut didapatkan biasanya dari sebuah masukkan. Kemudian ekspresi tersebut dilakukan perbandingan dengan nilai yang ada pada bagian case. Nilai di sini dapat berupa karakter, string, numerik, dan sebagainya yang memenuhi persyaratan seperti variabel.
                                </p>
                                <p>
                                    Setelah dilakukan perbandingan, jika ada ekspresi yang cocok dengan suatu nilai pada suatu case, maka akan dilakukan eksekusi pernyataan pada case tersebut hingga dihentikan oleh perintah break.
                                </p>
                                <p>
                                    Jika tidak ada kecocokan antara ekspresi dengan nilai, maka akan dijalankan bagian default yang di dalamnya terdapat pernyataan default. Pada bagian ini, tidak diperlukan lagi perintah break.
                                </p>

                                <br>

                                <p>Untuk lebih jelasnya, mari kita perhatikan suatu contoh berikut ini.</p>
                                <div class="editor-container mb-4" style="height: 630px">
                                            <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

    int x;
    printf(
    "Selamat datang di provider favoritmu!\n"
    "Silahkan memilih menu pilihan Anda:\n"
    "1. Paket promosi\n"
    "2. Paket internet\n"
    "3. Paket telepon\n"
    "4. Paket sms\n"
    "5. Cek info nomor\n"
        );
    printf("Masukkan pilihan menu (1-5): "); scanf("%d", &x);
    switch (x) {
        case 1:
            printf("Anda memilih bagian 1 untuk paket promosi");
            break;
        case 2:
            printf("Anda memilih bagian 2 untuk paket internet");
            break;
        case 3:
            printf("Anda memilih bagian 3 untuk paket telepon");
            break;
        case 4:
            printf("Anda memilih bagian 4 untuk paket sms");
            break;
        case 5:
            printf("Anda memilih bagian 5 untuk cek info nomor");
            break;
        default:
            printf("Pilihan tidak tersedia");
    }

    return 0;
}</pre>
                                </div>

                                <p>
                                    Pada program di atas ditunjukkan sebuah menu pada suatu provider. Diawali dengan menunjukkan menu yang tersedia yang dapat dipilih. Kemudian user memasukkan pilihannya sesuai nomor. Ketika nomor sudah dipilih dan dimasukkan, maka program akan membandingkan nomor atau ekspresi tersebut dengan nilai pada suatu case. Jika ada, maka akan langsung menjalankan pernyataan pada case tersebut. Dan jika tidak ada, maka akan menjalankan bagian default dan program akan berhenti.
                                </p>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 30rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            Selamat datang di provider favoritmu!<br>
                                            Silahkan memilih menu pilihan Anda:<br>
                                            1. Paket promosi<br>
                                            2. Paket internet<br>
                                            3. Paket telepon<br>
                                            4. Paket sms<br>
                                            5. Cek info nomor<br>
                                            Masukkan pilihan menu (1-5): 3<br>
                                            Anda memilih bagian 3 untuk paket telepon
                                        </p>
                                    </div>
                                </div>
                                <div class="card mb-5" style="width: 30rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            Selamat datang di provider favoritmu!<br>
                                            Silahkan memilih menu pilihan Anda:<br>
                                            1. Paket promosi<br>
                                            2. Paket internet<br>
                                            3. Paket telepon<br>
                                            4. Paket sms<br>
                                            5. Cek info nomor<br>
                                            Masukkan pilihan menu (1-5): 7<br>
                                            Pilihan tidak tersedia
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    {{-- Bersarang --}}
                    <div id="nested-if">
                        <h4 class="fw-bold mt-5">Percabangan Bersarang</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Percabangan bersarang atau <i>nested if</i> digunakan ketika terdapat kondisi di dalam kondisi lainnya. Atau dalam bahasa lainnya yaitu terdapat <i>if statement</i> di dalam <i>if statement</i> lain.
                            </p>

                            <p>Percabangan bersarang dinotasikan sebagai berikut:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-3" style="width: 20rem;">
                                        <div class="card-body">
                                            <p class="font-monospace ms-5 mb-0">
                                                <b>if</b> (kondisi 1) <br>
                                                    &nbsp; <b>then</b> pernyataan 1 <br>
                                                    <br>
                                                    &nbsp;<b> if</b> (kondisi a) <br>
                                                        &nbsp; &nbsp; <b> then</b> pernyataan a <br>
                                                    &nbsp;<b> else if</b> (kondisi b) <br>
                                                        &nbsp; &nbsp;<b> then</b> pernyataan b <br>
                                                    &nbsp;<b> else</b><br>
                                                        &nbsp; &nbsp; <b> then</b> pernyataan c <br>
                                                    <br>
                                                <b>else if</b> (kondisi 2) <br>
                                                    &nbsp; <b>then</b> pernyataan 2 <br>
                                                <b>else</b><br>
                                                    &nbsp; <b>then</b> pernyataan 3 <br>
                                            </p>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <img src="/img/materi-1-g.png" alt="Contoh" width="370px" class="d-block mx-auto mt-3">
                                </div>
                            </div>

                            <p>
                                Algoritma atau urutan dari percabangan ini yaitu masuk pada kondisi pertama terlebih dahulu, ketika memenuhi syarat pada kondisi 1, maka pernyataan 1 akan dijalankan dan akan dilanjutkan ke percabangan di dalamnya, yaitu melakukan pengecekan pada kondisi a, jika memenuhi maka akan dilakukan pernyataan a, jika kondisi a tidak terpenuhi maka akan dilakukan pengecekan pada kondisi b, kemudian jika kondisi b tidak terpenuhi, maka akan ke pernyataan c. Dan jika kondisi 1 tidak terpenuhi akan dilakukan pengecekan pada kondisi 2, namun jika kondisi 2 tidak terpenuhi juga, akan dilakukan pernyataan terakhir yaitu pernyataan 3.
                            </p>

                            <br>

                            <p>Contoh pada percabangan bersarang yaitu sebagai berikut.</p>
                            <div class="editor-container mb-4" style="height: 450px">
                                <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

    int nilai, kehadiran;
    char indeks, status[20];
    printf("Masukkan nilai: "); scanf("%d", &nilai);
    printf("Masukkan jumlah kehadiran: "); scanf("%d", &kehadiran);

    if (nilai >= 75){
        indeks = "A";
        if (kehadiran == 25){
            status = "Lulus";
        }else{
            status = "Lulus Bersyarat";
        }
    }
    else{
        indeks = "C";
        status = "Gagal";
    }

    printf("Indeks nilai siswa: %s", indeks);
    printf("Status kelulusan siswa: %s", status);

    return 0;
}</pre>
                            </div>

                            <p>
                                Pada program di atas diawali dengan memasukkan nilai. Jika nilai lebih dari sama dengan 75, maka indeks akan bernilai A dan kemudian dilakukan pengecekan lagi pada kehadirannya. Jika kehadiran penuh atau 25 kehadiran, maka status akan bernilai lulus, jika tidak maka akan bernilai lulus bersyarat. Kemudian jika nilai tidak lebih dari sama dengan 75 atau tidak memenuhi kondisi pertama, maka indeks akan bernilai C dan statusnya gagal. Setelah itu akan ditampilkan indeks nilai dan status kelulusan.
                            </p>

                            <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                            <div class="card mb-3" style="width: 22rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        Masukkan nilai: 80<br>
                                        Masukkan jumlah kehadiran: 25<br>
                                        Indeks nilai siswa: A<br>
                                        Status kelulusan siswa: Lulus<br>
                                    </p>
                                </div>
                            </div>
                            <div class="card mb-5" style="width: 22rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        Masukkan nilai: 70<br>
                                        Masukkan jumlah kehadiran: 20<br>
                                        Indeks nilai siswa: C<br>
                                        Status kelulusan siswa: Gagal<br>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr>

                    {{-- Tak bersyarat --}}
                    <div id="unconditional-if">
                        <h4 class="fw-bold mt-5">Percabangan Tidak Bersyarat</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Percabangan tidak bersyarat merupakan percabangan yang tidak diharuskan melakukan pengecekan terhadap kondisi atau syarat tertentu yang memperhatikan hasil pengecekan berupa <i>true</i> atau <i>false</i> untuk menuju pernyataan yang akan dikerjakan dan akan langsung diarahkan pada labelnya.
                            </p>

                            <p>Percabangan tidak bersyarat dinotasikan sebagai berikut:</p>
                            <div class="card mb-3" style="width: 20rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-5 mb-0">
                                        <b>goto</b> label <br>
                                        <b>...</b><br>
                                        label:<br>
                                            &nbsp; pernyataan <br>
                                    </p>
                                </div>
                            </div>    
                            <p>
                                Penggunaan percabangan tidak bersyarat ini, menggunakan kode <i>goto</i> dengan diikuti label yang dapat kita tentukan sendiri penamaannya, label di sini merupakan sebuah <i>identifier</i> yang diikuti dengan tanda titik dua ( : ). Penamaan label ini harus mengikuti aturan pembuatan variabel. Sehingga, label: yaitu sebagai <i>identifier</i> dan <i>goto</i> label sebagai penggunaan <i>goto</i>.
                            </p>

                            <br>

                            <p>Contoh pada percabangan tidak bersyarat yaitu sebagai berikut.</p>
                            <div class="editor-container mb-4" style="height: 220px">
                                <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

    printf("hello rpl! \n");
    goto akhir;
    printf("tes?");

    akhir:
    printf("program berakhir");

    return 0;
}</pre>
                            </div>

                            <p>
                                Pada program di atas akan diawali dengan menampilkan tulisan hello rpl! Kemudian akan langsung ke bagian identifier, karena telah melakukan pemanggilan goto pada identifier tersebut, dan tampilan “tes?” tidak akan dijalankan. 
                            </p>

                            <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                            <div class="card mb-5" style="width: 22rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        hello rpl! <br>
                                        program berakhir
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <hr>

                    {{-- Catatan Percabangan --}}
                    <div id="note-if" class="mb-5">
                        <h4 class="fw-bold mt-5">Catatan Untuk Percabangan</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Percabangan dapat menggunakan pernyataan majemuk atau pernyataan yang lebih dari satu. Bentuk umumnya adalah sebagai berikut.
                            </p>
                            <div class="card mb-3" style="width: 20rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-5 mb-0">
                                        <b>if</b> (kondisi) <br>
                                            &nbsp; <b>then</b> pernyataan 1 <br>
                                            &nbsp; <b>then</b> pernyataan 2 <br>
                                            &nbsp; ... <br>
                                            &nbsp; ... <br>
                                            &nbsp; <b>then</b> pernyataan n <br>
                                            <b>else</b><br>
                                            &nbsp; <b>then</b> pernyataan 1 <br>
                                            &nbsp; <b>then</b> pernyataan 2 <br>
                                            &nbsp; ... <br>
                                            &nbsp; ... <br>
                                            &nbsp; <b>then</b> pernyataan n <br>
                                    </p>
                                </div>
                            </div> 
                            <p>
                                Contoh pembuatan program percabangan dengan pernyataan majemuk dengan kasus pembelian barang dengan diskon.
                            </p>
                            <div class="editor-container mb-4" style="height: 350px">
                                <pre id="editor" class="editor">#include &lt;stdio.h&gt
int main() {

    long int beli, diskon, total;
    printf("masukkan harga pembelian:"); scanf("%d", &beli);

    if (beli >= 100000){
        diskon = 0.2*beli;
        total = beli-diskon;
    }
    else {
        diskon = 0.1*beli;
        total = beli-diskon;
    }

    printf("diskon berjumlah: %ld\n", diskon);
    printf("total harga pembelian adalah: %ld\n", total);

    return 0;
}</pre>
                            </div>

                            <p>
                                Dari program di atas bisa kita pahami dari mulai memasukkan harga pembelian, setelah itu jika harga beli lebih dari sama dengan 100.000, maka akan mendapatkan diskon 20%, sehingga harga pembelian akan dikurangi dengan diskon. Dan jika harga pembelian tidak lebih dari sama dengan 100.000, maka hanya akan mendapatkan diskon 10% saja.
                            </p>

                            <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                            <div class="card mb-3" style="width: 25rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        masukkan harga pembelian: 120000 <br>
                                        diskon berjumlah: 24000<br>
                                        total harga pembelian adalah: 96000
                                    </p>
                                </div>
                            </div>
                            <div class="card mb-3" style="width: 25rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        masukkan harga pembelian: 80000 <br>
                                        diskon berjumlah: 8000<br>
                                        total harga pembelian adalah: 72000
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div id="dl-modul" class="mb-4">
                        <h5 class="fw-bold mt-5 mb-4">Unduh Modul Materi Percabangan</h5>
                        <a href="https://drive.google.com/u/0/uc?id=1HJasMP96J55tTFRQF5UZBCjSyHLf9cOa&export=download" class="btn btn-blue p-2 px-4">Unduh</a>
                    </div>

                    <div id="reference" class="mb-5 fs-6 lh-lg">
                        <h5 class="fw-bold mt-5 mb-4">Referensi</h5>
                        <p>
                            Suarga. 2012. Algoritma dan Pemrograman. Yogyakarta. Andi Offset.
                        </p>
                        <p>
                            Kristanto, Andri. 2013. Algoritma dan Pemrograman dengan C++ Edisi 3. Yogyakarta. Graha Ilmu.
                        </p>
                        <p>
                            Wahid, Fathul. 2004. Dasar-Dasar Algoritma dan Pemrograman. Yogyakarta. Penerbit Andi.
                        </p>
                        <p>
                            Sukamto, Rosa Ariani. 2010. Modul Pembelajaran Algoritma dan Pemrograman. Bandung. Modula
                        </p>
                        <p>
                            Muhardian, Ahmad. 2019. “Belajar Pemrograman C #07: Mengenal 6 Macam Bentuk Blok Percabangan”, https://www.petanikode.com/c-percabangan/
                        </p>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="sticky-top" style="top: 6rem;">
                        <p class="fs-6 text-disable">Sub Materi</p>
                        <hr>
                        <ol class="list-unstyled">
                            <li class="mb-2"><a href="#definisi" class="text-decoration-none text-muted">Definisi</a></li>
                            <li class="mb-2"><a href="#simple-nest" class="text-decoration-none text-muted">Percabangan Sederhana</a></li>
                                <li class="mb-2 ms-4"><a href="#percabangan-tunggal" class="text-decoration-none text-muted">Percabangan Tunggal</a></li>
                                <li class="mb-2 ms-4"><a href="#percabangan-ganda" class="text-decoration-none text-muted">Percabangan Ganda</a></li>
                            <li class="mb-2"><a href="#tiered-nest" class="text-decoration-none text-muted">Percabangan Bertingkat</a></li>
                                <li class="mb-2 ms-4"><a href="#perintah-pertama" class="text-decoration-none text-muted">Perintah if . . else if . . else</a></li>
                                <li class="mb-2 ms-4"><a href="#perintah-switch" class="text-decoration-none text-muted">Perintah Switch</a></li>
                            <li class="mb-2"><a href="#nested-if" class="text-decoration-none text-muted">Percabangan Bersarang</a></li>
                            <li class="mb-2"><a href="#unconditional-if" class="text-decoration-none text-muted">Percabangan Tidak Bersyarat</a></li>
                            <hr>
                            <li class="mb-2"><a href="#note-if" class="text-decoration-none text-muted">Catatan Percabangan</a></li>
                            <li class="mb-2"><a href="#dl-modul" class="text-decoration-none text-muted">Unduh Modul</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - $(".navbar").outerHeight() - 24
                    }, 0);
                }
            });
        });
    </script>
@endsection