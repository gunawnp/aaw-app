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
            'que' => 'Empat koin dapat digunakan untuk memainkan bombomcar enam putaran. Jika mempunyai enam koin, berapa putaran yang didapatkan?',
            'option' => 'a. 7 putaran&b. 8 putaran&c. 9 putaran&d. 10 putaran&e. Lain-lain',
            'reason' => '1. Banyaknya putaran berbanding dengan banyaknya koin akan selalu sama dengan 3 banding 2&2. Dengan lebih banyak koin, selisih banyaknya putaran dan koin akan makin kecil&3. Selisih banyaknya putaran dan koin akan selalu 2&4. Dengan empat buah koin selisih antara banyaknya putaran dan koin sama dengan dua. Dengan enam buah koin selisihnya juga akan dua&5. Tidak ada cara untuk meramalkannya',
            'answer1' => 'C',
            'answer2' => '1'
        ]);

        //02
        Logic::create([
            'que' => '7 koin dapat digunakan untuk memainkan bombomcar 10 putaran, Jika ingin melakukan 13 putaran, berapa buah koin yang diperlukan?',
            'option' => 'a. 7 putaran&b. 8 putaran&c. 9 putaran&d. 11 putaran&e. Lain-lain',
            'reason' => '1. Banyaknya koin berbanding dengan banyaknya putaran akan selalu sama dengan 2 banding 3&2. Jika banyaknya putaran bertambah tujuh maka diperlukan 5 buah koin lebih banyak&3. Selisih banyaknya putaran dan banyaknya koin akan selalu dua&4. Banyaknya koin akan sama dengan setengah dari banyaknya putaran&5. Tidak ada cara untuk meramalkan banyaknya koin',
            'answer1' => 'C',
            'answer2' => '1'
        ]);

        //03
        Logic::create([
            'que' => 'Terdapat lima pendulum dari suatu tihang. Pendulum pertama memiliki panjang 10 cm dan berat 5 w, pendulum kedua memiliki panjang 20 cm dan berat 3 w, pendulum ketiga memiliki panjang 15 cm dan berat 5 w, pendulum keempat memiliki panjang 10 cm dan berat 10 w, dan pendulum kelima memiliki panjang 5 cm dan berat 4 w. Jika perubahan panjang tali pendulum akan mengubah waktu ayun pendulum itu. Pendulum-pendulum mana yang akan anda pergunakan?',
            'option' => 'a. 1 dan 4&b. 2 dan 4&c. 1 dan 3&d. 2 dan 5&e. Semuanya',
            'reason' => '1. pendulum yang terpanjang seharusnya diuji terhadap pendulum yang terpendek&2. semua pendulum harus diuji satu terhadap yang lain&3. dengan diperpanjang pendulum, berat bebannya seharusnya diperingan&4. pendulum-pendulum itu seharusnya sama panjang tetapi bebannya seharusnya berbeda&5. pendulum-pendulum itu seharusnya berbeda panjang tetapi berat bebannya seharusnya sama',
            'answer1' => 'C',
            'answer2' => '5'
        ]);

        //04
        Logic::create([
            'que' => 'Terdapat lima pendulum dari suatu tihang. Pendulum pertama memiliki panjang 10 cm dan berat 5 w, pendulum kedua memiliki panjang 20 cm dan berat 3 w, pendulum ketiga memiliki panjang 15 cm dan berat 5 w, pendulum keempat memiliki panjang 10 cm dan berat 10 w, dan pendulum kelima memiliki panjang 5 cm dan berat 4 w. Jika perubahan beban pada ujung tali akan mengubah waktu ayun pendulum. Pendulum-pendulum manakah yang akan dipergunakan?',
            'option' => 'a. 1 dan 4&b. 2 dan 4&c. 1 dan 3&d. 2 dan 5&e. Semuanya',
            'reason' => '1. Beban yang terberat seharusnya dibandingkan dengan beban yang teringan&2. Semua pendulum perlu diuji terhadap yang lainnya.&3. Dengan diperberat beban seharusnya panjang pendulum itu diperpendek&4. Berat beban seharusnya berbeda tetapi panjang pendulum-pendulum seharusnya sama&5. Berat beban itu seharusnya sama tetapi panjang pendulum-pendulum seharusnya berbeda',
            'answer1' => 'A',
            'answer2' => '4'
        ]);

        //05
        Logic::create([
            'que' => 'Seorang petani membeli sebungkus biji-bijian yang berisi 3 biji kacang merah dan 3 biji kedelai. Petani itu secara sembarang mengambil satu biji dari dalam bungkus, jika yang terambil adalah kacang merah, maka akan langsung ditanam. Tetapi jika biji kedelai yang terambil, maka akan disimpan di toples khusus. Berapa besar kemungkinan biji yang langsung ditanam?',
            'option' => 'a. 1 dari 2&b. 1 dari 3&c. 1 dari 4&d. 1 dari 6&e. 4 dari 6',
            'reason' => '1. Diperlukan empat pilihan sebab ketiga biji kedelai itu dapat dipilih dalam satu barisan&2. Terdapat enam biji kacang merah dan satu kacang merah pasti terambil&3. Satu biji kacang merah harus dipilih dari banyaknya kacang merah yang tiga biji itu&4. Setengah dari banyaknya biji-bijian itu adalah biji kacang merah&5. Selain kacang merah, dalam bungkus itu terdapat tiga biji kedelai yang dapat dipilih dari banyaknya biji yang enam itu.',
            'answer1' => 'A',
            'answer2' => '4'
        ]);

        //06
        Logic::create([
            'que' => 'Seorang petani membeli sebungkus benih dari bermacam-macam bunga. Dalam bungkus 21 biji yang terdiri dari: <br>
                &nbsp; 3 biji bunga merah yang pendek, <br>
                &nbsp; 4 biji bunga kuning yang pendek, <br>
                &nbsp; 5 biji bunga biru yang pendek, <br>
                &nbsp; 4 biji bunga merah yang panjang, <br>
                &nbsp; 2 biji bunga kuning yang panjang, dan <br>
                &nbsp; 3 biji bunga biru yang panjang. <br>
            Petani itu akan menanam satu biji benih secara acak, dan jika tumbuh bunga merah, maka ia akan memotong dan memasukkan bunga tersebut ke dalam keranjang. Namun, jika tumbuh bunga lain, maka ia akan membiarkan bunga tersebut tumbuh dan berkembang. Berapa besar kemungkinan bahwa keranjang tersebut berisi bunga merah setelah tindakan petani itu?',
            'option' => 'a. 1 dari 2&b. 1 dari 3&c. 1 dari 7&d. 1 dari 21&e. Lain-lain',
            'reason' => '1. Satu biji seharusnya dipilih di antara biji-biji yang akan menghasilkan bunga-bunga merah, kuning, dan biru&2. 1/4 dari yang pendek dan 4/9 dari yang panjang adalah merah&3. Tidak bergantung apakah yang diambil itu satu biji bunga pendek atau satu biji bunga panjang. Satu biji bunga merah perlu diambil dari keseluruhan biji bunga merah yang tujuh itu&4. Satu biji bunga merah harus dipilih dari keseluruhan 21 biji itu&5. Tujuh dari 21 biji itu akan menghasilkan bunga merah',
            'answer1' => 'B',
            'answer2' => '5'
        ]);

        //07
        Logic::create([
            'que' => 'Di bawah ini diberikan gambar sejumlah tikus yang ditangkap dari satu bagian sebidang sawah. Jika seekor tikus memiliki badan gemuk dan ekor hitam maka tikus tersebut ideal, namun jika sebaliknya tikus tersebut tidak ideal. Apakah gambar sejumlah tikus di bawah ini cenderung ideal atau tidak?',
            'option' => 'a. Ya&b. Tidak',
            'reason' => '1. 16/22 dari tikus gemuk berekor hitam dan 6/8 tikus kurus, berekor putih&2. Beberapa tikus gemuk, berekor hitam dan beberapa tikus kurus berekor putih&3. Dari tiga puluh ekor tikus, 18 berekor hitam dan 12 berekor putih&4. Tidak semua tikus gemuk berekor hitam dan tidak semua tikus kurus berekor putih&5. 6/12 dari tikus berekor putih adalah gemuk',
            'answer1' => 'A',
            'answer2' => '1'
        ]);

        //08
        Logic::create([
            'que' => 'Di bawah ini diberikan gambar sejumlah ikan yang ditangkap dari suatu kolam. Jika seekor ikan memiliki badan gemuk dan bergaris tipis maka ikan tersebut mahal, namun jika sebaliknya tikus tersebut murah. Apakah gambar sejumlah tikus di bawah ini cenderung mahal atau tidak?',
            'option' => 'a. Ya&b. Tidak',
            'reason' => '1. Beberapa ikan gemuk, bergaris lebar dan beberapa ikan kurus, bergaris kecil&2. 3/7 dari ikan gemuk, bergaris lebar&3. 12/28 ikan bergaris lebar dari 16/28 ikan, bergaris kecil&4. 3/7 dari ikan gemuk, bergaris lebar dan 9/21 dari ikan kurus, bergaris lebar&5. Beberapa ikan yang bergaris lebar adalah kurus dan gemuk',
            'answer1' => 'B',
            'answer2' => '4'
        ]);

        //09
        Logic::create([
            'que' => 'Tiga orang siswa dari kelas I, II, dan III dipilih menjadi anggota pengurus organisasi siswa. Sebuah panitia yang terdiri dari tiga orang harus dibentuk dari setiap kelas harus diwakili oleh seorang siswa. Semua kombinasi yang mungkin harus dipertimbangkan sebelum diambil keputusan. <br>
            Dua kombinasi yang mungkin adalah Dedi, Tono, dan Atang (DTA), dan Nani, Ida, dan Rita (NIR). <br>
            Tuliskanlah jawaban di ruang yang tersedia, semua kombinasi yang mungkin selain kedua kombinasi tersebut. 
            Anggota Pengurus: <br>
            Kelas 1:	Dadi (D), Nani (N), Gito (G) <br>
            Kelas 2:	Tono (T), Ida (I), Susi (S) <br>
            Kelas 3:	Atang (A), Rita (R), Beti (B) <br>',
            'answer1' => 'DTA, DTB, DIA, DIR, DTR, DIB, DSA, DSR, DSB, NTA, NTR, NTB, NIA, NIR,  NIB, NSA, NSR, NSB, GTA, GTR, GTB, GIA, GIR, GIB, GSA, GSR, GSB',
            'answer2' => '0'
        ]);

        //10
        Logic::create([
            'que' => 'Terdapat suatu rak untuk menyimpan bola berwarna yang tersedia empat tempat. Warna-warna tersebut yaitu Biru (B), Kuning (K), Hijau (H), dan Merah (M). <br>
            Setiap bola dapat menempati satu diantara ke-empat tempat itu. Satu cara bola-bola menempati tempat yaitu dalam urutan BKHM. Tuliskan semua cara yang lain yang mungkin agar bola-bola tersebut menempati keempat tempat itu. Tuliskanlah jawaban di ruang yang tersedia.',
            'answer1' => 'BKHM, BKMH, BHMK, BMKH, BHKM, BMHK, KHMB, KMBH, KHBM, KMHB, KBHM, KBHM, HMKB, HMBK, HBKM, HBMK, HKBM, HKMB, MBKH, MBHK, MKHB, MKBH, MHBK, MHKB',
            'answer2' => '0'
        ]);


        //Maintest - membuat soal untuk pretest dan posttest di database

        //1.5
        Maintest::create([
            'no' => '1.5',
            'que' => 'Suatu hari Tama pergi ke suatu toko swalayan, dia membeli beberapa makanan dan minuman. Kemudian dia ke kasir untuk menghitung harga dan membayar belanjaannya. Total harga barang yang Tama bawa yaitu 110,000, ternyata Tama mendapatkan diskon 30%, karena total belanjanya sudah melebihi 100,000. Pada kasus ini, bagaimana cara membuat suatu kode program pada kondisi tersebut?',
            'answer_id' => '1',
            'score' => '5'
        ]);

        Answer::create([
            'answer' =>
            'a.	if(harga>100000){ <br>
                    &nbsp; diskon = harga + 0.3; <br>
                }#

                b.	if(harga>100000){ <br>
                    &nbsp; diskon = harga * 0.5; <br>
                }#

                c.	if(harga>100000){ <br>
                    &nbsp; diskon = harga * 0.3; <br>
                }#

                d.	if(harga<100000){ <br>
                    &nbsp; diskon = harga * 0.3; <br>
                }#

                e.	if(harga<150000){ <br>
                    &nbsp; diskon = harga * 0.3; <br>
                }'
        ]);

        //1.4
        Maintest::create([
            'no' => '1.4',
            'que' => 'Pada suatu toko terdapat promo diskon. Jika harga belanja lebih dari 100,000 maka total belanja akan mendapatkan diskon 30%. Pemilik toko ingin menambahkan kondisi tersebut di program kasir miliknya, bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '1',
            'score' => '4'
        ]);

        //1.3
        Maintest::create([
            'no' => '1.3',
            'que' => 'Terdapat suatu kasus dalam berbelanja dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel harga. Jika harga yang dimasukkan lebih dari 100,000 maka akan mendapatkan diskon 30%, kemudian hasil dari diskon tersebut disimpan dalam variabel total. Bagaimana penulisan kode pada bagian kondisi tersebut?',
            'answer_id' => '1',
            'score' => '3'
        ]);

        //1.2.
        Maintest::create([
            'no' => '1.2.',
            'que' => 'Terdapat suatu kasus dalam berbelanja. Jika harga lebih dari 100,000 maka harga akan dikalikan 30%. Bagaimana penulisan kode kondisi pada kasus tersebut?',
            'answer_id' => '1',
            'score' => '2'
        ]);

        //1.1.
        Maintest::create([
            'no' => '1.1.',
            'que' =>
            'Dari kode berikut, bagian mana yang menjalankan pemeriksaan harga yang lebih dari Rp. 100.000 untuk mendapatkan diskon 30%?
            <br>
            #include &lt;stdio.h&gt;
 <br>
            int main(){ <br>
                &nbsp; int harga, diskon, total; <br>
                &nbsp; diskon = 0; <br>
                &nbsp; printf("Jumlah harga total belanja: "); <br>
                &nbsp; scanf("%d", &harga); <br>
                &nbsp; if(harga>100000){ <br>
                    &nbsp; &nbsp; diskon = harga * 0.3; <br>
                    &nbsp; &nbsp; printf("Anda mendapatkan diskon 30 persen karena total belanja lebih dari Rp. 100.000\n"); <br>
                &nbsp; } <br>
                &nbsp; total = harga - diskon; <br>
                &nbsp; printf("Total bayar: %d", total); <br>
                &nbsp; <br>
                &nbsp; return 0; <br>
            }',
            
            'answer_id' => '1',
            'score' => '1'
        ]);

       
    }
}
