<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Logic;
use App\Models\Style;
use App\Models\User;
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
            'program' => 'Koin: 4\n
                Putaran ke-1\n
                Putaran ke-2\n
                Putaran ke-3\n
                Putaran ke-4\n
                Putaran ke-5\n
                Putaran ke-6\n
                Putaran ke-7\n
                Putaran ke-8\n
                Jumlah putaran dari 4 koin adalah 8 putaran',
            'answer' => '12 putaran'
        ]);
        
        //02
        Logic::create([
            'que' => 'Pada permainan bombomcar jika memasukkan tiga koin, maka akan mendapatkan 6 putaran. Jika melakukan 14 putaran, maka berapa koin yang dibutuhkan? Untuk menjawabnya silahkan buat kode program sederhana menggunakan bahasa C dengan fungsi repeat dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Putaran: 6\n
                2 putaran membutuhkan 1 koin\n
                4 putaran membutuhkan 2 koin\n
                6 putaran membutuhkan 3 koin\n
                Jumlah koin yang dibutuhkan untuk 6 putaran adalah 3 koin',
            'answer' => '7 koin'
        ]);

        //03
        Logic::create([
            'que' => 'Terdapat 4 mobil yang memiliki kecepatan konstan yang berbeda. Mobil pertama memiliki kecepatan 30 km/jam, mobil kedua memiliki kecepatan 50 km/jam, mobil ketiga memiliki kecepatan 70 km/jam, mobil keempat memiliki kecepatan 100 km/jam, dan mobil lainnya memiliki kecepatan hanya 20 km/jam. Dalam waktu 3 jam, mobil pertama sudah menempuh 90 km. Berapa km jarak yang sudah ditempuh oleh mobil ketiga dalam waktu 3 jam? Untuk menjawabnya silahkan buat kode program sederhana percabangan bertingkat (if, if else, else) menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Daftar Mobil
                Mobil 1 - kecepatan 30 km/jam
                Mobil 2 - kecepatan 50 km/jam
                Mobil 3 - kecepatan 70 km/jam
                Mobil 4 - kecepatan 100 km/jam
                Pilihan mobil: 1
                Mobil 1 dengan kecepatan 30km/jam sudah menempuh jarak 90 km dalam 3 jam.',
            'answer' => '210 km'
        ]);

        //04
        Logic::create([
            'que' => 'Di suatu stasiun pengisian bahan bakar terdapat 3 macam bahan bakar, yaitu Pertalite dengan harga Rp10.000, Pertamax dengan harga Rp14.500, dan Pertamax Turbo dengan harga Rp15.900. Sebuah mobil mengisi bahan bakarnya dengan bahan bakar Pertamax dan melakukan pembayaran sejumlah Rp100.000. Mobil tersebut mendapatkan bahan bakar Pertamax sejumlah 6,9 liter. Jika membayar Rp160.000 pada bahan bakar Pertamax turbo, maka akan mendapatkan berapa liter? Untuk menjawabnya silahkan buat kode program sederhana percabangan bertingkat (switch-case) menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Daftar Bahan Bakar\n
                1. Pertalite - Rp10.000/liter\n
                2. Pertamax - Rp14.500/liter\n
                3. Pertamax Turbo - Rp15.900/liter\n\n
                Pilihan bahan bakar: 2\n
                Jumlah bayar (Rp.): 100000\n
                Pembayaran Pertamax sejumlah Rp. 100.000 mendapatkan 6,9 liter',
            'answer' => '10 liter'
        ]);

        //05
        Logic::create([
            'que' => 'Seorang petani membeli biji kacang merah di suatu toko. Harga biji kacang merah tersebut Rp30.000/kg. Jika membeli 5 kg, maka akan mendapatkan diskon 20%. Petani tersebut membeli biji kacang merah sebanyak 7 kg dan membayar Rp210.000, tetapi mendapatkan diskon 20% karena memenuhi syarat diskon. Sehingga petani hanya membayar Rp168.000. Jika petani tersebut membeli 8 kg, apakah petani tersebut mendapatkan diskon, dan jika mendapatkan diskon, berapa total bayar yang petani harus bayar? Untuk menjawabnya silahkan buat kode program sederhana percabangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Selamat datang di toko kami!\n
                Harga biji kacang merah hari ini yaitu Rp30.000/kg\n
                Terdapat diskon 20% untuk pembelian biji kacang merah jika membeli lebih dari 5 kg\n\n
                Berat yang dibeli: 7 kg\n
                Anda mendapatkan diskon 20%\n
                Sehingga anda membayar hanya Rp168000',
            'answer' => 'Rp192000'
        ]);

        //06
        Logic::create([
            'que' => 'Seorang petani menanam biji bunga di kebunnya. Kebun petani tersebut akan memuat 3 bibit per petaknya, tetapi jika menggunakan pupuk hanya memuat 2 bibit per petaknya. Petani tersebut akan menanam 30 bibit menggunakan pupuk, maka ia akan menggunakan 15 petak kebunnya. Jika petani tersebut akan menanam 45 bibit tanpa pupuk, berapa petak kebun yang akan digunakan petani? Untuk menjawabnya silahkan buat kode program sederhana percabangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => 'Program penghitung petak kebun\n
                Jika menggunakan pupuk, maka setiap petak hanya memuat 2 bibit.\n
                Jika tidak menggunakan pupuk, maka setiap petak memuat 3 bibit.\n
                Banyak bibit: 30\n
                Apakah menggunakan pupuk?\n
                1. Ya\n
                2. Tidak\n
                Jawaban: 1\n
                Anda menggunakan pupuk\n
                30 bibit, akan menggunakan 15 petak (2 bibit/petak)',
            'answer' => '15 petak'
        ]);

        //07
        Logic::create([
            'que' => 'Seseorang sedang menangkap tikus yang berada di sawah. Ia mencari tikus yang ideal, tikus yang ideal adalah tikus dengan badan gemuk yaitu lebih dari 100 gram dan memiliki ekor hitam. Jika tikus memiliki berat kurang dari 100 gram atau memiliki ekor putih, maka tikus tersebut tidak ideal. Kemudian didapatkan lah seekor tikus dengan berat 112 gram dengan ekor hitam maka tikus tersebut ideal. Jika menangkap tikus dengan berat 200 gram dan memiliki ekor putih, apakah tikus tersebut ideal? Untuk menjawabnya silahkan buat kode program sederhana dengan percabangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan. ',
            'program' => '- Penentu tikus ideal -\n
                Warna ekor putih atau hitam (p/h):h\n
                Berat tikus: 112 gram\n
                Tikus tersebut ideal!',
            'answer' => 'Tikus tersebut tidak ideal!'
        ]);

        //08
        Logic::create([
            'que' => 'Di bawah ini diberikan gambar sejumlah ikan yang ditangkap dari suatu kolam. Jika seekor ikan memiliki badan gemuk dan bergaris tipis maka ikan tersebut mahal, namun jika sebaliknya ikan tersebut murah. Apakah gambar sejumlah tikus di bawah ini cenderung mahal atau tidak? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan sederhana menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan seperti contoh hasil program yang berada di sebelah kanan.',
            'program' => '- Ikan yang didapat -\n
                1 Ikan kurus bergaris tebal\n
                2 Ikan kurus bergaris tebal\n
                3 Ikan kurus bergaris tebal\n
                4 Ikan kurus bergaris tebal\n
                5 Ikan kurus bergaris tebal\n
                6 Ikan kurus bergaris tebal\n
                7 Ikan kurus bergaris tebal\n
                8 Ikan kurus bergaris tebal\n
                9 Ikan kurus bergaris tebal\n

                1 Ikan kurus bergaris tipis\n
                2 Ikan kurus bergaris tipis\n
                3 Ikan kurus bergaris tipis\n
                4 Ikan kurus bergaris tipis\n
                5 Ikan kurus bergaris tipis\n
                6 Ikan kurus bergaris tipis\n
                7 Ikan kurus bergaris tipis\n
                8 Ikan kurus bergaris tipis\n
                9 Ikan kurus bergaris tipis\n
                10 Ikan kurus bergaris tipis\n
                11 Ikan kurus bergaris tipis\n
                12 Ikan kurus bergaris tipis\n

                1 Ikan gemuk bergaris tipis\n
                2 Ikan gemuk bergaris tipis\n
                3 Ikan gemuk bergaris tipis\n
                4 Ikan gemuk bergaris tipis\n

                1 Ikan gemuk bergaris tebal\n
                2 Ikan gemuk bergaris tebal\n
                3 Ikan gemuk bergaris tebal\n

                Ikan kurus yang memiliki garis tebal yaitu 9/21 dari keseluruhan ikan kurus\n
                Ikan gemuk yang memiliki garis tebal yaitu 4/7 dari keseluruhan ikan gemuk\n',
            'answer' => '9/12'
        ]);

        //09
        Logic::create([
            'que' => 'Tiga orang siswa dari kelas I, II, dan III dipilih menjadi anggota pengurus organisasi siswa. Sebuah panitia yang terdiri dari tiga orang harus dibentuk dari setiap kelas harus diwakili oleh seorang siswa. Semua kombinasi yang mungkin harus dipertimbangkan sebelum diambil keputusan.\nDua kombinasi yang mungkin adalah Dedi, Tono, dan Atang (DTA), dan Nani, Ida, dan Rita (NIR). \nAnggota Pengurus:
            Kelas 1:	Dadi (D), Nani (N), Gito (G)\n
            Kelas 2:	Tono (T), Ida (I), Susi (S)\n
            Kelas 3:	Atang (A), Rita (R), Beti (B)\n
            Apa saja kombinasi yang mungkin selain kedua kombinasi tersebut? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan kombinasi nama-nama yang mungkin.',
            'program' => '',
            'answer' => 'DTA  DTR  DTB  DIA  DIR  DIB  DSA  DSR  DSB  NTA  NTR  NTB  NIA  NIR  NIB  NSA  NSR  NSB  GTA  GTR  GTB  GIA  GIR  GIB  GSA  GSR  GSB'
        ]);
        
        //10
        Logic::create([
            'que' => 'Terdapat dua wadah yang isinya terdapat masing-masing 5 bola berwarna, pada wadah pertama warna-warna bola tersebut yaitu Merah (M), Jingga (J), Kuning (K), Hijau (H), dan Biru (B). Kemudian pada wadah kedua terdapat warna Putih (P), Ungu (U), Abu-abu (A), Coklat (C), dan Toska (T). Bola-bola tersebut dipasangkan antara wadah pertama dengan wadah kedua, untuk disimpan di suatu rak. Pasangan pertama yaitu Merah (M) dan Putih (P). Apa saja pasangan yang memungkinkan selain pasangan tersebut? Untuk menjawabnya silahkan buat kode program sederhana dengan perulangan bersarang menggunakan bahasa C dan dituliskan di bagian jawaban. Program harus menampilkan pasangan bola berwarna lainnya yang memungkinkan.',
            'program' => '',
            'answer' => 'MP  MU  MA  MC  MT  JP  JU  JA  JC  JT  KP  KU  KA  KC  KT  HP  HU  HA  HC  HT  BP  BU  BA  BC  BT'
        ]);

    }
}
