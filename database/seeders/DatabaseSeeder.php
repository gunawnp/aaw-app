<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Logic;
use App\Models\Style;
use App\Models\Answer;
use App\Models\Maintest;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User - membuat 5 akun, dan 1 akun tambahan awanntama
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Awann Tama',
            'username' => 'awanntama',
            'email' => 'awanntama@gmail.com',
        ]);

        //Style - membuat soal-soal gaya belajar
        Style::create([
            'que' => 'Saya memiliki keyakinan yang kuat mengenai apa yang benar dan salah, baik dan buruk.',
            'activist' => '2,4,6,10,17,23,24,32,34,38,40,43,45,48,58,64,71,72,74,79',
            'reflector' => '7,13,15,16,25,28,29,31,33,36,39,41,46,52,55,60,62,66,67,76',
            'theorist' => '1,3,8,12,14,18,20,22,26,30,42,47,51,57,61,63,68,75,77,78',
            'pragmatist' => '5,9,11,19,21,27,35,37,44,49,50,53,54,56,59,65,69,70,73,80',
            'title_style' => 'Divergers',
            'cap_style' => '(Concrete experiencer/Reflective observer)',
            'desc_style' => 'Siswa yang suka belajar dengan mengeksplorasi ide-ide dan mengejar berbagai pengalaman yang nyata. Mereka lebih cocok untuk belajar dengan metode yang mengutamakan kreativitas dan pengalaman dan keterlibatan dalam aktivitas. Divergers seringkali diidentifikasikan sebagai Activists.',

        ]);
        Style::create([
            'que' => 'Saya sering bertindak tanpa mempertimbangkan konsekuensi yang mungkin terjadi.',
            'title_style' => 'Assimilators',
            'cap_style' => '(Abstract conceptualiser/Reflective observer)',
            'desc_style' => 'Siswa yang suka belajar dengan mengintegrasikan informasi baru dengan pengetahuan yang sudah ada. Mereka lebih cocok untuk belajar dengan metode yang mengutamakan teori dan konseptualisasi. Assimilators seringkali diidentifikasikan sebagai Reflectors.',

        ]);
        Style::create([
            'que' => 'Saya cenderung menyelesaikan permasalahan dengan pendekatan langkah demi langkah.',
            'title_style' => 'Convergers',
            'cap_style' => '(Abstract conceptualization/Active experimenter)',
            'desc_style' => 'Siswa yang suka belajar dengan mencari solusi atas masalah-masalah spesifik. Mereka lebih cocok untuk belajar dengan metode yang mengutamakan analisis dan logika. Convergers seringkali diidentifikasikan sebagai Theorists.',

        ]);
        Style::create([
            'que' => 'Saya percaya bahwa prosedur dan kebijakan formal membatasi orang.',
            'title_style' => 'Accomodators',
            'cap_style' => '(Concrete experiencer/Active experimenter)',
            'desc_style' => 'Siswa yang suka belajar dengan mencoba dan mengaplikasikan konsep baru dalam situasi nyata. Mereka lebih cocok untuk belajar dengan metode yang mengutamakan praktik dan tindakan. Accomodators seringkali diidentifikasikan sebagai Pragmatists.',

        ]);
        Style::create(['que' => 'Saya memiliki reputasi untuk mengatakan apa yang saya pikirkan, secara sederhana dan langsung.']);
        Style::create(['que' => 'Saya biasa mendapati tindakan yang berdasarkan perasaan sama dengan tindakan yang berdasarkan pada pemikiran yang hati-hati dan analisis.']);
        Style::create(['que' => 'Saya suka jenis pekerjaan dimana saya punya waktu untuk persiapan dan implementasi yang menyeluruh.']);
        Style::create(['que' => 'Saya sering bertanya kepada orang-orang tentang asumsi dasar mereka.']);
        Style::create(['que' => 'Yang paling penting adalah apakah sesuatu berhasil dalam praktik.']);
        Style::create(['que' => 'Saya aktif mencari pengalaman baru.']);
        Style::create(['que' => 'Ketika saya mendengar tentang ide atau pendekatan baru, saya langsung memikirkan bagaimana menerapkannya dalam praktik.']);
        Style::create(['que' => 'Saya sangat serius pada kedisiplinan diri seperti memperhatikan diet saya, melakukan olahraga teratur, berpegang pada rutinitas tetap, dll.']);
        Style::create(['que' => 'Saya bangga melakukan pekerjaan yang menyeluruh.']);
        Style::create(['que' => 'Saya bergaul paling baik dengan orang-orang yang logis dan analitis, dan kurang cocok dengan orang-orang yang spontan dan "tidak rasional".']);
        Style::create(['que' => 'Saya berhati-hati dalam menafsirkan data dan juga menghindari langsung mengambil kesimpulan.']);
        Style::create(['que' => 'Saya suka mengambil keputusan dengan hati-hati setelah mempertimbangkan banyak alternatif.']);
        Style::create(['que' => 'Saya lebih tertarik pada ide-ide baru dan tidak biasa daripada yang praktis.']);
        Style::create(['que' => 'Saya tidak suka hal-hal yang tidak teratur dan lebih suka menyesuaikan berbagai hal ke dalam pola yang koheren.']);
        Style::create(['que' => 'Saya menerima dan tetap berpegang pada prosedur dan kebijakan yang ditetapkan selama saya menganggapnya sebagai cara yang efisien untuk menyelesaikan pekerjaan.']);
        Style::create(['que' => 'Saya suka menghubungkan tindakan saya dengan asas, standar, atau kepercayaan umum.']);
        Style::create(['que' => 'Dalam diskusi, saya suka langsung ke intinya.']);
        Style::create(['que' => 'Saya cenderung memiliki hubungan yang jauh dan agak formal dengan orang-orang di tempat kerja.']);
        Style::create(['que' => 'Saya berhasil mengatasi tantangan menangani sesuatu yang baru dan berbeda.']);
        Style::create(['que' => 'Saya menikmati orang-orang spontan yang suka bersenang-senang.']);
        Style::create(['que' => 'Saya memperhatikan detail dengan cermat sebelum sampai pada kesimpulan.']);
        Style::create(['que' => 'Saya merasa kesulitan untuk membuat ide ketika tertekan.']);
        Style::create(['que' => 'Saya yakin akan langsung ke pokok permasalahan.']);
        Style::create(['que' => 'Saya berhati-hati untuk tidak mengambil kesimpulan terlalu cepat.']);
        Style::create(['que' => 'Saya lebih suka memiliki sumber informasi sebanyak mungkin - semakin banyak informasi untuk dipikirkan semakin baik.']);
        Style::create(['que' => 'Orang yang sembrono dan dangkal yang tidak menganggap serius sesuatu biasanya membuat saya kesal.']);
        Style::create(['que' => 'Saya mendengarkan sudut pandang orang lain sebelum mengedepankan pandangan saya sendiri.']);
        Style::create(['que' => 'Saya cenderung terbuka tentang perasaan saya.']);
        Style::create(['que' => 'Dalam diskusi, saya suka memperhatikan perencanaan dan pembuatan kerangka dari partisipan lain.']);
        Style::create(['que' => 'Saya lebih suka menanggapi peristiwa dengan cara yang spontan dan fleksibel daripada merencanakan segala sesuatunya sebelumnya.']);
        Style::create(['que' => 'Saya cenderung tertarik pada teknik seperti diagram alir, rencana darurat, dll.']);
        Style::create(['que' => 'Saya khawatir jika saya harus terburu-buru bekerja untuk memenuhi tenggat waktu yang ketat.']);
        Style::create(['que' => 'Saya biasanya menilai ide orang berdasarkan manfaat praktisnya.']);
        Style::create(['que' => 'Orang yang pendiam dan bijaksana cenderung membuat saya merasa tidak nyaman.']);
        Style::create(['que' => 'Saya sering merasa kesal dengan orang yang suka terburu-buru.']);
        Style::create(['que' => 'Lebih penting menikmati saat ini daripada memikirkan masa lalu atau masa depan.']);
        Style::create(['que' => 'Saya pikir keputusan yang didasarkan pada analisis yang cermat terhadap semua informasi lebih baik daripada yang didasarkan pada intuisi.']);
        Style::create(['que' => 'Saya cenderung perfeksionis.']);
        Style::create(['que' => 'Dalam diskusi, saya biasanya menghasilkan banyak ide spontan.']);
        Style::create(['que' => 'Dalam pertemuan, saya mengemukakan ide-ide praktis dan realistis.']);
        Style::create(['que' => 'Biasanya, tidak mematuhi peraturan itu tidak apa-apa.']);
        Style::create(['que' => 'Saya lebih suka mundur dari suatu situasi dan mempertimbangkan semua perspektif.']);
        Style::create(['que' => 'Saya sering melihat ketidakkonsistenan dan kelemahan pada argumen orang lain.']);
        Style::create(['que' => 'Biasanya saya lebih banyak berbicara daripada mendengarkan.']);
        Style::create(['que' => 'Saya sering menemukan cara yang lebih baik dan lebih praktis untuk menyelesaikan sesuatu.']);
        Style::create(['que' => 'Saya pikir laporan tertulis harus singkat dan langsung ke sasaran.']);
        Style::create(['que' => 'Saya percaya bahwa pemikiran rasional dan logis harus menang.']);
        Style::create(['que' => 'Saya cenderung mendiskusikan hal-hal tertentu dengan orang-orang daripada terlibat dalam diskusi sosial.']);
        Style::create(['que' => 'Saya suka orang yang mendekati sesuatu secara realistis daripada secara teoritis.']);
        Style::create(['que' => 'Dalam diskusi, saya menjadi tidak sabar dengan masalah dan penyimpangan yang tidak relevan.']);
        Style::create(['que' => 'Jika saya memiliki laporan untuk ditulis, saya cenderung menghasilkan banyak draf sebelum menetapkan versi final.']);
        Style::create(['que' => 'Saya suka mencoba sesuatu untuk melihat apakah itu bekerja dalam praktek.']);
        Style::create(['que' => 'Saya sungguh-sungguh dalam mencapai jawaban melalui pendekatan logis.']);
        Style::create(['que' => 'Saya senang menjadi orang yang banyak bicara.']);
        Style::create(['que' => 'Dalam diskusi, saya sering menemukan saya seorang realis, menjaga orang-orang tetap pada inti pembahasan dan menghindari spekulasi liar.']);
        Style::create(['que' => 'Saya suka merenungkan banyak alternatif sebelum mengambil keputusan.']);
        Style::create(['que' => 'Dalam diskusi dengan orang-orang, saya sering menemukan bahwa saya adalah orang yang paling tidak memihak dan objektif.']);
        Style::create(['que' => 'Dalam diskusi, saya lebih cenderung "rendah hati" daripada memimpin dan banyak berbicara.']);
        Style::create(['que' => 'Saya ingin bisa menghubungkan tindakan saat ini dengan gambaran jangka panjang yang lebih besar.']);
        Style::create(['que' => 'Ketika ada yang salah, saya dengan senang hati mengabaikannya dan "menjadikannya pengalaman".']);
        Style::create(['que' => 'Saya cenderung menolak ide liar dan spontan karena tidak berguna.']);
        Style::create(['que' => 'Memikirkan sesuatu dengan hati-hati sebelum mengambil tindakan adalah yang terbaik.']);
        Style::create(['que' => 'Saya lebih sering mendengarkan daripada berbicara.']);
        Style::create(['que' => 'Saya cenderung keras pada orang yang sulit mengadopsi pendekatan yang logis.']);
        Style::create(['que' => 'Biasanya saya percaya bahwa apapun yang saya lakukan akan mendapatkan hasil yang setimpal.']);
        Style::create(['que' => 'Saya tidak keberatan menyakiti perasaan orang selama pekerjaan itu selesai.']);
        Style::create(['que' => 'Saya merasa bahwa mempunyai tujuan yang spesifik dan rencana itu menghambat.']);
        Style::create(['que' => 'Saya biasanya salah satu orang yang membuat pesta menjadi hidup.']);
        Style::create(['que' => 'Saya melakukan apa pun yang praktis untuk menyelesaikan pekerjaan.']);
        Style::create(['que' => 'Saya cepat bosan dengan pekerjaan metodis dan detail.']);
        Style::create(['que' => 'Saya tertarik untuk mengeksplorasi asumsi dasar, prinsip dan teori yang mendasari berbagai hal dan peristiwa.']);
        Style::create(['que' => 'Saya selalu tertarik untuk mencari tahu apa yang orang pikirkan.']);
        Style::create(['que' => 'Saya suka rapat yang dijalankan sesuai metode, tetap berpegang pada agenda yang telah ditetapkan.']);
        Style::create(['que' => 'Saya menghindari topik subjektif (bias) atau ambigu (tidak jelas).']);
        Style::create(['que' => 'Saya menikmati drama dan kegembiraan dari situasi krisis.']);
        Style::create(['que' => 'Orang sering menganggap saya tidak peka terhadap perasaan mereka.']);

        //Logic - membuat soal berpikir logis di database
        //01
        Logic::create([
            'que' => 'Empat koin dapat digunakan untuk memainkan bombomcar delapan putaran. Jika mempunyai enam koin, berapa putaran yang didapatkan? Untuk menjawabnya silahkan buat kode program sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Koin: 4<br>
                Putaran ke-1<br>
                Putaran ke-2<br>
                Putaran ke-3<br>
                Putaran ke-4<br>
                Putaran ke-5<br>
                Putaran ke-6<br>
                Putaran ke-7<br>
                Putaran ke-8<br>
                Jumlah putaran dari 4 koin adalah 8 putaran',
            'answer' => '12 putaran',
            'type' => 'while'
        ]);
        
        //02
        Logic::create([
            'que' => 'Pada permainan bombomcar jika memasukkan tiga koin, maka akan mendapatkan 6 putaran. Jika melakukan 14 putaran, maka berapa koin yang dibutuhkan? Untuk menjawabnya silahkan buat kode program sederhana menggunakan bahasa C dengan fungsi repeat dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Putaran: 6<br>
                2 putaran membutuhkan 1 koin<br>
                4 putaran membutuhkan 2 koin<br>
                6 putaran membutuhkan 3 koin<br>
                Jumlah koin yang dibutuhkan untuk 6 putaran adalah 3 koin',
            'answer' => '7 koin',
            'type' => 'do'
        ]);

        //03
        Logic::create([
            'que' => 'Terdapat 4 mobil yang memiliki kecepatan konstan yang berbeda. Mobil pertama memiliki kecepatan 30 km/jam, mobil kedua memiliki kecepatan 50 km/jam, mobil ketiga memiliki kecepatan 70 km/jam, mobil keempat memiliki kecepatan 100 km/jam, dan mobil lainnya memiliki kecepatan hanya 20 km/jam. Dalam waktu 3 jam, mobil pertama sudah menempuh 90 km. Berapa km jarak yang sudah ditempuh oleh mobil ketiga dalam waktu 3 jam? Untuk menjawabnya silahkan buat kode program sederhana percabangan bertingkat (if, if else, else) menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Daftar Mobil<br>
                Mobil 1 - kecepatan 30 km/jam<br>
                Mobil 2 - kecepatan 50 km/jam<br>
                Mobil 3 - kecepatan 70 km/jam<br>
                Mobil 4 - kecepatan 100 km/jam<br>
                Pilihan mobil: 1<br>
                Mobil 1 dengan kecepatan 30km/jam sudah menempuh jarak 90 km dalam 3 jam.',
            'answer' => '210 km',
            'type' => 'else if'
        ]);

        //04
        Logic::create([
            'que' => 'Di suatu stasiun pengisian bahan bakar terdapat 3 macam bahan bakar, yaitu Pertalite dengan harga Rp10.000, Pertamax dengan harga Rp14.500, dan Pertamax Turbo dengan harga Rp15.900. Sebuah mobil mengisi bahan bakarnya dengan bahan bakar Pertamax dan melakukan pembayaran sejumlah Rp100.000. Mobil tersebut mendapatkan bahan bakar Pertamax sejumlah 6,9 liter. Jika membayar Rp160.000 pada bahan bakar Pertamax turbo, maka akan mendapatkan berapa liter? Untuk menjawabnya silahkan buat kode program sederhana percabangan bertingkat (switch-case) menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Daftar Bahan Bakar<br>
                1. Pertalite - Rp10.000/liter<br>
                2. Pertamax - Rp14.500/liter<br>
                3. Pertamax Turbo - Rp15.900/liter<br><br>
                Pilihan bahan bakar: 2<br>
                Jumlah bayar (Rp.): 100000<br>
                Pembayaran Pertamax sejumlah Rp. 100.000 mendapatkan 6,9 liter',
            'answer' => '10.062893 liter',
            'type' => 'switch'
        ]);

        //05
        Logic::create([
            'que' => 'Seorang petani membeli biji kacang merah di suatu toko. Harga biji kacang merah tersebut Rp30.000/kg. Jika membeli 5 kg, maka akan mendapatkan diskon 20%. Petani tersebut membeli biji kacang merah sebanyak 7 kg dan membayar Rp210.000, tetapi mendapatkan diskon 20% karena memenuhi syarat diskon. Sehingga petani hanya membayar Rp168.000. Jika petani tersebut membeli 8 kg, apakah petani tersebut mendapatkan diskon, dan jika mendapatkan diskon, berapa total bayar yang petani harus bayar? Untuk menjawabnya silahkan buat kode program sederhana percabangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Selamat datang di toko kami!<br>
                Harga biji kacang merah hari ini yaitu Rp30.000/kg<br>
                Terdapat diskon 20% untuk pembelian biji kacang merah jika membeli lebih dari 5 kg<br><br>
                Berat yang dibeli: 7 kg<br>
                Anda mendapatkan diskon 20%<br>
                Sehingga anda membayar hanya Rp168000',
            'answer' => 'Rp192000',
            'type' => 'else'
        ]);

        //06
        Logic::create([
            'que' => 'Seorang petani menanam biji bunga di kebunnya. Kebun petani tersebut akan memuat 3 bibit per petaknya, tetapi jika menggunakan pupuk hanya memuat 2 bibit per petaknya. Petani tersebut akan menanam 30 bibit menggunakan pupuk, maka ia akan menggunakan 15 petak kebunnya. Jika petani tersebut akan menanam 45 bibit tanpa pupuk, berapa petak kebun yang akan digunakan petani? Untuk menjawabnya silahkan buat kode program sederhana percabangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Program penghitung petak kebun<br>
                Jika menggunakan pupuk, maka setiap petak hanya memuat 2 bibit.<br>
                Jika tidak menggunakan pupuk, maka setiap petak memuat 3 bibit.<br>
                Banyak bibit: 30<br>
                Apakah menggunakan pupuk?<br>
                1. Ya<br>
                2. Tidak<br>
                Jawaban: 1<br>
                Anda menggunakan pupuk<br>
                30 bibit, akan menggunakan 15 petak (2 bibit/petak)',
            'answer' => '15 petak',
            'type' => 'else'
        ]);

        //07
        Logic::create([
            'que' => 'Seseorang sedang menangkap tikus yang berada di sawah. Ia mencari tikus yang ideal, tikus yang ideal adalah tikus dengan badan gemuk yaitu lebih dari 100 gram dan memiliki ekor hitam. Jika tikus memiliki berat kurang dari 100 gram atau memiliki ekor putih, maka tikus tersebut tidak ideal. Kemudian didapatkan lah seekor tikus dengan berat 112 gram dengan ekor hitam maka tikus tersebut ideal. Jika menangkap tikus dengan berat 200 gram dan memiliki ekor putih, apakah tikus tersebut ideal? Untuk menjawabnya silahkan buat kode program sederhana dengan percabangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan. ',
            'program' => '- Penentu tikus ideal -<br>
                Warna ekor putih atau hitam (p/h):h<br>
                Berat tikus: 112 gram<br>
                Tikus tersebut ideal!',
            'answer' => 'Tikus tersebut tidak ideal!',
            'type' => 'else'
        ]);

        //08
        Logic::create([
            'que' => 'Di bawah ini diberikan gambar sejumlah ikan yang ditangkap dari suatu kolam. Jika seekor ikan memiliki badan gemuk dan bergaris tipis maka ikan tersebut mahal, namun jika sebaliknya ikan tersebut murah. Apakah gambar sejumlah tikus di bawah ini cenderung mahal atau tidak? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => '- Ikan yang didapat -<br>
                1 Ikan kurus bergaris tebal<br>
                2 Ikan kurus bergaris tebal<br>
                3 Ikan kurus bergaris tebal<br>
                4 Ikan kurus bergaris tebal<br>
                5 Ikan kurus bergaris tebal<br>
                6 Ikan kurus bergaris tebal<br>
                7 Ikan kurus bergaris tebal<br>
                8 Ikan kurus bergaris tebal<br>
                9 Ikan kurus bergaris tebal<br><br>

                1 Ikan kurus bergaris tipis<br>
                2 Ikan kurus bergaris tipis<br>
                3 Ikan kurus bergaris tipis<br>
                4 Ikan kurus bergaris tipis<br>
                5 Ikan kurus bergaris tipis<br>
                6 Ikan kurus bergaris tipis<br>
                7 Ikan kurus bergaris tipis<br>
                8 Ikan kurus bergaris tipis<br>
                9 Ikan kurus bergaris tipis<br>
                10 Ikan kurus bergaris tipis<br>
                11 Ikan kurus bergaris tipis<br>
                12 Ikan kurus bergaris tipis<br><br>

                1 Ikan gemuk bergaris tipis<br>
                2 Ikan gemuk bergaris tipis<br>
                3 Ikan gemuk bergaris tipis<br>
                4 Ikan gemuk bergaris tipis<br><br>

                1 Ikan gemuk bergaris tebal<br>
                2 Ikan gemuk bergaris tebal<br>
                3 Ikan gemuk bergaris tebal<br><br>

                Ikan kurus yang memiliki garis tebal yaitu 9/21 dari keseluruhan ikan kurus<br>
                Ikan gemuk yang memiliki garis tebal yaitu 4/7 dari keseluruhan ikan gemuk',
            'answer' => '21 dari keseluruhan ikan kurus',
            'type' => 'for'
        ]);

        //09
        Logic::create([
            'que' => 'Tiga orang siswa dari kelas I, II, dan III dipilih menjadi anggota pengurus organisasi siswa. Sebuah panitia yang terdiri dari tiga orang harus dibentuk dari setiap kelas harus diwakili oleh seorang siswa. Semua kombinasi yang mungkin harus dipertimbangkan sebelum diambil keputusan.<br>Dua kombinasi yang mungkin adalah Dedi, Tono, dan Atang (DTA), dan Nani, Ida, dan Rita (NIR). <br>Anggota Pengurus:
            Kelas 1:	Dadi (D), Nani (N), Gito (G)<br>
            Kelas 2:	Tono (T), Ida (I), Susi (S)<br>
            Kelas 3:	Atang (A), Rita (R), Beti (B)<br>
            Apa saja kombinasi yang mungkin selain kedua kombinasi tersebut? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan kombinasi nama-nama yang mungkin.',
            'program' => '',
            'answer' => 'NIA  NIR  NIB',
            'type' => 'for'
        ]);
        
        //10
        Logic::create([
            'que' => 'Terdapat dua wadah yang isinya terdapat masing-masing 5 bola berwarna, pada wadah pertama warna-warna bola tersebut yaitu Merah (M), Jingga (J), Kuning (K), Hijau (H), dan Biru (B). Kemudian pada wadah kedua terdapat warna Putih (P), Ungu (U), Abu-abu (A), Coklat (C), dan Toska (T). Bola-bola tersebut dipasangkan antara wadah pertama dengan wadah kedua, untuk disimpan di suatu rak. Pasangan pertama yaitu Merah (M) dan Putih (P). Apa saja pasangan yang memungkinkan selain pasangan tersebut? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan pasangan bola berwarna lainnya yang memungkinkan.',
            'program' => '',
            'answer' => 'KP  KU  KA  KC  KT',
            'type' => 'for'
        ]);

        //Maintest - membuat soal untuk pretest dan posttest di database

        //1.2.
        Maintest::create([
            'no' => '1.2.',
            'que' => 'Suatu hari Tama pergi ke suatu toko swalayan, dia membeli beberapa makanan dan minuman. Kemudian dia ke kasir untuk menghitung harga dan membayar belanjaannya. Total harga barang yang Tama bawa yaitu 110,000, ternyata Tama mendapatkan diskon 30%, karena total belanjanya sudah melebihi 100,000. Pada kasus ini, bagaimana cara membuat suatu kode program pada kondisi tersebut?',
            'answer_id' => '1',
        ]);

        Answer::create([
            'program' => 'Harga total belanja: 110000<br>
            Anda mendapatkan diskon 30 persen karena total belanja lebih dari Rp. 100.000<br>
            Total bayar: 77000',
            'answer' => '>100000',
            'type' => 'if'
        ]);

        //1.1.
        Maintest::create([
            'no' => '1.1.',
            'que' => 'Pada suatu toko terdapat promo diskon. Jika harga belanja lebih dari 100,000 maka total belanja akan mendapatkan diskon 30%. Pemilik toko ingin menambahkan kondisi tersebut di program kasir miliknya, bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '1',
        ]);

        //1.
        Maintest::create([
            'no' => '1.',
            'que' => 'Terdapat suatu kasus dalam berbelanja dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel harga. Jika harga yang dimasukkan lebih dari 100,000 maka akan mendapatkan diskon 30%, kemudian hasil dari diskon tersebut disimpan dalam variabel total. Bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '1',
        ]);

        //1.a.
        Maintest::create([
            'no' => '1.a.',
            'que' => 'Terdapat suatu kasus dalam berbelanja. Jika harga lebih dari 100,000 maka harga akan dikalikan 30% dan hasilnya disimpan di variabel total. Bagaimana penulisan kode pada kasus tersebut?',
            'answer_id' => '1',
        ]);

        //1.b.
        Maintest::create([
            'no' => '1.b.',
            'que' => 'Jika harga > 100000, maka harga dikali 0,3 dan hasilnya disimpan di variabel total. Bagaimana penulisan kode tersebut dengan percabangan sederhana tunggal?',
            'answer_id' => '1',
        ]);

        // ----------------------------------------------------------------------------------------

        //2.2.
        Maintest::create([
            'no' => '2.2.',
            'que' => 'Suatu hari Tama pergi ke suatu toko baju yang akan dia bawa untuk keluarganya sebagai oleh-oleh, dia membeli 12 baju dan ternyata Tama mendapatkan promo yaitu mendapatkan 3 baju tambahan gratis, karena baju yang dia beli lebih dari 10 pcs. Pada kasus ini, bagaimana cara membuat suatu kode program pada kondisi tersebut?',
            'answer_id' => '2',
        ]);

        Answer::create([
            'program' => 'Jumlah baju yang dibeli: 12<br>
            Mendapatkan 3 bonus baju!<br>
            Baju yang diterima yaitu sebanyak 15',
            'answer' => '>10',
            'type' => 'if'
        ]);

        //2.1.
        Maintest::create([
            'no' => '2.1.',
            'que' => 'Pada suatu toko baju terdapat promo. Jika banyak baju yang dibeli lebih dari 10 pcs maka akan mendapatkan 3 bonus baju. Pemilik toko ingin membuat program tersebut, bagaimana penulisan kode pada tersebut?',
            'answer_id' => '2',
        ]);

        //2.
        Maintest::create([
            'no' => '2.',
            'que' => 'Terdapat suatu kasus dalam pembelian baju dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel baju, yang berfungsi untuk masukkan jumlah baju yang dibeli. Jika jumlah baju yang dibeli lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, kemudian jumlah baju yang didapatkan disimpan dalam variabel baju. Bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '2',
        ]);

        //2.a.
        Maintest::create([
            'no' => '2.a.',
            'que' => 'Terdapat suatu kasus dalam pembelian baju. Jika pembelian baju lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, sehingga jumlah baju bertambah dan hasilnya disimpan di variabel baju. Bagaimana penulisan kode pada kasus tersebut?',
            'answer_id' => '2',
        ]);

        //2.b.
        Maintest::create([
            'no' => '2.b.',
            'que' => 'Jika variabel baju lebih dari 10, maka variabel baju ditambah 3. Bagaimana penulisan kode tersebut dengan percabangan sederhana tunggal?',
            'answer_id' => '2',
        ]);

        // ----------------------------------------------------------------------------------------

        //3.2.
        Maintest::create([
            'no' => '3.2.',
            'que' => 'Di suatu jalan raya, Tama melihat peraturan ganjil genap pada kendaraan, namun dia bingung dan belum mengetahui bagaimana cara membedakannya. Ayahnya memberi tahu dia bahwa untuk nilai genap itu sama dengan suatu bilangan modulus terhadap dua akan menghasilkan nol, maka bilangan tersebut genap, jika tidak berarti bilangan tersebut ganjil. Untuk membantu Tama, bagaimana menuliskan kode pada suatu program tersebut?',
            'answer_id' => '3',
        ]);

        Answer::create([
            'program' => 'Cek bilangan ganjil atau genap: 6<br>
            Bilangan tersebut genap',
            'answer' => '%2==0',
            'type' => 'else'
        ]);

        //3.1.
        Maintest::create([
            'no' => '3.1.',
            'que' => 'Seseorang mempunyai sebuah program pengecekan bilangan untuk menilai bilangan tersebut genap atau ganjil. Pada sistem kerja pengecekannya jika bilangan tersebut modulus 2 sama dengan 0 maka bilangan tersebut genap, dan jika tidak berarti ganjil. Bagaimana menuliskan kode pada kasus tersebut?',
            'answer_id' => '3',
        ]);

        //3.
        Maintest::create([
            'no' => '3.',
            'que' => 'Terdapat suatu program untuk menentukan bilangan tersebut ganjil atau genap. Program tersebut diawali dengan masukkan suatu variabel bilangan. Ketika memasukkan bilangan, program akan berjalan dilakukan pengecekan. Jika variabel bilangan modulus 2 sama dengan 0, maka variabel bilangan tersebut genap. dan jika tidak sama dengan 0 maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '3',
        ]);

        //3.a.
        Maintest::create([
            'no' => '3.a.',
            'que' => 'Terdapat suatu bilangan, jika bilangan tersebut dilakukan operasi yaitu variabel bilangan modulus 2 maka jika hasilnya 0, bilangan tersebut termasuk bilangan genap, jika tidak maka bilangan itu ganjil. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '3',
        ]);

        //3.b.
        Maintest::create([
            'no' => '3.b.',
            'que' => 'Terdapat suatu bilangan, jika variabel bilangan modulus dua sama dengan 0 (bilangan % 2 == 0) maka bilangan tersebut genap, jika tidak maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
            'answer_id' => '3',
        ]);

        // ----------------------------------------------------------------------------------------

        //4.2.
        Maintest::create([
            'no' => '4.2.',
            'que' => 'Pada suatu hari Tama berkunjung ke suatu pos polisi, di sana ia melihat ada suatu program pengukur kecepatan kendaraan yang lewat. Kemudian terdapat kendaraan yang memiliki kecepatan kendaraan 90 km/jam maka kendaraan tersebut terlalu cepat dan akan terkena tilang, jika kendaraan tersebut memiliki kecepatan tidak lebih dari 80 km/jam maka kecepatannya normal. Untuk memahaminya, Tama mencoba membuat program tersebut. Bagaimana cara menuliskan kode pada program tersebut?',
            'answer_id' => '4',
        ]);

        Answer::create([
            'program' => 'Masukkan kecepatan kendaraan: 90<br>
            terlalu cepat, terkena tilang',
            'answer' => '>80',
            'type' => 'else'
        ]);

        //4.1.
        Maintest::create([
            'no' => '4.1.',
            'que' => 'Sebuah program pengukur kecepatan kendaraan, menilai apakah suatu kendaraan terlalu cepat atau tidak. Jika kecepatan lebih dari 80 maka kecepatan suatu kendaraan terlalu cepat dan akan terkena tilang, dan jika tidak akan diberitahu bahwa kecepatan suatu kendaraan normal. Bagaimana menuliskan kode pada kasus tersebut?',
            'answer_id' => '4',
        ]);

        //4.
        Maintest::create([
            'no' => '4.',
            'que' => 'Terdapat suatu program untuk mengukur kecepatan kendaraan. Program tersebut diawali dengan masukkan suatu variabel kecepatan. Ketika memasukkan nilainya, program akan berjalan dan melakukan pengecekan. Jika variabel kecepatan lebih dari 80, maka variabel akan memberi peringatan yang dicetak pada program yaitu “terlalu cepat, terkena tilang”. Dan jika tidak, maka hanya akan memberi tahu pada program bahwa “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '4',
        ]);

        //4.a.
        Maintest::create([
            'no' => '4.a.',
            'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika kecepatan lebih dari 80 maka kendaraan itu terlalu cepat dan akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka kecepatan kendaraan itu masih normal sehingga akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '4',
        ]);

        //4.b.
        Maintest::create([
            'no' => '4.b.',
            'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika variabel kecepatan > 80 maka akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
            'answer_id' => '4',
        ]);

        // ----------------------------------------------------------------------------------------

        //5.2.
        Maintest::create([
            'no' => '5.2.',
            'que' => 'Di suatu kegiatan, Tama ditugaskan menjadi panitia konsumsi. Kemudian dengan budget Rp. 200,000 Tama harus membeli paket makan untuk panitia yang lain. Terdapat 4 paket utama dengan harga yang berbeda-beda, yaitu sebagai berikut.

            Paket	Harga
            Paket 1 Ayam Goreng	Rp. 12,000
            Paket 2 Ayam Bakar	Rp. 15,000
            Paket 3 Ayam Komplit	Rp. 18,000
            Paket 4 Bebek Goreng	Rp. 20,000

            Tama menentukan paket 4 yang dia pilih. Dengan budget Rp. 200,000, dia mendapatkan 10 bungkus. Bagaimana cara membuat sebuah program pemilihan paket makan dengan harga yang berbeda-beda tersebut dan dapat diketahui banyak bungkus yang diterima?',
            'answer_id' => '5',
        ]);

        Answer::create([
            'program' => '- Daftar Paket Makan -<br>
            Paket    Harga<br>
            Paket 1 Ayam Goreng      Rp. 12,000<br>
            Paket 2 Ayam Bakar       Rp. 15,000<br>
            Paket 3 Ayam Komplit     Rp. 18,000<br>
            Paket 4 Bebek Goreng     Rp. 20,000<br>
            Masukkan nomor paket makanan yang akan dibeli: 4<br>
            Paket makanan yang dia dapatkan sejumlah 10 bungkus.',
            'answer' => '==4',
            'type' => 'else if'
        ]);

        //5.1.
        Maintest::create([
            'no' => '5.1.',
            'que' => 'Di suatu warung makan terdapat paket-paket makanan. Terdapat 4 paket utama. Paket-paket ini memiliki harga yang berbeda beda yaitu sebagai berikut. 

            Paket	Harga
            Paket 1 Ayam Goreng	Rp. 12,000
            Paket 2 Ayam Bakar	Rp. 15,000
            Paket 3 Ayam Komplit	Rp. 18,000
            Paket 4 Bebek Goreng	Rp. 20,000

            Bagaimana cara membuat sebuah program pemilihan paket dengan harga yang berbeda-beda tersebut?',
            'answer_id' => '5',
        ]);

        //5.
        Maintest::create([
            'no' => '5.',
            'que' => 'Pada sebuah program terdapat pemilihan paket makan dengan harga yang berbeda-beda, seperti pada tabel berikut.

            Paket	Harga
            Paket 1 Ayam Goreng	Rp. 12,000
            Paket 2 Ayam Bakar	Rp. 15,000
            Paket 3 Ayam Komplit	Rp. 18,000
            Paket 4 Bebek Goreng	Rp. 20,000

            Program akan berjalan diawali dengan menampilkan pilihan kemudian memberikan sebuah masukkan yang menggunakan variabel paket. Variabel paket akan memeriksa pilihan, pilihan-pilihan ini akan berisi seperti tabel. Bagaimana untuk membuat program pemilihan seperti pada tabel tersebut?',
            'answer_id' => '5',
        ]);

        //5.a.
        Maintest::create([
            'no' => '5.a.',
            'que' => 'Buatlah sebuah program pemilihan paket makan. Pada program tersebut terdapat variabel paket dan variabel harga. Setiap kondisi atau pemilihan paket nomor ke berapa, maka terdapat harga sesuai dengan paket yang dipilih. Berikut tabelnya.

            Paket	Harga
            Paket 1 Ayam Goreng	Rp. 12,000
            Paket 2 Ayam Bakar	Rp. 15,000
            Paket 3 Ayam Komplit	Rp. 18,000
            Paket 4 Bebek Goreng	Rp. 20,000',
            'answer_id' => '5',
        ]);

        //5.b.
        Maintest::create([
            'no' => '5.b.',
            'que' => 'Terdapat sebuah menu paket makanan.

            Paket	Harga
            Paket 1 Ayam Goreng	Rp. 12,000
            Paket 2 Ayam Bakar	Rp. 15,000
            Paket 3 Ayam Komplit	Rp. 18,000
            Paket 4 Bebek Goreng	Rp. 20,000

            Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (if, else if, else).
            Jika memilih paket 1, maka harganya Rp. 12,000. Jika memilih paket 2, maka harganya Rp. 15,000. Begitu seterusnya hingga pada pilihan terakhir',
            'answer_id' => '5',
        ]);

        // ----------------------------------------------------------------------------------------

        //6.2.
        Maintest::create([
            'no' => '6.2.',
            'que' => 'Tama melakukan touring motor dari kota Malang ke kota Surabaya. Jarak dari kedua kota itu yaitu 100 km. Terdapat 3 motor utama dengan kecepatan yang paling cepat dan motor lainnya dengan kecepatan standar, yaitu sebagai berikut.

            Motor	Kecepatan
            Motor 1	25 km/jam
            Motor 2	50 km/jam
            Motor 3	80 km/jam
            Motor lainnya	20 km/jam

            Tama menggunakan motor 2 dengan kecepatan 50 km/jam. Waktu yang ia tempuh yaitu 2 jam. Untuk mengetahui waktu yang ditempuh menggunakan motor lain, maka menggunakan rumus kecepatan. Waktu = jarak / kecepatan. Bagaimana cara membuat sebuah program pemilihan motor dengan kecepatan yang berbeda-beda tersebut sehingga akan mendapatkan waktu tempuhnya?',
            'answer_id' => '6',
        ]);

        Answer::create([
            'program' => 'Jarak = 100km<br>
            motor 1: 25km/jam<br>
            motor 2: 50km/jam<br>
            motor 3: 80km/jam<br>
            motor lainnya: 20km/jam<br>
            pilihan: 2<br>
            Waktu tempuh: 2.0 jam',
            'answer' => '==3',
            'type' => 'else if'
        ]);

        //6.1.
        Maintest::create([
            'no' => '6.1.',
            'que' => 'Jarak antara kota Malang ke kota Surabaya adalah 100 km. Terdapat 3 motor utama dan motor lainnya yang digunakan untuk menempuh jarak tersebut. Motor-motor ini memiliki kecepatan berbeda beda yaitu sebagai berikut. 

            Motor	Kecepatan
            Motor 1	25 km/jam
            Motor 2	50 km/jam
            Motor 3	80 km/jam
            Motor lainnya	20 km/jam

            Bagaimana cara membuat sebuah program pemilihan motor dengan kecepatan yang berbeda-beda tersebut?',
            'answer_id' => '6',
        ]);

        //6.
        Maintest::create([
            'no' => '6.',
            'que' => 'Pada sebuah program terdapat pemilihan motor dengan kecepatan berbeda, seperti tabel berikut.

            Motor	Kecepatan
            Motor 1	25 km/jam
            Motor 2	50 km/jam
            Motor 3	80 km/jam
            Motor lainnya	20 km/jam

            Pada program tersebut akan menggunakan variabel motor untuk pemilihan dan variabel kecepatan. Program diawali dengan menampilkan pilihan motor yang tersedia, kemudian terdapat masukkan untuk memilih motor tersebut, dan terdapat beberapa kondisi untuk setiap pemilihan. Bagaimana untuk membuat program pemilihan motor tersebut?',
            'answer_id' => '6',
        ]);

        //6.a.
        Maintest::create([
            'no' => '6.a.',
            'que' => 'Buatlah sebuah program pemilihan motor. Pada program tersebut terdapat variabel motor dan variabel kecepatan. Setiap kondisi atau pemilihan motor nomor ke berapa, maka memiliki kecepatan sesuai dengan motor yang dipilih. Berikut tabelnya.

            Motor	Kecepatan
            Motor 1	25 km/jam
            Motor 2	50 km/jam
            Motor 3	80 km/jam
            Motor lainnya	20 km/jam',
            'answer_id' => '6',
        ]);

        //6.b.
        Maintest::create([
            'no' => '6.b.',
            'que' => 'Terdapat sebuah tabel motor beserta kecepatannya.
            Motor	Kecepatan
            Motor 1	25 km/jam
            Motor 2	50 km/jam
            Motor 3	80 km/jam
            Motor lainnya	20 km/jam

            Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (if, else if, else).
            Jika memilih motor 1, maka kecepatannya 25 km/jam. Jika memilih motor 2, maka kecepatannya 50 km/jam. Begitu seterusnya hingga pada pilihan terakhir.',
            'answer_id' => '6',
        ]);
    }
}
