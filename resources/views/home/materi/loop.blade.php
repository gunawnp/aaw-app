@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <div>
            <div class="card" style="background-color: #3f3d56">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ps-5">
                            <p class="fs-1 pt-3 fw-bold text-white">Struktur Perulangan</p>
                            <p class="text-white fs-6">Pada materi ini, kamu akan mempelajari materi-materi perulangan seperti for, while, do-while. Materi ini digunakan untuk melakukan perulangan suatu blok kode dalam kode program.</p>
                        </div>
                        <div class="col-md-5 mx-auto">
                            <img src="/img/materi-2.png" alt="Percabangan" width="350px" class="me-auto">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 text-justify">
                <div class="col-md-9">
                    {{-- Definisi --}}
                    <div id="definisi">
                        <h4 class="fw-bold">Definisi Struktur Perulangan</h4>
                        <div class="fs-6 lh-lg mt-3 mb-5">
                            <p>
                                Struktur perulangan atau pengulangan (loop) adalah suatu struktur yang digunakan untuk mengulangi dari suatu bagian kode tertentu berdasarkan suatu kondisi yang harus dipenuhi. Struktur pengulangan juga dapat diartikan sebagai perintah yang dapat mengulangi suatu deretan perintah lain berulang kali sesuai dengan kondisi yang sudah ditetapkan sebelumnya. Kondisi yang dibuat dapat disesuaikan dengan keinginan pembuat kode atau berdasarkan kebutuhan. Pengulangan terdiri atas kondisi, body, dan pencacah perulangan. Perulangan dapat digunakan misalnya untuk mengulang proses pemasukan data, mengulang proses perhitungan, dan mengulang proses untuk menampilkan hasil pengolahan data. 
                            </p>
                            <p>
                                Manfaat atau kegunaan dari perulangan itu sendiri adalah agar dapat memudahkan sesuatu seperti dalam pembuatan program. Banyak program yang dijalankan harus menggunakan perulangan sampai mendapatkan kondisi tertentu untuk berhenti dari perulangan. Dengan perulangan, memudahkan seorang programmer agar tidak menulis kode secara berulang dengan kode yang sama.
                            </p>

                            <p><b>Struktur Instruksi Perulangan</b></p>
                            <p>
                                Sebelum memahami jenis-jenis dalam perulangan atau penggunaan perulangan, baiknya memahami terlebih dahulu struktur instruksi perulangan. Struktur instruksi pada perulangan yaitu sebagai berikut.
                            </p>
                            <ol>
                                <li class="mb-3">
                                    Inisialisasi <br>
                                    Struktur pertama yaitu tahapan persiapan pembuatan kondisi awal sebelum melakukan pengulangan, contohnya seperti mengisi variabel dengan nilai awal. 
                                </li>
                                <li class="mb-3">
                                    Kondisi Perulangan<br>
                                    Setelah memasukkan suatu nilai pada variabel, kemudian variabel tersebut akan dicek dengan kondisi, apakah memenuhi syarat atau tidak. Kondisi ini akan menentukan perulangan untuk menjalankan pernyataan. 
                                </li>
                                <li class="mb-3">
                                    Proses<br>
                                    Struktur kedua yaitu proses. Tahapan ini berada pada bagian badan pengulangan. Di dalamnya terdapat pernyataan atau instruksi yang akan dilakukan berulang-ulang pelaksanaannya. 
                                </li>
                                <li class="mb-3">
                                    Iterasi<br>
                                    Iterasi atau pencacah perulangan yaitu suatu variabel yang nilainya berubah agar perulangan dapat terus terjadi dan memenuhi kondisi perulangan tersebut. Biasanya menggunakan increment, decrement, atau mengubah isi variabel. 
                                </li>
                                <li class="mb-3">
                                    Terminasi<br>
                                    Terminasi adalah kondisi berhenti dari suatu perulangan agar perulangannya tidak menjadi perulangan yang tanpa henti. Dengan adanya iterasi dan kondisi perulangan, nantinya terminasi dapat terjadi. Ketika iterasi pada suatu variabel telah melebihi suatu nilai pada kondisi perulangan atau bisa dikatakan tidak memenuhi kondisi perulangan, maka perulangan dapat berhenti. 
                                </li>
                            </ol>

                        </div>
                    </div>

                    <hr>

                    {{-- Sederhana --}}
                    <div id="simple-loop">
                        <h4 class="fw-bold mt-5">Perulangan Sederhana</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Pada perulangan terdapat tiga macam bentuk instruksi perulangan, yang biasa digunakan dan ditemukan dalam program, yaitu perintah perulangan for, while, dan repeat. Ketiga perintah itu dijelaskan sebagai berikut.
                            </p>

                            {{-- Perulangan for --}}
                            <div id="perulangan-for">
                                <h6 class="fw-bold mt-4">1. Perintah Perulangan For</h6>

                                <div class="row">
                                    <div class="col-md-7">
                                        <p>
                                            Perulangan <i>for</i> digunakan untuk pengulangan yang sudah mengetahui berapa kali akan mengulang suatu pernyataan atau dengan kata lain sudah jelas berapa kali pernyataan akan berulang. Perulangan <i>for</i> ini sebagai perulangan yang menggunakan penghitung (<i>counter</i>).
                                        </p>
                                        <p>Perulangan for dinotasikan sebagai berikut:</p>
                                        <div class="card mb-3" style="width: 28rem;">
                                            <div class="card-body">
                                                <p class="font-monospace ms-5 mb-0"><b>for</b> (ungkapan1; kondisi; ungkapan2) <br>&nbsp; <b>then</b> pernyataan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="/img/materi-1-h.png" alt="for" width="260px">
                                    </div>
                                </div>

                                <p>
                                    Pada notasi di atas dijelaskan bahwa:
                                </p>
                                <ol>
                                    <li>Ungkapan1 adalah inisialisasi terhadap variabel pengendali looping.</li>
                                    <li>Kondisi adalah suatu persyaratan agar perulangan masih bisa berjalan atau berhenti.</li>
                                    <li>Ungkapan2 adalah pengatur naik atau turunnya suatu nilai pada variabel pengendali perulangan.</li>
                                    <li>Pernyataan dapat memiliki banyak pernyataan atau disebut dengan pernyataan majemuk.</li>
                                </ol>

                                <br>

                                <p>Contoh penggunaan perulangan <i>for</i> yaitu sebagai berikut.</p>
                                <p><b>Contoh 1</b></p>
                                <p>Misalkan kita ingin mencetak angka dari 1 sampai 10 dengan cara perulangan <i>for</i>. Maka bentuk <i>flowchart</i> akan seperti ini.</p>
                                <img src="/img/materi-1-i.png" alt="Contoh 1" width="270px" class="d-block mx-auto">
                                <p>Dari <i>flowchart</i> di atas dijelaskan langkah-langkahnya sebagai berikut.</p>
                                <ol>
                                    <li>Dimulai dengan pembuatan sebuah variabel dengan nama i.</li>
                                    <li>Kemudian masuk pada perintah perulangan for. Tahapan pertama ini yaitu inisialisasi, pemberian nilai 1 pada variabel i.</li>
                                    <li>Kemudian dilakukan pengecekan pada kondisinya, kondisi di sini yaitu i harus kurang dari sama dengan 10, berhubung variabel i bernilai 1 maka kondisi terpenuhi dan akan mengerjakan pernyataan.</li>
                                    <li>Pernyataan yang dikerjakan yaitu mencetak variabel i. Langkah ini termasuk pada bagian proses.</li>
                                    <li>Langkah berikutnya variabel i berubah, pada kasus ini variabel i bertambah 1 angka pada nilainya. Sehingga, variabel i sekarang bernilai 2. Pada tahapan ini disebut dengan iterasi.</li>
                                    <li>Selanjutnya akan terus berulang dengan cara yang sama dari langkah c - e.</li>
                                    <li>Hingga pada akhirnya variabel i akan bernilai 11, dari sini variabel i tidak memenuhi kondisi, kemudian perulangan akan berhenti dan pernyataan tidak akan dilaksanakan.</li>
                                </ol>

                                <p>Algoritma program di atas jika ditulis dalam bahasa pemrograman Java adalah sebagai berikut.</p>
                                <div class="editor-container mb-4" style="height: 160px">
                                    <pre id="editor" class="editor">
public class Main {
   public static void main(String[] args) {
      for (int i = 1; i <= 10; i++) {
         System.out.println(i);
      }
   }
}
                                    </pre>
                                </div>

                                <div class="card mb-3" style="width: 15rem;">
                                    <div class="card-body">
                                        <p class="ms-3 mb-0">
                                            Catatan: <br>
                                            i = i + 1;<br>
                                            sama juga dengan<br>
                                            i++;
                                        </p>
                                    </div>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            1<br>
                                            2<br>
                                            3<br>
                                            4<br>
                                            5<br>
                                            6<br>
                                            7<br>
                                            8<br>
                                            9<br>
                                            10<br>
                                        </p>
                                    </div>
                                </div>

                                <p><b>Contoh 2</b></p>
                                <p>Pada contoh sebelumnya, digunakan iterasi variabel naik. Bagaimana jika kita menginginkan iterasi turun? Caranya kurang lebih sama, namun ada perbedaan pada bagian inisialisasi, kondisi/batas, dan iterasinya. Untuk lebih jelasnya perhatikan contoh berikut.</p>
                                <div class="editor-container mb-4" style="height: 160px">
                                    <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        for(int i=10; i>=1; i--){
            System.out.println(i);
        }
    }
}
                                    </pre>
                                </div>

                                <div class="card mb-3" style="width: 15rem;">
                                    <div class="card-body">
                                        <p class="ms-3 mb-0">
                                            Catatan: <br>
                                            i = i - 1;<br>
                                            sama juga dengan<br>
                                            i--;
                                        </p>
                                    </div>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            10<br>
                                            9<br>
                                            8<br>
                                            7<br>
                                            6<br>
                                            5<br>
                                            4<br>
                                            3<br>
                                            2<br>
                                            1<br>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh di atas diawali dengan inisialisasi variabel i dengan nilai 10, kemudian kondisinya juga menyesuaikan yaitu i lebih dari sama dengan 1. Alasannya karena iterasi akan menurun atau decrement.
                                </p>

                                <p><b>Contoh 3</b></p>
                                <p>Jika kita menginginkan mencetak tulisan yang sama sebanyak 10 buah, maka kita dapat ubah pernyataannya.</p>
                                <div class="editor-container mb-4" style="height: 150px">
                                    <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        for(int i=1; i<=10; i++){
            System.out.println("Belajar perulangan");
        }
    }
}                            
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 15rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            Belajar perulangan <br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                            Belajar perulangan<br>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh di atas sebenarnya sama seperti contoh pada nomor 1, hanya pada tulisan yang dicetak tidak mencetak variabel i, namun mencetak tulisan “Belajar perulangan”.
                                </p>

                                <p><b>Contoh 4</b></p>
                                <p>Contoh selanjutnya yaitu, bagaimana jika kita menginginkan batas perulangan sesuai dengan yang kita input ke dalam suatu variabel. Maka dari itu perhatikanlah algoritma program berikut ini.</p>
                                <div class="editor-container mb-4" style="height: 250px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int i, j;
        Scanner input = new Scanner(System.in);
        System.out.print("Masukkan batas: ");
        j = input.nextInt();
        for(i=1; i<=j; i++){
            System.out.println(i);
        }
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                           masukkan batas: 8 <br>
                                           1 <br>
                                           2 <br>
                                           3 <br>
                                           4 <br>
                                           5 <br>
                                           6 <br>
                                           7 <br>
                                           8 <br>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus ini, yang menjadi perbedaan yaitu terdapat sebuah masukkan yang diinisialisasikan ke dalam variabel j. Variabel tersebut kemudian berperan sebagai batas pada kondisi pada perulangannya, sehingga perulangan akan berjalan hingga batas yang ditentukan pada masukkan.
                                </p>

                                <p><b>Contoh 5</b></p>
                                <p>Contoh selanjutnya yaitu membuat sebuah algoritma yang menghitung nilai rata dari bilangan yang diinputkan dan sebanyak n yang diinputkan pula ke dalam suatu variabel.</p>
                                <div class="editor-container mb-4" style="height: 390px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int i, j;
        float rata, nilai, jumlah;

        Scanner input = new Scanner(System.in);
        System.out.print("masukkan banyak bilangan: ");
        j = input.nextInt();

        jumlah = 0;
        for(i=1; i<=j; i++){
            System.out.print("masukkan bilangan ke-" + i + ": ");
            nilai = input.nextFloat();
            jumlah = jumlah + nilai;
        }

        rata = jumlah/j;
        System.out.print("rata-rata: " + rata);
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            masukkan banyak bilangan: 6 <br>
                                            masukkan bilangan ke-1: 3<br>
                                            masukkan bilangan ke-2: 6<br>
                                            masukkan bilangan ke-3: 1<br>
                                            masukkan bilangan ke-4: 4<br>
                                            masukkan bilangan ke-5: 8<br>
                                            masukkan bilangan ke-6: 9<br>
                                            rata-rata: 5.166667
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus pada program di atas yaitu sebagai berikut.
                                </p>
                                <ol>
                                    <li>Dimulai dari penambahan variabel. Variabel yang ditambahkan bertipe data float yaitu rata, nilai, dan jumlah.</li>
                                    <li>Kemudian memasukkan sebuah nilai pada variabel j yang digunakan sebagai batas perulangan atau sebagai penentu banyaknya jumlah bilangan.</li>
                                    <li>Selanjutnya menginisialisasikan variabel jumlah dengan nilai 0 yang berfungsi sebagai penampung atau penghitung data untuk tahap selanjutnya.</li>
                                    <li>Memasuki perulangan for dengan mempunyai inisialisasi perulangan pada variabel i dengan nilai 1, memiliki kondisi dengan batas yang dimasukkan yaitu variabel j, dan memiliki iterasi increment atau meningkat.</li>
                                    <li>Dilakukanlah perulangan dan memasuki pernyataan yang berada pada perulangan. Pernyataan pertama yaitu meminta pengguna untuk memasukkan sebuah bilangan, kemudian bilangan tersebut akan ditampung dan dijumlahkan pada variabel jumlah.</li>
                                    <li>Perulangan terus dilakukan dan menjalankan pernyataan yang berada pada poin sebelumnya. Setelah variabel i tidak memenuhi kondisi lagi, maka perulangan akan berhenti kemudian menghitung rata dari jumlah dibagi dengan banyak bilangan atau disebut dengan variabel j.</li>
                                    <li>Diakhiri dengan menampilkan jumlah rata yang didapatkan.</li>
                                </ol>

                            </div>
                            <div id="perulangan-while">
                                {{-- perulangan while --}}
                                <h6 class="fw-bold mt-5">2. Perintah Perulangan While</h6>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p>
                                            Pengulangan while atau bisa juga disebut dengan while-do digunakan untuk pengulangan yang memperhatikan kondisi tertentu. Pada perulangan ini membutuhkan iterasi atau perubahan kondisi agar perulangan bisa berjalan dan bisa berhenti ketika menemukan suatu kondisi yang membuat perulangan berhenti. Jadi perbedaan for dengan while terdapat pada kondisinya.
                                        </p>
                                        <p>Untuk gambaran flowchart pada while tidak jauh berbeda dengan for. Bedanya terdapat pada variabel awal yang dimiliki oleh for.</p>
                                        <div class="card mb-3" style="width: 28rem;">
                                            <div class="card-body">
                                                <p class="font-monospace ms-5 mb-0"><b>while</b> (kondisi) <br>&nbsp; <b>then</b> pernyataan <br>&nbsp; iterasi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="/img/materi-1-j.png" alt="for" width="260px">
                                    </div>
                                </div>

                                <p>
                                    Pada notasi di atas dijelaskan bahwa:
                                </p>
                                <ol>
                                    <li>Kondisi pada <i>while</i> adalah suatu persyaratan agar pernyataan dan iterasi dapat dijalankan. Ketika kondisi terpenuhi maka akan dapat berulang, namun ketika tidak memenuhi perulangan akan berhenti.</li>
                                    <li>Pernyataan untuk <i>while</i> juga dapat memiliki pernyataan majemuk.</li>
                                    <li>Iterasi pada <i>while</i> yaitu pengatur agar dapat memperhatikan kondisi, ketika masih memenuhi maka perulangan akan terus berjalan, dan dengan iterasi perulangan dapat berhenti karena variabel tidak memenuhi kondisinya.</li>
                                </ol>

                                <br>

                                <p>Contoh penggunaan perulangan <i>while</i> yaitu sebagai berikut.</p>
                                <p><b>Contoh 1</b></p>
                                <p>Pada contoh pertama, mari kita gunakan contoh 1 pada perulangan <i>for</i> sehingga jika dituliskan algoritma programnya dalam bahasa pemrograman Java akan seperti berikut ini.</p>
                                
                                <div class="editor-container mb-4" style="height: 180px">
                                    <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        int i = 1;
        while(i<=10){
            System.out.println(i);
            i++;
        }
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            1<br>
                                            2<br>
                                            3<br>
                                            4<br>
                                            5<br>
                                            6<br>
                                            7<br>
                                            8<br>
                                            9<br>
                                            10<br>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus seperti ini maka program akan sama dan hanya memiliki perbedaan penulisan kode saja. Namun untuk lebih jelasnya, perhatikan poin-poin berikut ini.
                                </p>
                                <ol>
                                    <li>Kode tersebut diawali dengan inisialisasi variabel i dengan nilai 1.</li>
                                    <li>Kemudian memasuki while dan dilakukan pengecekan pada kondisinya, ketika memenuhi yaitu i kurang dari sama dengan 10, maka pernyataan di dalamnya akan dijalankan.</li>
                                    <li>Pada pernyataan selanjutnya, dilakukan increment atau iterasi agar variabel ‘i” dapat berubah atau pada kasus ini agar bertambah.</li>
                                    <li>Kemudian dilakukan pengecekan perulangan kembali pada kondisi. Jika masih memenuhi kondisi, perulangan akan terus berjalan hingga kondisi tidak memenuhi dan perulangan akan berhenti.</li>
                                </ol>

                                <p><b>Contoh 2</b></p>
                                <p>Contoh 2 untuk lebih memperjelas bagaimana penggunaan while, mari kita pahami contoh ini yang bersumber dari website petanikode.</p>
                                <div class="editor-container mb-4" style="height: 500px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class PerulanganWhile {
    public static void main(String[] args) {

	    // membuat variabel dan scanner
        boolean running = true;
        int counter = 0;
        String jawab;
        Scanner scan = new Scanner(System.in);

        while( running ) {
            System.out.println("Apakah anda ingin keluar?");
            System.out.print("Jawab [ya/tidak]> ");

            jawab = scan.nextLine();

            // cek jawabnnya, kalau ya maka berhenti mengulang
            if( jawab.equalsIgnoreCase("ya") ){
                running = false;
            }

            counter++;
        }
        System.out.println("Anda sudah melakukan perulangan sebanyak " + counter + " kali");

    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 23rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> tidak<br>
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> tidak<br>
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> ya<br>
                                            Anda sudah melakukan perulangan sebanyak 3 kali
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus ini, dijelaskan pada poin-poin berikut ini.
                                </p>
                                <ol>
                                    <li>Diawali dengan pendeklarasian variabel-variabel yang dibutuhkan.</li>
                                    <li>Kondisi yang berada pada while berupa pemeriksaan kondisi yang membandingkan antara variabel jawab dengan string “ya”.</li>
                                    <li>Kemudian pernyataan di dalamnya berisi masukkan/input yang harus diisi dengan “ya” atau “tidak”.</li>
                                    <li>variabel yang diisi ini bernilai ya maka kondisi memenuhi dan akan terus dilakukan perulangan. Namun jika variabel tersebut diisi “tidak”, maka tidak memenuhi kondisi dan akan keluar dari perulangan.</li>
                                    <li>Selain itu, pada pernyataan terdapat variabel “counter” yang digunakan sebagai pengihitung, sehingga ketika kita memenuhi syarat yang harus dipenuhi pada kondisi, “counter” akan menghitung berapa kali memenuhi syarat atau berapa kali kita telah melakukan perulangan.</li>
                                    <li>Diakhiri dengan pencetakan perulangan telah selesai dan memberikan jumlah hasil berapa kali telah melakukan perulangan.</li>
                                </ol>
                            </div>

                            <div id="perulangan-repeat">
                                {{-- perulangan repeat --}}
                                <h6 class="fw-bold mt-5">3. Perintah Perulangan Repeat</h6>
                                <div class="row">
                                    <div class="col-md-7">
                                        <p>
                                            Perintah perulangan repeat atau do-while sama halnya seperti perulangan while-do. Perbedaan antara do-while/repeat dengan while-do adalah perulangan do-while akan melakukan perulangan satu kali terlebih dahulu sebelum melaksanakan perulangan. Setelah itu memeriksa kondisi yang berada pada while. 
                                            Untuk gambaran flowchart pada repeat tidak berbeda jauh dengan while, hanya saja terdapat perbedaan penempatan pada pengerjaan pernyataan dan kondisi perulangan.
                                        </p>
                                        <div class="card mb-3" style="width: 28rem;">
                                            <div class="card-body">
                                                <p class="font-monospace ms-5 mb-0">
                                                    <b>do</b> <br>
                                                        &nbsp; <b>then</b> pernyataan <br>
                                                        &nbsp; iterasi <br>
                                                    <b>while</b> (kondisi) <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="/img/materi-2-d.png" alt="repeat" width="180px">
                                    </div>
                                </div>

                                <p>
                                    Pada notasi di atas dijelaskan bahwa notasi pada repeat hampir sama dengan while, perbedaan hanya terdapat perintah do terlebih dahulu dan menjalankan perintah serta iterasinya. Setelah itu baru memeriksa kondisi.
                                </p>
                                <p>
                                    Perbedaan lebih jelasnya antara while dengan repeat yaitu “perulangan repeat akan memeriksa kondisi setelah dilakukan pernyataan pada pengulangan, sedangkan while akan memeriksa kondisi pada awal kali kode berjalan atau sebelum pernyataan pada pengulangan dijalankan”. Hal ini bisa dianalogikan sebagai “pos satpam”. Pada while, pos satpam diletakan di gerbang depan saja saat masuk untuk dilakukan pemeriksaan, namun pada repeat, pos satpam diletakkan di gerbang belakang saja saat keluar untuk melakukan pemeriksaan.
                                </p>

                                <br>

                                <p>Agar lebih jelas bagaimana penggunaan repeat, perhatikan contoh berikut.</p>
                                <p><b>Contoh 1</b></p>
                                <p>Untuk contoh pertama, seperti biasa kita akan mencoba algoritma program sederhana seperti contoh pada materi perulangan sebelumnya. Perhatikanlah algoritma program berikut yang menggunakan bahasa pemrograman Java.</p>
                                
                                <div class="editor-container mb-4" style="height: 210px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int i = 1;
        do {
            System.out.printf("angka ke-%d\n", i);
            i++;
        } while (i <= 10);
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            angka ke-1 <br>
                                            angka ke-2<br>
                                            angka ke-3<br>
                                            angka ke-4<br>
                                            angka ke-5<br>
                                            angka ke-6<br>
                                            angka ke-7<br>
                                            angka ke-8<br>
                                            angka ke-9<br>
                                            angka ke-10<br>
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus di atas langkah-langkah yang dijalankan yaitu:
                                </p>
                                <ol>
                                    <li>Mendeklarasikan dan menginisialisasikan variabel i dengan nilai 1.</li>
                                    <li>Memasuki perulangan dengan langsung menjalankan perintah awal, yaitu mencetak “angka ke-“ diikuti dengan angka dari variabel i. </li>
                                    <li>Selanjutnya menjalankan perintah increment pada variabel i.</li>
                                    <li>Setelah pernyataan dan iterasi selesai, selanjutnya dilakukan pemeriksaan, jika masih memenuhi kondisi maka perulangan akan dilanjutkan.</li>
                                    <li>Ketika kondisi tidak terpenuhi maka perulangan akan berhenti.</li>
                                </ol>

                                <p><b>Contoh 2</b></p>
                                <p>Pada contoh kedua kita akan membuat program untuk membuat deret dengan kelipatan 5. Perhatikan algoritma program berikut dalam bahasa pemrograman Java.</p>
                                <div class="editor-container mb-4" style="height: 210px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        int i = 1;
        do {
            System.out.print(i * 5 + " ");
            i++;
        } while (i <= 5);
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            5 &nbsp; 10 &nbsp; 15 &nbsp; 20 &nbsp; 25
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus di atas langkah-langkah program repeat yaitu sebagai berikut.
                                </p>
                                <ol>
                                    <li>Diawali dengan melakukan pernyataannya terlebih dahulu atau melakukan pernyataan perulangannya terlebih dahulu satu kali, yang di dalamnya mencetak variabel i yang dikali dengan angka 5 sehingga menghasilkan nilai 5. </li>
                                    <li>Kemudian dilakukan iterasi increment, variabel i yang awalnya 1 sekarang bernilai 2.</li>
                                    <li>Dilakukan pemeriksaan kondisi, apakah i kurang dari sama dengan 5, jika masih memenuhi maka perulangan akan berlanjut.</li>
                                    <li>Sekarang variabel i sudah bernilai 2 maka yang akan dicetak 2 dikali 5 yaitu 10, kemudian dilakukan lagi increment pada variabel i, begitu seterusnya sampai variabel i tidak memenuhi kondisi perulangan. Dan dihasilkan angka kelipatan 5.</li>
                                </ol>

                                <p><b>Contoh 3</b></p>
                                <p>Untuk membuktikan apakah memang benar repeat akan menjalankan pernyataan dalam perulangannya terlebih dahulu satu kali? Untuk membuktikannya, perhatikan contoh berikut.</p>
                                
                                <div class="editor-container mb-4" style="height: 180px">
                                    <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        int i = 8;
        do {
            System.out.print(i * 2 + " ");
            i++;
        } while (i <= 4);
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 18rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            16
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh di atas dapat dibuktikan jika perulangan repeat akan mengerjakan pernyataan perulangan terlebih dahulu satu kali.
                                </p>
                                <ol>
                                    <li>
                                        Pertama kita memiliki variabel i bernilai 8 kemudian dilakukan pengerjaan pernyataan yaitu pencetakan i dikalikan dengan 2, maka mendapatkan hasil 16, dan hasil itu di cetak.
                                    </li>
                                    <li>
                                        Kemudian dilakukan iterasi, variabel i dari 8 sekarang menjadi 9.
                                    </li>
                                    <li>
                                        Dilakukan pemeriksaan kondisi, dan karena variabel 8 tidak kurang dari sama dengan 4, maka kondisi tidak memenuhi maka perulangan akan berhenti.
                                    </li>
                                </ol>

                                <p><b>Contoh 4</b></p>
                                <p>Selanjutnya kita akan menggunakan contoh pada materi while namun diimplementasikan pada materi repeat.</p>
                                <div class="editor-container mb-4" style="height: 500px">
                                    <pre id="editor" class="editor">
import java.util.Scanner;

public class PerulanganWhile {
    public static void main(String[] args) {

	    // membuat variabel dan scanner
        boolean running;
        int counter = 0;
        String jawab;
        Scanner scan = new Scanner(System.in);

        do {
        System.out.println("Apakah anda ingin keluar?");
        System.out.print("Jawab [ya/tidak]> ");
        jawab = scan.nextLine();

        // cek jawabnnya, kalau ya maka berhenti	mengulang
        if( jawab.equalsIgnoreCase("ya") ){
            running = false;
        } else {
            running = true;
        }

        counter++;
        } while( running );
	    System.out.println("Anda sudah melakukan perulangan sebanyak " + counter + " kali");
    }
}
                                    </pre>
                                </div>

                                <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                                <div class="card mb-3" style="width: 23rem;">
                                    <div class="card-body">
                                        <p class="font-monospace ms-3 mb-0">
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> tidak<br>
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> tidak<br>
                                            Apakah anda ingin keluar? <br>
                                            Jawab [ya/tidak]> ya<br>
                                            Anda sudah melakukan perulangan sebanyak 3 kali
                                        </p>
                                    </div>
                                </div>
                                <p>
                                    Pada contoh kasus ini pada dasarnya sama, untuk menghitung berapa banyak perulangan akan dilakukan seperti pada contoh 2 di materi while. Algoritma kode ini juga hampir sama dengan while, untuk lebih jelasnya perhatikan poin-poin berikut ini.
                                </p>
                                <ol class="mb-5">
                                    <li>Penulisan kode pada perulangan repeat terdapat kode do. Kode ini akan dilaksanakan terlebih dahulu, menjalankan perintah pada perulangan yaitu pernyataan dan iterasi.</li>
                                    <li>Setelah itu, baru dilakukan pemeriksaan pada while untuk memeriksa variabel ulangi, ketika memenuhi, akan kembali ke bagian do yaitu menjalankan perulangannya. Jika tidak memenuhi, maka akan keluar dari perulangan.</li>
                                </ol>
                            </div>

                        </div>
                    </div>

                    <hr>

                    {{-- Bersarang --}}
                    <div id="loop-nest">
                        <h4 class="fw-bold mt-5">Perulangan Bersarang</h4>
                        <div class="fs-6 lh-lg mt-4">
                            <p>
                                Perulangan bersarang atau <i>nested loop</i> terkadang memang dibutuhkan karena suatu kasus tertentu. Perulangan bersarang diartikan sebagai perulangan dalam perulangan. Sebuah program dalam komputer tidak melarang penggunaan perulangan menjadi bersarang.  Penggunaan perulangan bersarang ini dapat kita atur sendiri mau seperti apa, contohnya <i>for</i> di dalam <i>for</i>, <i>for</i> di dalam <i>while</i>, <i>while</i> di dalam <i>repeat</i>, dan sebagainya tergantung kebutuhan dan kondisi pada suatu kasus. Perulangan bersarang dapat dinotasikan pada contoh berikut ini.
                            </p>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card mb-3" style="width: 15rem;">
                                        <div class="card-body">
                                            <p class="font-monospace ms-5 mb-0">
                                                perulangan { <br>
                                                    &nbsp; ... <br>
                                                    &nbsp; perulangan { <br>
                                                        &nbsp; &nbsp;... <br>
                                                    &nbsp; } <br>
                                                }
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3" style="width: 25rem;">
                                        <div class="card-body">
                                            <p class="font-monospace ms-5 mb-0">
                                                for(inisialisasi;kondisi;iterasi) {<br>
                                                    &nbsp; &nbsp; ...<br>
                                                        &nbsp; &nbsp; while(kondisi) {<br>
                                                            &nbsp; &nbsp; &nbsp; &nbsp;...<br>
                                                        &nbsp; &nbsp; } <br>
                                                    &nbsp;}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p>
                                Pada contoh notasi di atas dijelaskan bahwa pada terdapat perulangan for yang di dalamnya terdapat perulangan while. Dan pada masing-masing perulangan dapat memiliki pernyataan atau tidak, tergantung kebutuhan.
                            </p>
                            <p><b>Catatan:</b></p>
                            <p>
                                Penempatan, penggunaan, banyaknya, atau jenis perulangan disesuaikan dengan kebutuhan program atau keinginan kita sebagai pembuat program. Pada notasi di atas hanya contoh. Bahkan jika kita ingin membuat perulangan bersarang sampai dua atau lebih perulangan pun bisa.
                            </p>
                            <img src="/img/materi-2-e.png" alt="Contoh" width="390px" class="d-block mx-auto my-3">
                            <p>
                                Flowchart di atas adalah suatu gambaran pada tiga perulangan bersarang, jika kita perhatikan alurnya akan berbentuk seperti ini.
                            </p>
                            <ol>
                                <li>Pertama akan dilakukan pemeriksaan pada kondisi perulangan ke 1. Jika memenuhi persyaratan maka akan menjalankan pernyataan dan perulangan di dalamnya yaitu perulangan ke 2. Jika tidak maka akan langsung keluar dari perulangan.</li>
                                <li>Selanjutnya memeriksa perulangan ke 2, jika memenuhi syarat maka akan berlanjut melaksanakan pernyataan di dalamnya. Jika tidak memenuhi, maka akan kembali ke perulangan ke 1.</li>
                            </ol>

                            <p>Contoh pada perulangan bersarang yaitu sebagai berikut.</p>
                            <p><b>Contoh 1</b></p>
                            <p>Untuk contoh pertama, mari kita buat contoh yang sederhana, perhatikan algoritma program dalam bahasa pemrograman Java sebagai berikut.</p>
                            
                            <div class="editor-container mb-4" style="height: 180px">
                                <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        for(int x = 1; x < 4; x++){
            for(int y = 1; y < 4; y++){
                System.out.printf("perulangan ke (%d, %d)\n", x, y);
            }
        }
    }
}
                                </pre>
                            </div>

                            <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                            <div class="card mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        perulangan ke (1, 1) <br>
                                        perulangan ke (1, 2) <br>
                                        perulangan ke (1, 3) <br>
                                        perulangan ke (2, 1) <br>
                                        perulangan ke (2, 2) <br>
                                        perulangan ke (2, 3) <br>
                                        perulangan ke (3, 1) <br>
                                        perulangan ke (3, 2) <br>
                                        perulangan ke (3, 3) <br>
                                    </p>
                                </div>
                            </div>
                            <p>
                                Pada contoh kasus ini kita memiliki dua perulangan for dan dua variabel yaitu x dan y.
                            </p>
                            <ol>
                                <li>Pertama kali dijalankan yaitu perulangan pertama. Di sini kita memiliki variabel x dengan nilai 1.</li>
                                <li>Kemudian dilanjutkan pada perulangan selanjutnya yang di dalam perulangan pertama.</li>
                                <li>Pada perulangan ke dua kita memiliki variabel y dengan nilai 1. Dilanjutkan menjalankan pernyataan, yaitu mencetak ”perulangan ke (x, y)”. Karena memiliki x = 1 dan y = 1, maka akan dicetak “perulangan ke (1, 1).</li>
                                <li>Selanjutnya dilakukan iterasi pada perulangan ke dua dan dilakukan pencetakan dengan mengikuti nilai variabel y. Sehingga terbentuklah hasil seperti pada baris ke 1 sampai ke 3 di atas.</li>
                                <li>Ketika variabel y sudah tidak memenuhi kondisi perulangan ke dua, maka akan kembali ke perulangan pertama dan dilakukan iterasi, sehingga nilai x sekarang bernilai 2. Kemudian dilanjutkan ke dalam perulangan ke dua, begitu seterusnya hingga mendapatkan hasil seperti di atas.</li>
                            </ol>

                            <p><b>Contoh 2</b></p>
                            <p>Contoh kedua, kita akan membuat perkalian dari 3 dan 4, perhatikan algoritma program dalam bahasa pemrograman Java sebagai berikut.</p>
                            <div class="editor-container mb-4" style="height: 210px">
                                <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        for(int x = 3; x <= 4; x++){
            for(int y = 1; y <= 10; y++){
                System.out.printf("%d x %d = %d\n", x, y, x*y);
            }
            System.out.println("-------------");
        }
    }
}
                                </pre>
                            </div>

                            <p>Jika program dijalankan, hasilnya akan seperti berikut:</p>
                            <div class="card mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <p class="font-monospace ms-3 mb-0">
                                        3 x 1 = 3 <br>
                                        3 x 2 = 6 <br>
                                        3 x 3 = 9 <br>
                                        3 x 4 = 12 <br>
                                        3 x 5 = 15 <br>
                                        3 x 6 = 18 <br>
                                        3 x 7 = 21 <br>
                                        3 x 8 = 24 <br>
                                        3 x 9 = 27 <br>
                                        3 x 10 = 30 <br>
                                        ------------- <br>
                                        4 x 1 = 4 <br>
                                        4 x 2 = 8 <br>
                                        4 x 3 = 12 <br>
                                        4 x 4 = 16 <br>
                                        4 x 5 = 20 <br>
                                        4 x 6 = 24 <br>
                                        4 x 7 = 28 <br>
                                        4 x 8 = 32 <br>
                                        4 x 9 = 36 <br>
                                        4 x 10 = 40 <br>
                                        -------------
                                    </p>
                                </div>
                            </div>
                            <p>
                                Pada contoh kasus di atas hampir sama dengan contoh sebelumnya, yang berbeda yaitu kita mengganti nilai awal variabel x yaitu 3 dan batas atau kondisi variabel y dengan kurang dari sama dengan 4. Kemudian pada pencetakan tidak hanya mencetak x dan y saja, tetapi menambahkan satu nilai dari perkalian x dengan y.
                            </p>
                            <ol>
                                <li>Pertama kali dijalankan yaitu perulangan pertama. Di sini kita memiliki variabel x dengan nilai 3. </li>
                                <li>Dilanjutkan pada perulangan selanjutnya yang di dalam perulangan pertama.</li>
                                <li>Pada perulangan ke dua kita memiliki variabel y dengan nilai 1. Dilanjutkan menjalankan pernyataan, yaitu mencetak ”x × y = x*y”. Karena memiliki x = 3 dan y = 1, maka akan dicetak “3 × 1 = 3”.</li>
                                <li>Selanjutnya dilakukan iterasi pada perulangan ke dua dan dilakukan pencetakan dengan mengikuti nilai variabel y. Sehingga terbentuklah hasil seperti hasil cetak di atas.</li>
                                <li>Ketika variabel y sudah tidak memenuhi kondisi perulangan ke dua, maka akan kembali ke perulangan pertama dan dilakukan iterasi, sehingga nilai x sekarang bernilai 4. Kemudian dilanjutkan ke dalam perulangan ke dua, begitu seterusnya hingga mendapatkan hasil seperti hasil cetak di atas.</li>
                            </ol>

                            <p><b>Contoh 3</b></p>
                            <p>Bagaimana jika kita menggunakan contoh di atas, namun menggunakan perulangan while, perhatikan algoritma program dalam bahasa pemrograman Java sebagai berikut dan hasilnya akan sama, algoritma programnya hanya sedikit modifikasi kode saja.</p>
                            
                            <div class="editor-container mb-5" style="height: 280px">
                                <pre id="editor" class="editor">
public class Main {
    public static void main(String[] args) {
        int x = 3;
        while (x <= 4) {
            int y = 1;
            while (y <= 10) {
                System.out.print("%d x %d = %d\n", x, y, x*y);
                y++;
            }
            x++;
            System.out.println("-------------");
        }
    }
}
                                </pre>
                            </div>

                        </div>
                    </div>

                    <hr>

                    <div id="exercise" class="mb-5 text-center">
                        <h5 class="fw-bold mt-5 mb-4">Halaman Kerja Materi Perulangan</h5>
                        <a href="/home/materi/perulangan/exercise" class="btn btn-blue p-3 px-5">Mulai</a>
                    </div>

                    <hr>

                    <div id="dl-modul" class="mb-4">
                        <h5 class="fw-bold mt-5 mb-4">Unduh Modul Materi Perulangan</h5>
                        <a href="https://drive.google.com/u/0/uc?id=18cHUFX8FJ4F5ANGo-ySXY8Dhh_6A5MJy&export=download" class="btn btn-blue p-2 px-4">Unduh</a>
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
                            Muhardian, Ahmad. 2019. “Belajar Pemrograman C #08: Memahami Blok Perulangan pada C”, https://www.petanikode.com/c-perulangan/
                        </p>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="sticky-top" style="top: 6rem;">
                        <p class="fs-6 text-disable">Sub Materi</p>
                        <hr>
                        <ol class="list-unstyled">
                            <li class="mb-2"><a href="#definisi" class="text-decoration-none text-muted">Definisi</a></li>
                            <li class="mb-2"><a href="#simple-loop" class="text-decoration-none text-muted">Perulangan Sederhana</a></li>

                                <li class="mb-2 ms-4"><a href="#perulangan-for" class="text-decoration-none text-muted">Perulangan For</a></li>
                                <li class="mb-2 ms-4"><a href="#perulangan-while" class="text-decoration-none text-muted">Perulangan While</a></li>
                                <li class="mb-2 ms-4"><a href="#perulangan-repeat" class="text-decoration-none text-muted">Perulangan Repeat</a></li>
                            
                            <li class="mb-2"><a href="#loop-nest" class="text-decoration-none text-muted">Perulangan Bersarang</a></li>
                                
                            <hr>
                            
                            <li class="mb-2"><a href="#exercise" class="text-decoration-none text-muted">Halaman Kerja</a></li>
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