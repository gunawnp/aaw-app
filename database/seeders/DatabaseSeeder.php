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

        Answer::create([
            'program' => 'Harga total belanja: 110000<br>
            Anda mendapatkan diskon 30 persen karena total belanja lebih dari Rp. 100.000<br>
            Total bayar: 77000',
            'answer' => '>100000',
            'type' => 'if'
        ]);

        //1.
        Maintest::create([
            'no' => '1.',
            'que' => 'Terdapat suatu kasus dalam berbelanja dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel harga. Jika harga yang dimasukkan lebih dari 100,000 maka akan mendapatkan diskon 30%, kemudian hasil dari diskon tersebut disimpan dalam variabel total. Bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '1',
            'score' => '3'
        ]);

        //1.a.
        Maintest::create([
            'no' => '1.a.',
            'que' => 'Terdapat suatu kasus dalam berbelanja. Jika harga lebih dari 100,000 maka harga akan dikalikan 30% dan hasilnya disimpan di variabel total. Bagaimana penulisan kode pada kasus tersebut?',
            'answer_id' => '1',
            'score' => '2'
        ]);

        //1.b.
        Maintest::create([
            'no' => '1.b.',
            'que' => 'Jika harga > 100000, maka harga dikali 0,3 dan hasilnya disimpan di variabel total. Bagaimana penulisan kode tersebut dengan percabangan sederhana tunggal?',
            'answer_id' => '1',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //2.2.
        Maintest::create([
            'no' => '2.2.',
            'que' => 'Suatu hari Tama pergi ke suatu toko baju yang akan dia bawa untuk keluarganya sebagai oleh-oleh, dia membeli 12 baju dan ternyata Tama mendapatkan promo yaitu mendapatkan 3 baju tambahan gratis, karena baju yang dia beli lebih dari 10 pcs. Pada kasus ini, bagaimana cara membuat suatu kode program pada kondisi tersebut?',
            'answer_id' => '2',
            'score' => '5'
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
            'score' => '4'
        ]);

        //2.
        Maintest::create([
            'no' => '2.',
            'que' => 'Terdapat suatu kasus dalam pembelian baju dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel baju, yang berfungsi untuk masukkan jumlah baju yang dibeli. Jika jumlah baju yang dibeli lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, kemudian jumlah baju yang didapatkan disimpan dalam variabel baju. Bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '2',
            'score' => '3'
        ]);

        //2.a.
        Maintest::create([
            'no' => '2.a.',
            'que' => 'Terdapat suatu kasus dalam pembelian baju. Jika pembelian baju lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, sehingga jumlah baju bertambah dan hasilnya disimpan di variabel baju. Bagaimana penulisan kode pada kasus tersebut?',
            'answer_id' => '2',
            'score' => '2'
        ]);

        //2.b.
        Maintest::create([
            'no' => '2.b.',
            'que' => 'Jika variabel baju lebih dari 10, maka variabel baju ditambah 3. Bagaimana penulisan kode tersebut dengan percabangan sederhana tunggal?',
            'answer_id' => '2',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //3.2.
        Maintest::create([
            'no' => '3.2.',
            'que' => 'Di suatu jalan raya, Tama melihat peraturan ganjil genap pada kendaraan, namun dia bingung dan belum mengetahui bagaimana cara membedakannya. Ayahnya memberi tahu dia bahwa untuk nilai genap itu sama dengan suatu bilangan modulus terhadap dua akan menghasilkan nol, maka bilangan tersebut genap, jika tidak berarti bilangan tersebut ganjil. Untuk membantu Tama, bagaimana menuliskan kode pada suatu program tersebut?',
            'answer_id' => '3',
            'score' => '5'
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
            'score' => '4'
        ]);

        //3.
        Maintest::create([
            'no' => '3.',
            'que' => 'Terdapat suatu program untuk menentukan bilangan tersebut ganjil atau genap. Program tersebut diawali dengan masukkan suatu variabel bilangan. Ketika memasukkan bilangan, program akan berjalan dilakukan pengecekan. Jika variabel bilangan modulus 2 sama dengan 0, maka variabel bilangan tersebut genap. dan jika tidak sama dengan 0 maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '3',
            'score' => '3'
        ]);

        //3.a.
        Maintest::create([
            'no' => '3.a.',
            'que' => 'Terdapat suatu bilangan, jika bilangan tersebut dilakukan operasi yaitu variabel bilangan modulus 2 maka jika hasilnya 0, bilangan tersebut termasuk bilangan genap, jika tidak maka bilangan itu ganjil. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '3',
            'score' => '2'
        ]);

        //3.b.
        Maintest::create([
            'no' => '3.b.',
            'que' => 'Terdapat suatu bilangan, jika variabel bilangan modulus dua sama dengan 0 (bilangan % 2 == 0) maka bilangan tersebut genap, jika tidak maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
            'answer_id' => '3',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //4.2.
        Maintest::create([
            'no' => '4.2.',
            'que' => 'Pada suatu hari Tama berkunjung ke suatu pos polisi, di sana ia melihat ada suatu program pengukur kecepatan kendaraan yang lewat. Kemudian terdapat kendaraan yang memiliki kecepatan kendaraan 90 km/jam maka kendaraan tersebut terlalu cepat dan akan terkena tilang, jika kendaraan tersebut memiliki kecepatan tidak lebih dari 80 km/jam maka kecepatannya normal. Untuk memahaminya, Tama mencoba membuat program tersebut. Bagaimana cara menuliskan kode pada program tersebut?',
            'answer_id' => '4',
            'score' => '5'
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
            'score' => '4'
        ]);

        //4.
        Maintest::create([
            'no' => '4.',
            'que' => 'Terdapat suatu program untuk mengukur kecepatan kendaraan. Program tersebut diawali dengan masukkan suatu variabel kecepatan. Ketika memasukkan nilainya, program akan berjalan dan melakukan pengecekan. Jika variabel kecepatan lebih dari 80, maka variabel akan memberi peringatan yang dicetak pada program yaitu “terlalu cepat, terkena tilang”. Dan jika tidak, maka hanya akan memberi tahu pada program bahwa “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '4',
            'score' => '3'
        ]);

        //4.a.
        Maintest::create([
            'no' => '4.a.',
            'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika kecepatan lebih dari 80 maka kendaraan itu terlalu cepat dan akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka kecepatan kendaraan itu masih normal sehingga akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
            'answer_id' => '4',
            'score' => '2'
        ]);

        //4.b.
        Maintest::create([
            'no' => '4.b.',
            'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika variabel kecepatan > 80 maka akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
            'answer_id' => '4',
            'score' => '1'
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
            'score' => '5'
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
            'score' => '4'
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
            'score' => '3'
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
            'score' => '2'
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
            'score' => '1'
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
            'score' => '5'
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
            'score' => '4'
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
            'score' => '3'
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
            'score' => '2'
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
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //7.2.
        Maintest::create([
            'no' => '7.2.',
            'que' => 'Saat liburan akhir tahun, Tama dengan temannya bermain ke Yogyakarta. Di sana mereka berencana menyewa sebuah sepeda motor, setiap motor memiliki harga yang berbeda-beda sebagai berikut.

            Nomor	Motor	Harga
            1	Beat	50.000/hari
            2	Vario	70.000/hari
            3	Vespa	100.000/hari

            Kemudian Tama diminta untuk memilih nomor pada motor dan jumlah hari sewa untuk menentukan harganya. Selain ke tiga nomor tersebut, motor tidak tersedia. Tama memilih motor 1 yaitu Beat dengan harga Rp. 50.000 dengan lama 3 hari. Untuk membuat sebuah tampilan menu dan mengetahui harga total penyewaannya, maka dibuatkan sebuah program dengan percabangan bertingkat (switch)?',
            'answer_id' => '7',
            'score' => '5'
        ]);

        Answer::create([
            'program' => '        - Daftar Motor - <br>
            No.      Motor           Harga<br>
            1.       Beat            Rp. 50,000/hari<br>
            2.       Vario           Rp. 70,000/hari<br>
            3.       Vespa           Rp. 100,000/hari<br>
            Masukkan nomor pilihan motor yang akan disewa: 1<br>
            Berapa hari: 3<br>
            Motor yang dipilih yaitu motor Beat dengan lama 3 hari<br>
            Harga total penyewaan yaitu Rp. 150000',
            'answer' => '100000',
            'type' => 'switch'
        ]);

        //7.1.
        Maintest::create([
            'no' => '7.1.',
            'que' => 'Pada suatu tempat terdapat penyewaan motor, dengan daftar sebagai berikut.

            Nomor	Motor	Harga
            1	Beat	50.000/hari
            2	Vario	70.000/hari
            3	Vespa	100.000/hari

            Jika pemilik penyewaan ingin mempermudah perhitungan pada pelanggan yang akan menyewa, maka dibuatkan sebuah program pemilihan motor serta jumlah hari untuk menyewa. Program diawali dengan pemilihan nomor pada motor kemudian jumlah hari untuk menentukan harganya. Dalam program tersebut bagaimana kode untuk membuat pemilihan tersebut dengan percabangan bertingkat (switch)?',
            'answer_id' => '7',
            'score' => '4'
        ]);

        //7.
        Maintest::create([
            'no' => '7.',
            'que' => 'Pada suatu program terdapat nomor, motor, dan harga untuk penyewaan seperti pada tabel berikut.
            Nomor	Motor	Harga
            1	Beat	50.000/hari
            2	Vario	70.000/hari
            3	Vespa	100.000/hari

            Pada program tersebut akan menggunakan variabel nomor, motor, dan harga. Program diawali dengan menampilkan motor yang tersedia beserta harganya kemudian terdapat menu pemilihan untuk memilih motor yang diikuti dengan pernyataan di dalamnya. Ketika dipilih akan mengisi variabel yang digunakan. Namun pada saat pemilihan memilih selain ke tiga nomor yang tersedia, maka akan menampilkan “motor tidak tersedia”. Bagaimana untuk membuat program pemilihan motor tersebut dengan percabangan bertingkat (switch)?',
            'answer_id' => '7',
            'score' => '3'
        ]);

        //7.a.
        Maintest::create([
            'no' => '7.a.',
            'que' => 'Buatlah sebuah program pemilihan motor dengan percabangan bertingkat (switch). Pada program tersebut terdapat variabel nomor, variabel motor, dan variabel harga. Setiap kondisi atau pemilihan motor nomor ke berapa, maka memiliki harga sesuai dengan motor yang dipilih. Namun selain ke tiga nomor tersebut, motor tidak tersedia. Berikut tabelnya.

            Nomor	Motor	Harga
            1	Beat	50.000/hari
            2	Vario	70.000/hari
            3	Vespa	100.000/hari',
            'answer_id' => '7',
            'score' => '2'
        ]);

        //7.b.
        Maintest::create([
            'no' => '7.b.',
            'que' => 'Terdapat sebuah tabel motor beserta harganya.
            Nomor	Motor	Harga
            1	Beat	50.000/hari
            2	Vario	70.000/hari
            3	Vespa	100.000/hari

            Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (switch).
            Jika memilih nomor 1, maka motor = “Beat” dengan harga = 50.000. Jika memilih nomor 2, maka motor = “Vario” dengan harga = 70.000. Jika memilih nomor 3, maka motor = “Vespa” dengan 
            harga = 100.000, dan jika selain nomor 1 sampai 3, maka “motor tidak tersedia”.',
            'answer_id' => '7',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //8.2.
        Maintest::create([
            'no' => '8.2.',
            'que' => 'Tama berencana membeli sepatu yang akan dia jual kembali di rumahnya, ia membeli sepatu di suatu toko grosir. Di sana terdapat sepatu berbeda-beda dan harganya pun beragam pula, untuk daftarnya yaitu pada tabel berikut.

            Nomor	Sepatu	Harga
            1	Ventela	Rp. 300,000
            2	Adidas	Rp. 500,000
            3	Converse	Rp. 650,000
            4	Nike	Rp. 800,000

            Untuk pembeliannya, Tama diminta untuk memilih nomor pada sepatu dan banyak sepatu yang dibeli untuk menentukan harganya. Tetapi jika pemilihan selain dari 4 sepatu seperti pada tabel, maka sepatu tidak tersedia. Kemudian Tama memilih sepatu nomor 1 yaitu Ventela dengan harga Rp. 300,000 dengan banyak 3 sepatu. Untuk membuat sebuah program menu dan mengetahui total harga sepatu maka dibuat sebuah program. Bagaimana membuat sebuah program tersebut dengan program switch? ',
            'answer_id' => '8',
            'score' => '5'
        ]);

        Answer::create([
            'program' => '        - Daftar Sepatu -
            No.      Sepatu          Harga
            1.       Ventela         Rp. 300,000
            2.       Adidas          Rp. 500,000
            3.       Converse        Rp. 650,000
            4.       Nike            Rp. 800,000
            Masukkan nomor pilihan sepatu yang akan dibeli: 1
            Banyak sepatu: 3
            Sepatu yang dipilih yaitu sepatu Ventela dengan banyak 3
            Harga total yaitu Rp. 900000',
            'answer' => '300000',
            'type' => 'switch'
        ]);

        //8.1.
        Maintest::create([
            'no' => '8.1.',
            'que' => 'Suatu toko menjual beberapa macam sepatu dengan harga yang berbeda-beda, seperti pada daftar sebagai berikut.

            Nomor	Sepatu	Harga
            1	Ventela	Rp. 300,000
            2	Adidas	Rp. 500,000
            3	Converse	Rp. 650,000
            4	Nike	Rp. 800,000

            Jika pemilik toko ingin membuat suatu program untuk penjualan, maka dibuatkan sebuah program pemilihan sepatu serta banyak pembeliannya. Program diawali dengan pemilihan nomor pada sepatu kemudian banyak pembelian untuk menentukan harga totalnya. Dalam program tersebut bagaimana kode untuk membuat pemilihan sepatu dengan switch?',
            'answer_id' => '8',
            'score' => '4'
        ]);

        //8.
        Maintest::create([
            'no' => '8.',
            'que' => 'Pada suatu program terdapat nomor, sepatu, dan harga untuk pembelian seperti pada tabel berikut.

            Nomor	Sepatu	Harga
            1	Ventela	Rp. 300,000
            2	Adidas	Rp. 500,000
            3	Converse	Rp. 650,000
            4	Nike	Rp. 800,000

            Pada program tersebut akan menggunakan variabel nomor, sepatu, dan harga. Program diawali dengan menampilkan sepatu-sepatu seperti pada tabel kemudian terdapat menu pemilihan untuk memilih sepatu yang diikuti dengan pernyataan di dalamnya yaitu penentuan harga sepatu. Ketika memilih, maka variabel yang digunakan akan diisi sesuai dengan yang dipilih. Jika pemilihan nomor selain ke empat nomor seperti pada tabel, maka akan menampilkan “sepatu tidak tersedia”. Bagaimana untuk membuat program pemilihan sepatu tersebut dengan switch?',
            'answer_id' => '8',
            'score' => '3'
        ]);

        //8.a.
        Maintest::create([
            'no' => '8.a.',
            'que' => 'Buatlah sebuah program pemilihan sepatu dengan program switch. Pada program tersebut terdapat variabel nomor, variabel sepatu, dan variabel harga. Setiap kondisi atau pemilihan sepatu nomor ke berapa, maka memiliki harga sesuai dengan yang dipilih. Namun selain keempat nomor tersebut, sepatu tidak tersedia. Berikut tabelnya.

            Nomor	Sepatu	Harga
            1	Ventela	Rp. 300,000
            2	Adidas	Rp. 500,000
            3	Converse	Rp. 650,000
            4	Nike	Rp. 800,000',
            'answer_id' => '8',
            'score' => '2'
        ]);

        //8.b.
        Maintest::create([
            'no' => '8.b.',
            'que' => 'Terdapat sebuah tabel sepatu beserta harganya.
            Nomor	Sepatu	Harga
            1	Ventela	Rp. 300,000
            2	Adidas	Rp. 500,000
            3	Converse	Rp. 650,000
            4	Nike	Rp. 800,000

            Buatlah sebuah menu pemilihan sepatu seperti ketentuan berikut dengan percabangan bertingkat (switch).
            Jika memilih nomor 1, maka sepatu = “Ventela” dengan harga = 300,000. Jika memilih nomor 2, maka sepatu = “Adidas” dengan harga = 500,000. Dan seterusnya seperti tabel, jika pilihan selain nomor 1 sampai 4, maka “sepatu tidak tersedia”.',
            'answer_id' => '8',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //9.2.
        Maintest::create([
            'no' => '9.2.',
            'que' => 'Di waktu weekend, Tama dan keluarganya mengunjungi restoran SushiKu. Kemudian melakukan pemesanan dengan total harga Rp. 300.000. Tidak disangka, ternyata Tama mendapatkan diskon Rp. 50.000, karena pembelian sudah melewati Rp. 200.000 dan Tama termasuk member di restoran tersebut. Ternyata restoran ini sedang mengadakan suatu promo diskon yaitu ditampilkan sebagai berikut.

            Total Pembelian	Diskon
            Member SushiKu
            > Rp. 200.000	Rp. 50.000
            > Rp. 100.000	Rp. 30.000
            Bukan Member SushiKu
            > Rp. 100.000	Rp. 10.000


            Kemudian Tama berpikir, jika ingin menuangkan dalam suatu kode program, bagaimana kode program pada tersebut dibuat, terutama pada kondisi promo yang ditampilkan?',
            'answer_id' => '9',
            'score' => '5'
        ]);

        Answer::create([
            'program' => 'Apakah anda member SushiKu (y/t): y<br>
            Total harga pembelian: 300000<br>
            Total pembayaran: Rp. 250000',
            'answer' => '>200000',
            'type' => 'else if'
        ]);

        //9.1.
        Maintest::create([
            'no' => '9.1.',
            'que' => 'Terdapat suatu program untuk menghitung total pembayaran di suatu restoran sushi. Program diawali dengan memasukkan apakah pengguna termasuk member atau tidak dan kemudian memasukkan total harga pembelian. Restoran ini sedang mengadakan suatu promo diskon, baik untuk member ataupun tidak. Untuk promo diskonnya, disajikan pada tabel berikut.

            Total Pembelian	Diskon
            Member SushiKu
            > Rp. 200.000	Rp. 50.000
            > Rp. 100.000	Rp. 30.000
            Bukan Member SushiKu
            > Rp. 100.000	Rp. 10.000

            Setelah melalui pemeriksaan total pembelian untuk mendapatkan diskon, maka akan dilakukan perhitungan pembayaran, yaitu harga total beli dikurangi dengan harga diskon. Dan akan menampilkan total pembayaran keseluruhan. Untuk itu bagaimana penulisan kode pada program pemeriksaan dan penentuan diskon tersebut?',
            'answer_id' => '9',
            'score' => '4'
        ]);

        //9.
        Maintest::create([
            'no' => '9.',
            'que' => 'Suatu program pembayaran restoran sushi memiliki diskon tertentu untuk member ataupun yang tidak.
            Program diawali dengan menampilkan seperti tabel kemudian terdapat masukkan apakah pengguna termasuk member atau tidak yang akan disimpan datanya pada variabel member. Kemudian memasukkan total harga pembelian yang akan disimpan datanya pada variabel beli. Untuk kondisi diskon, disajikan pada tabel berikut.

            Total Pembelian	Diskon
            Member SushiKu
            > Rp. 200.000	Rp. 50.000
            > Rp. 100.000	Rp. 30.000
            Bukan Member SushiKu
            > Rp. 100.000	Rp. 10.000

            Bagaimana penulisan kode pada program tersebut?',
            'answer_id' => '9',
            'score' => '3'
        ]);

        //9.a.
        Maintest::create([
            'no' => '9.a.',
            'que' => 'Terdapat suatu program pembayaran restoran yang memiliki diskon tertentu dengan kondisi-kondisi tertentu. 

            Jika  termasuk member dari restoran tersebut, maka terdapat tiga kondisi diskon yang bisa didapatkan. Pembelian menggunakan variabel beli. Jika pembelian lebih dari Rp. 200.000, maka akan mendapatkan diskon Rp. 50.000. Jika pembelian lebih dari Rp. 100.000, maka akan mendapatkan diskon Rp. 30.000. Dan jika tidak memenuhi kondisi diskon tersebut, maka tidak mendapatkan diskon.

            Jika bukan termasuk member, maka terdapat dua kondisi diskon yang bisa didapatkan. Jika pembelian lebih dari Rp. 100.000, maka akan mendapatkan diskon Rp. 10.000. Dan jika tidak memenuhi kondisi diskon tersebut, maka tidak mendapatkan diskon.

            Bagaimana penulisan kode pada program tersebut?',
            'answer_id' => '9',
            'score' => '2'
        ]);

        //9.b.
        Maintest::create([
            'no' => '9.b.',
            'que' => 'Pada suatu program pembayaran restoran terdapat diskon dengan kondisi tertentu. Dalam program diawali dengan memasukkan apakah termasuk member atau tidak yang menggunakan variabel member. Kemudian dilanjutkan dengan memasukkan total harga pembelian.

            Jika  member, maka terdapat 3 kondisi diskon yang bisa didapatkan. Jika variabel beli > 200000, maka diskon = 50000. Jika variabel beli > 100000, maka diskon = 30000. Dan jika selain itu, maka diskon = 0.

            Jika bukan member, maka terdapat 2 kondisi diskon yang bisa didapatkan. Jika variabel beli > 100000, maka diskon 10000. Dan jika selain itu, maka diskon = 0.

            Bagaimana menuliskan kode tersebut dengan percabangan bersarang?',
            'answer_id' => '9',
            'score' => '1'
        ]);

        // ----------------------------------------------------------------------------------------

        //10.2.
        Maintest::create([
            'no' => '10.2.',
            'que' => 'Selepas lulus sekolah, Tama dan Timi mengikuti tes masuk tentara dan lulus seleksi administrasi. Kemudian dilakukan tes tinggi badan. Syarat kelulusannya yaitu sebagai berikut.
            Jenis Kelamin	Tinggi Badan
            Laki-laki	> 165 cm
            Perempuan	> 155 cm

            Saat dilakukan pemeriksaan pada suatu program, Timi memiliki tinggi badan 160 cm sehingga pada program menampilkan “Selamat anda lolos seleksi” karena berat badannya lebih dari 155 cm. Namun Tama dengan tinggi badan 164 cm sehingga pada program menampilkan “Maaf, anda tidak lolos seleksi” karena Tama berat badannya tidak lebih dari 165 cm. Pada kasus ini, bagaimana kode program pada kondisi tersebut?',
            'answer_id' => '10',
            'score' => '5'
        ]);

        Answer::create([
            'program' => 'Program Seleksi Tinggi Badan Calon Tentara<br>
            =========================================<br>
            ==jenis kelamin==<br>
            1.Laki-Laki<br>
            2.Perempuan<br>
            Pilih jenis kelamin anda : 2<br><br>

            ==Tinggi badan==<br>
            Masukkan tinggi badan anda :160<br>
            Selamat anda lolos seleksi',
            'answer' => '>=165',
            'type' => 'else if'
        ]);

        //10.1.
        Maintest::create([
            'no' => '10.1.',
            'que' => 'Terdapat suatu program untuk menentukan lolos atau tidaknya seseorang pada tes tinggi badan masuk tentara. Program diawali dengan memilih jenis kelamin (jk) kemudian memasukkan tinggi badan. Program berjalan dengan memiliki dua kondisi yaitu perempuan atau laki-laki, sesuai pemilihan. Kemudian dilanjutkan pemeriksaan tinggi badan pada laki-laki atau perempuan memenuhi syarat atau tidak dengan ketentuan sebagai berikut.

            Jenis Kelamin	Tinggi Badan
            Laki-laki	> 165 cm
            Perempuan	> 155 cm

            Jika sesuai syarat, maka akan menampilkan “Selamat anda lolos seleksi” pada program. Dan jika tidak lolos maka akan menampilkan “Maaf, anda tidak lolos seleksi”. Untuk membuat syarat tersebut pada suatu program, bagaimana penulisan kodenya?',
            'answer_id' => '10',
            'score' => '4'
        ]);

        //10.
        Maintest::create([
            'no' => '10.',
            'que' => 'Pada tes masuk tentara terdapat tes tinggi badan dengan syarat sebagai berikut.
            Jenis Kelamin	Tinggi Badan
            Laki-laki	> 165 cm
            Perempuan	> 155 cm

            Pada program diawali dengan menampilkan persyaratannya kemudian memilih jenis kelamin atau variabel jk. Dan memasukkan tinggi badan atau variabel tinggi.
            Jika sesuai syarat yaitu melebihi nilai tinggi badan, maka akan menampilkan “Selamat anda lolos seleksi” pada program. Dan jika tidak lolos yaitu tidak melebihi nilai tinggi badan maka akan menampilkan “Maaf, anda tidak lolos seleksi”. Untuk membuat syarat tersebut pada suatu program, bagaimana penulisan kodenya?',
            'answer_id' => '10',
            'score' => '3'
        ]);

        //10.a.
        Maintest::create([
            'no' => '10.a.',
            'que' => 'Jenis Kelamin	Tinggi Badan
            Laki-laki	> 165 cm
            Perempuan	> 155 cm

            Terdapat suatu kasus dalam pemeriksaan tinggi badan. Pada kondisi pertama jika laki-laki dengan variabel jk = 1 dan tinggi badannya lebih dari 165 maka lolos seleksi, jika tidak lebih dari 165 maka tidak lolos seleksi. Kemudian pada kondisi kedua jika perempuan dengan variabel jk = 2 dan tinggi badannya lebih dari 155 maka lolos seleksi, jika tidak lebih dari 155 maka tidak lolos seleksi. Untuk lolos seleksi akan menampilkan “Selamat anda lolos seleksi” dan untuk tidak lolos seleksi akan menampilkan “Maaf, anda tidak lolos seleksi”. Kemudian untuk pemilihan jenis kelamin selain 1 dan 2 akan menampilkan “Tidak ada pilihan tersebut”. Bagaimana penulisan kode pada kasus tersebut?',
            'answer_id' => '10',
            'score' => '2'
        ]);

        //10.b.
        Maintest::create([
            'no' => '10.b.',
            'que' => '
            Jenis Kelamin	Tinggi Badan
            Laki-laki	> 165 cm
            Perempuan	> 155 cm

            Pada suatu program kasus pemeriksa tinggi badan. Terdapat dua jenis kelamin. Untuk laki-laki memiliki nilai variabel jk 1 dan untuk perempuan memiliki nilai variabel 2. 

            Jika laki-laki kemudian jika variabel tinggi > 165, maka akan menampilkan “Selamat anda lolos seleksi”. Jika tidak maka akan menampilkan “Maaf, anda tidak lolos seleksi”.

            Jika perempuan kemudian jika variabel tinggi > 155, maka akan menampilkan “Selamat anda lolos seleksi”. Jika tidak maka akan menampilkan “Maaf, anda tidak lolos seleksi”.

            Jika tidak memilih 1 atau 2 untuk jenis kelamin, maka akan menampilkan "Tidak ada pilihan tersebut". 
            Bagaimana menuliskan kode tersebut dengan percabangan bersarang?',
            'answer_id' => '10',
            'score' => '1'
        ]);
    }
}
