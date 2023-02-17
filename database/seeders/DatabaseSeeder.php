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

        // ----------------------------------------------------------------------------------------

        // 2.2.
        // Maintest::create([
        //     'no' => '2.2.',
        //     'que' => 'Suatu hari Tama pergi ke suatu toko baju yang akan dia bawa untuk keluarganya sebagai oleh-oleh, dia membeli 12 baju dan ternyata Tama mendapatkan promo yaitu mendapatkan 3 baju tambahan gratis, karena baju yang dia beli lebih dari 10 pcs. Pada kasus ini, bagaimana cara membuat suatu kode program pada kondisi tersebut?',
        //     'answer_id' => '2',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Jumlah baju yang dibeli: 12<br>
        //     Mendapatkan 3 bonus baju!<br>
        //     Baju yang diterima yaitu sebanyak 15',
        //     'answer' => '>10',
        //     'type' => 'if'
        // ]);

        // //2.1.
        // Maintest::create([
        //     'no' => '2.1.',
        //     'que' => 'Pada suatu toko baju terdapat promo. Jika banyak baju yang dibeli lebih dari 10 pcs maka akan mendapatkan 3 bonus baju. Pemilik toko ingin membuat program tersebut, bagaimana penulisan kode pada tersebut?',
        //     'answer_id' => '2',
        //     'score' => '4'
        // ]);

        // //2.
        // Maintest::create([
        //     'no' => '2.',
        //     'que' => 'Terdapat suatu kasus dalam pembelian baju dan akan dibuat suatu program. Program diawali dengan sebuah masukkan yang akan disimpan pada variabel baju, yang berfungsi untuk masukkan jumlah baju yang dibeli. Jika jumlah baju yang dibeli lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, kemudian jumlah baju yang didapatkan disimpan dalam variabel baju. Bagaimana penulisan kode pada bagian kondisi tersebut?',
        //     'answer_id' => '2',
        //     'score' => '3'
        // ]);

        // //2.a.
        // Maintest::create([
        //     'no' => '2.a.',
        //     'que' => 'Terdapat suatu kasus dalam pembelian baju. Jika pembelian baju lebih dari 10 pcs maka akan mendapatkan 3 bonus baju, sehingga jumlah baju bertambah dan hasilnya disimpan di variabel baju. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '2',
        //     'score' => '2'
        // ]);

        // //2.b.
        // Maintest::create([
        //     'no' => '2.b.',
        //     'que' => 'Jika variabel baju lebih dari 10, maka variabel baju ditambah 3. Bagaimana penulisan kode tersebut dengan percabangan sederhana tunggal?',
        //     'answer_id' => '2',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //3.2.
        // Maintest::create([
        //     'no' => '3.2.',
        //     'que' => 'Di suatu jalan raya, Tama melihat peraturan ganjil genap pada kendaraan, namun dia bingung dan belum mengetahui bagaimana cara membedakannya. Ayahnya memberi tahu dia bahwa untuk nilai genap itu sama dengan suatu bilangan modulus terhadap dua akan menghasilkan nol, maka bilangan tersebut genap, jika tidak berarti bilangan tersebut ganjil. Untuk membantu Tama, bagaimana menuliskan kode pada suatu program tersebut?',
        //     'answer_id' => '3',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Cek bilangan ganjil atau genap: 6<br>
        //     Bilangan tersebut genap',
        //     'answer' => '%2==0',
        //     'type' => 'else'
        // ]);

        // //3.1.
        // Maintest::create([
        //     'no' => '3.1.',
        //     'que' => 'Seseorang mempunyai sebuah program pengecekan bilangan untuk menilai bilangan tersebut genap atau ganjil. Pada sistem kerja pengecekannya jika bilangan tersebut modulus 2 sama dengan 0 maka bilangan tersebut genap, dan jika tidak berarti ganjil. Bagaimana menuliskan kode pada kasus tersebut?',
        //     'answer_id' => '3',
        //     'score' => '4'
        // ]);

        // //3.
        // Maintest::create([
        //     'no' => '3.',
        //     'que' => 'Terdapat suatu program untuk menentukan bilangan tersebut ganjil atau genap. Program tersebut diawali dengan masukkan suatu variabel bilangan. Ketika memasukkan bilangan, program akan berjalan dilakukan pengecekan. Jika variabel bilangan modulus 2 sama dengan 0, maka variabel bilangan tersebut genap. dan jika tidak sama dengan 0 maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut?',
        //     'answer_id' => '3',
        //     'score' => '3'
        // ]);

        // //3.a.
        // Maintest::create([
        //     'no' => '3.a.',
        //     'que' => 'Terdapat suatu bilangan, jika bilangan tersebut dilakukan operasi yaitu variabel bilangan modulus 2 maka jika hasilnya 0, bilangan tersebut termasuk bilangan genap, jika tidak maka bilangan itu ganjil. Bagaimana menuliskan kode tersebut?',
        //     'answer_id' => '3',
        //     'score' => '2'
        // ]);

        // //3.b.
        // Maintest::create([
        //     'no' => '3.b.',
        //     'que' => 'Terdapat suatu bilangan, jika variabel bilangan modulus dua sama dengan 0 (bilangan % 2 == 0) maka bilangan tersebut genap, jika tidak maka bilangan tersebut ganjil. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
        //     'answer_id' => '3',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //4.2.
        // Maintest::create([
        //     'no' => '4.2.',
        //     'que' => 'Pada suatu hari Tama berkunjung ke suatu pos polisi, di sana ia melihat ada suatu program pengukur kecepatan kendaraan yang lewat. Kemudian terdapat kendaraan yang memiliki kecepatan kendaraan 90 km/jam maka kendaraan tersebut terlalu cepat dan akan terkena tilang, jika kendaraan tersebut memiliki kecepatan tidak lebih dari 80 km/jam maka kecepatannya normal. Untuk memahaminya, Tama mencoba membuat program tersebut. Bagaimana cara menuliskan kode pada program tersebut?',
        //     'answer_id' => '4',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Masukkan kecepatan kendaraan: 90<br>
        //     terlalu cepat, terkena tilang',
        //     'answer' => '>80',
        //     'type' => 'else'
        // ]);

        // //4.1.
        // Maintest::create([
        //     'no' => '4.1.',
        //     'que' => 'Sebuah program pengukur kecepatan kendaraan, menilai apakah suatu kendaraan terlalu cepat atau tidak. Jika kecepatan lebih dari 80 maka kecepatan suatu kendaraan terlalu cepat dan akan terkena tilang, dan jika tidak akan diberitahu bahwa kecepatan suatu kendaraan normal. Bagaimana menuliskan kode pada kasus tersebut?',
        //     'answer_id' => '4',
        //     'score' => '4'
        // ]);

        // //4.
        // Maintest::create([
        //     'no' => '4.',
        //     'que' => 'Terdapat suatu program untuk mengukur kecepatan kendaraan. Program tersebut diawali dengan masukkan suatu variabel kecepatan. Ketika memasukkan nilainya, program akan berjalan dan melakukan pengecekan. Jika variabel kecepatan lebih dari 80, maka variabel akan memberi peringatan yang dicetak pada program yaitu “terlalu cepat, terkena tilang”. Dan jika tidak, maka hanya akan memberi tahu pada program bahwa “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
        //     'answer_id' => '4',
        //     'score' => '3'
        // ]);

        // //4.a.
        // Maintest::create([
        //     'no' => '4.a.',
        //     'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika kecepatan lebih dari 80 maka kendaraan itu terlalu cepat dan akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka kecepatan kendaraan itu masih normal sehingga akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut?',
        //     'answer_id' => '4',
        //     'score' => '2'
        // ]);

        // //4.b.
        // Maintest::create([
        //     'no' => '4.b.',
        //     'que' => 'Terdapat suatu pengukur kecepatan kendaraan, jika variabel kecepatan > 80 maka akan mencetak “terlalu cepat, terkena tilang”, jika tidak maka akan mencetak “kecepatan normal”. Bagaimana menuliskan kode tersebut dengan percabangan sederhana ganda?',
        //     'answer_id' => '4',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //5.2.
        // Maintest::create([
        //     'no' => '5.2.',
        //     'que' => 'Di suatu kegiatan, Tama ditugaskan menjadi panitia konsumsi. Kemudian dengan budget Rp. 200,000 Tama harus membeli paket makan untuk panitia yang lain. Terdapat 4 paket utama dengan harga yang berbeda-beda, yaitu sebagai berikut.

        //     Paket	Harga
        //     Paket 1 Ayam Goreng	Rp. 12,000
        //     Paket 2 Ayam Bakar	Rp. 15,000
        //     Paket 3 Ayam Komplit	Rp. 18,000
        //     Paket 4 Bebek Goreng	Rp. 20,000

        //     Tama menentukan paket 4 yang dia pilih. Dengan budget Rp. 200,000, dia mendapatkan 10 bungkus. Bagaimana cara membuat sebuah program pemilihan paket makan dengan harga yang berbeda-beda tersebut dan dapat diketahui banyak bungkus yang diterima?',
        //     'answer_id' => '5',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => '- Daftar Paket Makan -<br>
        //     Paket    Harga<br>
        //     Paket 1 Ayam Goreng      Rp. 12,000<br>
        //     Paket 2 Ayam Bakar       Rp. 15,000<br>
        //     Paket 3 Ayam Komplit     Rp. 18,000<br>
        //     Paket 4 Bebek Goreng     Rp. 20,000<br>
        //     Masukkan nomor paket makanan yang akan dibeli: 4<br>
        //     Paket makanan yang dia dapatkan sejumlah 10 bungkus.',
        //     'answer' => '==4',
        //     'type' => 'else if'
        // ]);

        // //5.1.
        // Maintest::create([
        //     'no' => '5.1.',
        //     'que' => 'Di suatu warung makan terdapat paket-paket makanan. Terdapat 4 paket utama. Paket-paket ini memiliki harga yang berbeda beda yaitu sebagai berikut. 

        //     Paket	Harga
        //     Paket 1 Ayam Goreng	Rp. 12,000
        //     Paket 2 Ayam Bakar	Rp. 15,000
        //     Paket 3 Ayam Komplit	Rp. 18,000
        //     Paket 4 Bebek Goreng	Rp. 20,000

        //     Bagaimana cara membuat sebuah program pemilihan paket dengan harga yang berbeda-beda tersebut?',
        //     'answer_id' => '5',
        //     'score' => '4'
        // ]);

        // //5.
        // Maintest::create([
        //     'no' => '5.',
        //     'que' => 'Pada sebuah program terdapat pemilihan paket makan dengan harga yang berbeda-beda, seperti pada tabel berikut.

        //     Paket	Harga
        //     Paket 1 Ayam Goreng	Rp. 12,000
        //     Paket 2 Ayam Bakar	Rp. 15,000
        //     Paket 3 Ayam Komplit	Rp. 18,000
        //     Paket 4 Bebek Goreng	Rp. 20,000

        //     Program akan berjalan diawali dengan menampilkan pilihan kemudian memberikan sebuah masukkan yang menggunakan variabel paket. Variabel paket akan memeriksa pilihan, pilihan-pilihan ini akan berisi seperti tabel. Bagaimana untuk membuat program pemilihan seperti pada tabel tersebut?',
        //     'answer_id' => '5',
        //     'score' => '3'
        // ]);

        // //5.a.
        // Maintest::create([
        //     'no' => '5.a.',
        //     'que' => 'Buatlah sebuah program pemilihan paket makan. Pada program tersebut terdapat variabel paket dan variabel harga. Setiap kondisi atau pemilihan paket nomor ke berapa, maka terdapat harga sesuai dengan paket yang dipilih. Berikut tabelnya.

        //     Paket	Harga
        //     Paket 1 Ayam Goreng	Rp. 12,000
        //     Paket 2 Ayam Bakar	Rp. 15,000
        //     Paket 3 Ayam Komplit	Rp. 18,000
        //     Paket 4 Bebek Goreng	Rp. 20,000',
        //     'answer_id' => '5',
        //     'score' => '2'
        // ]);

        // //5.b.
        // Maintest::create([
        //     'no' => '5.b.',
        //     'que' => 'Terdapat sebuah menu paket makanan.

        //     Paket	Harga
        //     Paket 1 Ayam Goreng	Rp. 12,000
        //     Paket 2 Ayam Bakar	Rp. 15,000
        //     Paket 3 Ayam Komplit	Rp. 18,000
        //     Paket 4 Bebek Goreng	Rp. 20,000

        //     Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (if, else if, else).
        //     Jika memilih paket 1, maka harganya Rp. 12,000. Jika memilih paket 2, maka harganya Rp. 15,000. Begitu seterusnya hingga pada pilihan terakhir',
        //     'answer_id' => '5',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //6.2.
        // Maintest::create([
        //     'no' => '6.2.',
        //     'que' => 'Tama melakukan touring motor dari kota Malang ke kota Surabaya. Jarak dari kedua kota itu yaitu 100 km. Terdapat 3 motor utama dengan kecepatan yang paling cepat dan motor lainnya dengan kecepatan standar, yaitu sebagai berikut.

        //     Motor	Kecepatan
        //     Motor 1	25 km/jam
        //     Motor 2	50 km/jam
        //     Motor 3	80 km/jam
        //     Motor lainnya	20 km/jam

        //     Tama menggunakan motor 2 dengan kecepatan 50 km/jam. Waktu yang ia tempuh yaitu 2 jam. Untuk mengetahui waktu yang ditempuh menggunakan motor lain, maka menggunakan rumus kecepatan. Waktu = jarak / kecepatan. Bagaimana cara membuat sebuah program pemilihan motor dengan kecepatan yang berbeda-beda tersebut sehingga akan mendapatkan waktu tempuhnya?',
        //     'answer_id' => '6',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Jarak = 100km<br>
        //     motor 1: 25km/jam<br>
        //     motor 2: 50km/jam<br>
        //     motor 3: 80km/jam<br>
        //     motor lainnya: 20km/jam<br>
        //     pilihan: 2<br>
        //     Waktu tempuh: 2.0 jam',
        //     'answer' => '==3',
        //     'type' => 'else if'
        // ]);

        // //6.1.
        // Maintest::create([
        //     'no' => '6.1.',
        //     'que' => 'Jarak antara kota Malang ke kota Surabaya adalah 100 km. Terdapat 3 motor utama dan motor lainnya yang digunakan untuk menempuh jarak tersebut. Motor-motor ini memiliki kecepatan berbeda beda yaitu sebagai berikut. 

        //     Motor	Kecepatan
        //     Motor 1	25 km/jam
        //     Motor 2	50 km/jam
        //     Motor 3	80 km/jam
        //     Motor lainnya	20 km/jam

        //     Bagaimana cara membuat sebuah program pemilihan motor dengan kecepatan yang berbeda-beda tersebut?',
        //     'answer_id' => '6',
        //     'score' => '4'
        // ]);

        // //6.
        // Maintest::create([
        //     'no' => '6.',
        //     'que' => 'Pada sebuah program terdapat pemilihan motor dengan kecepatan berbeda, seperti tabel berikut.

        //     Motor	Kecepatan
        //     Motor 1	25 km/jam
        //     Motor 2	50 km/jam
        //     Motor 3	80 km/jam
        //     Motor lainnya	20 km/jam

        //     Pada program tersebut akan menggunakan variabel motor untuk pemilihan dan variabel kecepatan. Program diawali dengan menampilkan pilihan motor yang tersedia, kemudian terdapat masukkan untuk memilih motor tersebut, dan terdapat beberapa kondisi untuk setiap pemilihan. Bagaimana untuk membuat program pemilihan motor tersebut?',
        //     'answer_id' => '6',
        //     'score' => '3'
        // ]);

        // //6.a.
        // Maintest::create([
        //     'no' => '6.a.',
        //     'que' => 'Buatlah sebuah program pemilihan motor. Pada program tersebut terdapat variabel motor dan variabel kecepatan. Setiap kondisi atau pemilihan motor nomor ke berapa, maka memiliki kecepatan sesuai dengan motor yang dipilih. Berikut tabelnya.

        //     Motor	Kecepatan
        //     Motor 1	25 km/jam
        //     Motor 2	50 km/jam
        //     Motor 3	80 km/jam
        //     Motor lainnya	20 km/jam',
        //     'answer_id' => '6',
        //     'score' => '2'
        // ]);

        // //6.b.
        // Maintest::create([
        //     'no' => '6.b.',
        //     'que' => 'Terdapat sebuah tabel motor beserta kecepatannya.
        //     Motor	Kecepatan
        //     Motor 1	25 km/jam
        //     Motor 2	50 km/jam
        //     Motor 3	80 km/jam
        //     Motor lainnya	20 km/jam

        //     Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (if, else if, else).
        //     Jika memilih motor 1, maka kecepatannya 25 km/jam. Jika memilih motor 2, maka kecepatannya 50 km/jam. Begitu seterusnya hingga pada pilihan terakhir.',
        //     'answer_id' => '6',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //7.2.
        // Maintest::create([
        //     'no' => '7.2.',
        //     'que' => 'Saat liburan akhir tahun, Tama dengan temannya bermain ke Yogyakarta. Di sana mereka berencana menyewa sebuah sepeda motor, setiap motor memiliki harga yang berbeda-beda sebagai berikut.

        //     Nomor	Motor	Harga
        //     1	Beat	50.000/hari
        //     2	Vario	70.000/hari
        //     3	Vespa	100.000/hari

        //     Kemudian Tama diminta untuk memilih nomor pada motor dan jumlah hari sewa untuk menentukan harganya. Selain ke tiga nomor tersebut, motor tidak tersedia. Tama memilih motor 1 yaitu Beat dengan harga Rp. 50.000 dengan lama 3 hari. Untuk membuat sebuah tampilan menu dan mengetahui harga total penyewaannya, maka dibuatkan sebuah program dengan percabangan bertingkat (switch)?',
        //     'answer_id' => '7',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => '        - Daftar Motor - <br>
        //     No.      Motor           Harga<br>
        //     1.       Beat            Rp. 50,000/hari<br>
        //     2.       Vario           Rp. 70,000/hari<br>
        //     3.       Vespa           Rp. 100,000/hari<br>
        //     Masukkan nomor pilihan motor yang akan disewa: 1<br>
        //     Berapa hari: 3<br>
        //     Motor yang dipilih yaitu motor Beat dengan lama 3 hari<br>
        //     Harga total penyewaan yaitu Rp. 150000',
        //     'answer' => '100000',
        //     'type' => 'switch'
        // ]);

        // //7.1.
        // Maintest::create([
        //     'no' => '7.1.',
        //     'que' => 'Pada suatu tempat terdapat penyewaan motor, dengan daftar sebagai berikut.

        //     Nomor	Motor	Harga
        //     1	Beat	50.000/hari
        //     2	Vario	70.000/hari
        //     3	Vespa	100.000/hari

        //     Jika pemilik penyewaan ingin mempermudah perhitungan pada pelanggan yang akan menyewa, maka dibuatkan sebuah program pemilihan motor serta jumlah hari untuk menyewa. Program diawali dengan pemilihan nomor pada motor kemudian jumlah hari untuk menentukan harganya. Dalam program tersebut bagaimana kode untuk membuat pemilihan tersebut dengan percabangan bertingkat (switch)?',
        //     'answer_id' => '7',
        //     'score' => '4'
        // ]);

        // //7.
        // Maintest::create([
        //     'no' => '7.',
        //     'que' => 'Pada suatu program terdapat nomor, motor, dan harga untuk penyewaan seperti pada tabel berikut.
        //     Nomor	Motor	Harga
        //     1	Beat	50.000/hari
        //     2	Vario	70.000/hari
        //     3	Vespa	100.000/hari

        //     Pada program tersebut akan menggunakan variabel nomor, motor, dan harga. Program diawali dengan menampilkan motor yang tersedia beserta harganya kemudian terdapat menu pemilihan untuk memilih motor yang diikuti dengan pernyataan di dalamnya. Ketika dipilih akan mengisi variabel yang digunakan. Namun pada saat pemilihan memilih selain ke tiga nomor yang tersedia, maka akan menampilkan “motor tidak tersedia”. Bagaimana untuk membuat program pemilihan motor tersebut dengan percabangan bertingkat (switch)?',
        //     'answer_id' => '7',
        //     'score' => '3'
        // ]);

        // //7.a.
        // Maintest::create([
        //     'no' => '7.a.',
        //     'que' => 'Buatlah sebuah program pemilihan motor dengan percabangan bertingkat (switch). Pada program tersebut terdapat variabel nomor, variabel motor, dan variabel harga. Setiap kondisi atau pemilihan motor nomor ke berapa, maka memiliki harga sesuai dengan motor yang dipilih. Namun selain ke tiga nomor tersebut, motor tidak tersedia. Berikut tabelnya.

        //     Nomor	Motor	Harga
        //     1	Beat	50.000/hari
        //     2	Vario	70.000/hari
        //     3	Vespa	100.000/hari',
        //     'answer_id' => '7',
        //     'score' => '2'
        // ]);

        // //7.b.
        // Maintest::create([
        //     'no' => '7.b.',
        //     'que' => 'Terdapat sebuah tabel motor beserta harganya.
        //     Nomor	Motor	Harga
        //     1	Beat	50.000/hari
        //     2	Vario	70.000/hari
        //     3	Vespa	100.000/hari

        //     Buatlah sebuah menu pemilihan motor seperti ketentuan berikut dengan percabangan bertingkat (switch).
        //     Jika memilih nomor 1, maka motor = “Beat” dengan harga = 50.000. Jika memilih nomor 2, maka motor = “Vario” dengan harga = 70.000. Jika memilih nomor 3, maka motor = “Vespa” dengan 
        //     harga = 100.000, dan jika selain nomor 1 sampai 3, maka “motor tidak tersedia”.',
        //     'answer_id' => '7',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //8.2.
        // Maintest::create([
        //     'no' => '8.2.',
        //     'que' => 'Tama berencana membeli sepatu yang akan dia jual kembali di rumahnya, ia membeli sepatu di suatu toko grosir. Di sana terdapat sepatu berbeda-beda dan harganya pun beragam pula, untuk daftarnya yaitu pada tabel berikut.

        //     Nomor	Sepatu	Harga
        //     1	Ventela	Rp. 300,000
        //     2	Adidas	Rp. 500,000
        //     3	Converse	Rp. 650,000
        //     4	Nike	Rp. 800,000

        //     Untuk pembeliannya, Tama diminta untuk memilih nomor pada sepatu dan banyak sepatu yang dibeli untuk menentukan harganya. Tetapi jika pemilihan selain dari 4 sepatu seperti pada tabel, maka sepatu tidak tersedia. Kemudian Tama memilih sepatu nomor 1 yaitu Ventela dengan harga Rp. 300,000 dengan banyak 3 sepatu. Untuk membuat sebuah program menu dan mengetahui total harga sepatu maka dibuat sebuah program. Bagaimana membuat sebuah program tersebut dengan program switch? ',
        //     'answer_id' => '8',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => '        - Daftar Sepatu -
        //     No.      Sepatu          Harga
        //     1.       Ventela         Rp. 300,000
        //     2.       Adidas          Rp. 500,000
        //     3.       Converse        Rp. 650,000
        //     4.       Nike            Rp. 800,000
        //     Masukkan nomor pilihan sepatu yang akan dibeli: 1
        //     Banyak sepatu: 3
        //     Sepatu yang dipilih yaitu sepatu Ventela dengan banyak 3
        //     Harga total yaitu Rp. 900000',
        //     'answer' => '300000',
        //     'type' => 'switch'
        // ]);

        // //8.1.
        // Maintest::create([
        //     'no' => '8.1.',
        //     'que' => 'Suatu toko menjual beberapa macam sepatu dengan harga yang berbeda-beda, seperti pada daftar sebagai berikut.

        //     Nomor	Sepatu	Harga
        //     1	Ventela	Rp. 300,000
        //     2	Adidas	Rp. 500,000
        //     3	Converse	Rp. 650,000
        //     4	Nike	Rp. 800,000

        //     Jika pemilik toko ingin membuat suatu program untuk penjualan, maka dibuatkan sebuah program pemilihan sepatu serta banyak pembeliannya. Program diawali dengan pemilihan nomor pada sepatu kemudian banyak pembelian untuk menentukan harga totalnya. Dalam program tersebut bagaimana kode untuk membuat pemilihan sepatu dengan switch?',
        //     'answer_id' => '8',
        //     'score' => '4'
        // ]);

        // //8.
        // Maintest::create([
        //     'no' => '8.',
        //     'que' => 'Pada suatu program terdapat nomor, sepatu, dan harga untuk pembelian seperti pada tabel berikut.

        //     Nomor	Sepatu	Harga
        //     1	Ventela	Rp. 300,000
        //     2	Adidas	Rp. 500,000
        //     3	Converse	Rp. 650,000
        //     4	Nike	Rp. 800,000

        //     Pada program tersebut akan menggunakan variabel nomor, sepatu, dan harga. Program diawali dengan menampilkan sepatu-sepatu seperti pada tabel kemudian terdapat menu pemilihan untuk memilih sepatu yang diikuti dengan pernyataan di dalamnya yaitu penentuan harga sepatu. Ketika memilih, maka variabel yang digunakan akan diisi sesuai dengan yang dipilih. Jika pemilihan nomor selain ke empat nomor seperti pada tabel, maka akan menampilkan “sepatu tidak tersedia”. Bagaimana untuk membuat program pemilihan sepatu tersebut dengan switch?',
        //     'answer_id' => '8',
        //     'score' => '3'
        // ]);

        // //8.a.
        // Maintest::create([
        //     'no' => '8.a.',
        //     'que' => 'Buatlah sebuah program pemilihan sepatu dengan program switch. Pada program tersebut terdapat variabel nomor, variabel sepatu, dan variabel harga. Setiap kondisi atau pemilihan sepatu nomor ke berapa, maka memiliki harga sesuai dengan yang dipilih. Namun selain keempat nomor tersebut, sepatu tidak tersedia. Berikut tabelnya.

        //     Nomor	Sepatu	Harga
        //     1	Ventela	Rp. 300,000
        //     2	Adidas	Rp. 500,000
        //     3	Converse	Rp. 650,000
        //     4	Nike	Rp. 800,000',
        //     'answer_id' => '8',
        //     'score' => '2'
        // ]);

        // //8.b.
        // Maintest::create([
        //     'no' => '8.b.',
        //     'que' => 'Terdapat sebuah tabel sepatu beserta harganya.
        //     Nomor	Sepatu	Harga
        //     1	Ventela	Rp. 300,000
        //     2	Adidas	Rp. 500,000
        //     3	Converse	Rp. 650,000
        //     4	Nike	Rp. 800,000

        //     Buatlah sebuah menu pemilihan sepatu seperti ketentuan berikut dengan percabangan bertingkat (switch).
        //     Jika memilih nomor 1, maka sepatu = “Ventela” dengan harga = 300,000. Jika memilih nomor 2, maka sepatu = “Adidas” dengan harga = 500,000. Dan seterusnya seperti tabel, jika pilihan selain nomor 1 sampai 4, maka “sepatu tidak tersedia”.',
        //     'answer_id' => '8',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //9.2.
        // Maintest::create([
        //     'no' => '9.2.',
        //     'que' => 'Di waktu weekend, Tama dan keluarganya mengunjungi restoran SushiKu. Kemudian melakukan pemesanan dengan total harga Rp. 300.000. Tidak disangka, ternyata Tama mendapatkan diskon Rp. 50.000, karena pembelian sudah melewati Rp. 200.000 dan Tama termasuk member di restoran tersebut. Ternyata restoran ini sedang mengadakan suatu promo diskon yaitu ditampilkan sebagai berikut.

        //     Total Pembelian	Diskon
        //     Member SushiKu
        //     > Rp. 200.000	Rp. 50.000
        //     > Rp. 100.000	Rp. 30.000
        //     Bukan Member SushiKu
        //     > Rp. 100.000	Rp. 10.000


        //     Kemudian Tama berpikir, jika ingin menuangkan dalam suatu kode program, bagaimana kode program pada tersebut dibuat, terutama pada kondisi promo yang ditampilkan?',
        //     'answer_id' => '9',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Apakah anda member SushiKu (y/t): y<br>
        //     Total harga pembelian: 300000<br>
        //     Total pembayaran: Rp. 250000',
        //     'answer' => '>200000',
        //     'type' => 'else if'
        // ]);

        // //9.1.
        // Maintest::create([
        //     'no' => '9.1.',
        //     'que' => 'Terdapat suatu program untuk menghitung total pembayaran di suatu restoran sushi. Program diawali dengan memasukkan apakah pengguna termasuk member atau tidak dan kemudian memasukkan total harga pembelian. Restoran ini sedang mengadakan suatu promo diskon, baik untuk member ataupun tidak. Untuk promo diskonnya, disajikan pada tabel berikut.

        //     Total Pembelian	Diskon
        //     Member SushiKu
        //     > Rp. 200.000	Rp. 50.000
        //     > Rp. 100.000	Rp. 30.000
        //     Bukan Member SushiKu
        //     > Rp. 100.000	Rp. 10.000

        //     Setelah melalui pemeriksaan total pembelian untuk mendapatkan diskon, maka akan dilakukan perhitungan pembayaran, yaitu harga total beli dikurangi dengan harga diskon. Dan akan menampilkan total pembayaran keseluruhan. Untuk itu bagaimana penulisan kode pada program pemeriksaan dan penentuan diskon tersebut?',
        //     'answer_id' => '9',
        //     'score' => '4'
        // ]);

        // //9.
        // Maintest::create([
        //     'no' => '9.',
        //     'que' => 'Suatu program pembayaran restoran sushi memiliki diskon tertentu untuk member ataupun yang tidak.
        //     Program diawali dengan menampilkan seperti tabel kemudian terdapat masukkan apakah pengguna termasuk member atau tidak yang akan disimpan datanya pada variabel member. Kemudian memasukkan total harga pembelian yang akan disimpan datanya pada variabel beli. Untuk kondisi diskon, disajikan pada tabel berikut.

        //     Total Pembelian	Diskon
        //     Member SushiKu
        //     > Rp. 200.000	Rp. 50.000
        //     > Rp. 100.000	Rp. 30.000
        //     Bukan Member SushiKu
        //     > Rp. 100.000	Rp. 10.000

        //     Bagaimana penulisan kode pada program tersebut?',
        //     'answer_id' => '9',
        //     'score' => '3'
        // ]);

        // //9.a.
        // Maintest::create([
        //     'no' => '9.a.',
        //     'que' => 'Terdapat suatu program pembayaran restoran yang memiliki diskon tertentu dengan kondisi-kondisi tertentu. 

        //     Jika  termasuk member dari restoran tersebut, maka terdapat tiga kondisi diskon yang bisa didapatkan. Pembelian menggunakan variabel beli. Jika pembelian lebih dari Rp. 200.000, maka akan mendapatkan diskon Rp. 50.000. Jika pembelian lebih dari Rp. 100.000, maka akan mendapatkan diskon Rp. 30.000. Dan jika tidak memenuhi kondisi diskon tersebut, maka tidak mendapatkan diskon.

        //     Jika bukan termasuk member, maka terdapat dua kondisi diskon yang bisa didapatkan. Jika pembelian lebih dari Rp. 100.000, maka akan mendapatkan diskon Rp. 10.000. Dan jika tidak memenuhi kondisi diskon tersebut, maka tidak mendapatkan diskon.

        //     Bagaimana penulisan kode pada program tersebut?',
        //     'answer_id' => '9',
        //     'score' => '2'
        // ]);

        // //9.b.
        // Maintest::create([
        //     'no' => '9.b.',
        //     'que' => 'Pada suatu program pembayaran restoran terdapat diskon dengan kondisi tertentu. Dalam program diawali dengan memasukkan apakah termasuk member atau tidak yang menggunakan variabel member. Kemudian dilanjutkan dengan memasukkan total harga pembelian.

        //     Jika  member, maka terdapat 3 kondisi diskon yang bisa didapatkan. Jika variabel beli > 200000, maka diskon = 50000. Jika variabel beli > 100000, maka diskon = 30000. Dan jika selain itu, maka diskon = 0.

        //     Jika bukan member, maka terdapat 2 kondisi diskon yang bisa didapatkan. Jika variabel beli > 100000, maka diskon 10000. Dan jika selain itu, maka diskon = 0.

        //     Bagaimana menuliskan kode tersebut dengan percabangan bersarang?',
        //     'answer_id' => '9',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //10.2.
        // Maintest::create([
        //     'no' => '10.2.',
        //     'que' => 'Selepas lulus sekolah, Tama dan Timi mengikuti tes masuk tentara dan lulus seleksi administrasi. Kemudian dilakukan tes tinggi badan. Syarat kelulusannya yaitu sebagai berikut.
        //     Jenis Kelamin	Tinggi Badan
        //     Laki-laki	> 165 cm
        //     Perempuan	> 155 cm

        //     Saat dilakukan pemeriksaan pada suatu program, Timi memiliki tinggi badan 160 cm sehingga pada program menampilkan “Selamat anda lolos seleksi” karena berat badannya lebih dari 155 cm. Namun Tama dengan tinggi badan 164 cm sehingga pada program menampilkan “Maaf, anda tidak lolos seleksi” karena Tama berat badannya tidak lebih dari 165 cm. Pada kasus ini, bagaimana kode program pada kondisi tersebut?',
        //     'answer_id' => '10',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Program Seleksi Tinggi Badan Calon Tentara<br>
        //     =========================================<br>
        //     ==jenis kelamin==<br>
        //     1.Laki-Laki<br>
        //     2.Perempuan<br>
        //     Pilih jenis kelamin anda : 2<br><br>

        //     ==Tinggi badan==<br>
        //     Masukkan tinggi badan anda :160<br>
        //     Selamat anda lolos seleksi',
        //     'answer' => '>=165',
        //     'type' => 'else if'
        // ]);

        // //10.1.
        // Maintest::create([
        //     'no' => '10.1.',
        //     'que' => 'Terdapat suatu program untuk menentukan lolos atau tidaknya seseorang pada tes tinggi badan masuk tentara. Program diawali dengan memilih jenis kelamin (jk) kemudian memasukkan tinggi badan. Program berjalan dengan memiliki dua kondisi yaitu perempuan atau laki-laki, sesuai pemilihan. Kemudian dilanjutkan pemeriksaan tinggi badan pada laki-laki atau perempuan memenuhi syarat atau tidak dengan ketentuan sebagai berikut.

        //     Jenis Kelamin	Tinggi Badan
        //     Laki-laki	> 165 cm
        //     Perempuan	> 155 cm

        //     Jika sesuai syarat, maka akan menampilkan “Selamat anda lolos seleksi” pada program. Dan jika tidak lolos maka akan menampilkan “Maaf, anda tidak lolos seleksi”. Untuk membuat syarat tersebut pada suatu program, bagaimana penulisan kodenya?',
        //     'answer_id' => '10',
        //     'score' => '4'
        // ]);

        // //10.
        // Maintest::create([
        //     'no' => '10.',
        //     'que' => 'Pada tes masuk tentara terdapat tes tinggi badan dengan syarat sebagai berikut.
        //     Jenis Kelamin	Tinggi Badan
        //     Laki-laki	> 165 cm
        //     Perempuan	> 155 cm

        //     Pada program diawali dengan menampilkan persyaratannya kemudian memilih jenis kelamin atau variabel jk. Dan memasukkan tinggi badan atau variabel tinggi.
        //     Jika sesuai syarat yaitu melebihi nilai tinggi badan, maka akan menampilkan “Selamat anda lolos seleksi” pada program. Dan jika tidak lolos yaitu tidak melebihi nilai tinggi badan maka akan menampilkan “Maaf, anda tidak lolos seleksi”. Untuk membuat syarat tersebut pada suatu program, bagaimana penulisan kodenya?',
        //     'answer_id' => '10',
        //     'score' => '3'
        // ]);

        // //10.a.
        // Maintest::create([
        //     'no' => '10.a.',
        //     'que' => 'Jenis Kelamin	Tinggi Badan
        //     Laki-laki	> 165 cm
        //     Perempuan	> 155 cm

        //     Terdapat suatu kasus dalam pemeriksaan tinggi badan. Pada kondisi pertama jika laki-laki dengan variabel jk = 1 dan tinggi badannya lebih dari 165 maka lolos seleksi, jika tidak lebih dari 165 maka tidak lolos seleksi. Kemudian pada kondisi kedua jika perempuan dengan variabel jk = 2 dan tinggi badannya lebih dari 155 maka lolos seleksi, jika tidak lebih dari 155 maka tidak lolos seleksi. Untuk lolos seleksi akan menampilkan “Selamat anda lolos seleksi” dan untuk tidak lolos seleksi akan menampilkan “Maaf, anda tidak lolos seleksi”. Kemudian untuk pemilihan jenis kelamin selain 1 dan 2 akan menampilkan “Tidak ada pilihan tersebut”. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '10',
        //     'score' => '2'
        // ]);

        // //10.b.
        // Maintest::create([
        //     'no' => '10.b.',
        //     'que' => '
        //     Jenis Kelamin	Tinggi Badan
        //     Laki-laki	> 165 cm
        //     Perempuan	> 155 cm

        //     Pada suatu program kasus pemeriksa tinggi badan. Terdapat dua jenis kelamin. Untuk laki-laki memiliki nilai variabel jk 1 dan untuk perempuan memiliki nilai variabel 2. 

        //     Jika laki-laki kemudian jika variabel tinggi > 165, maka akan menampilkan “Selamat anda lolos seleksi”. Jika tidak maka akan menampilkan “Maaf, anda tidak lolos seleksi”.

        //     Jika perempuan kemudian jika variabel tinggi > 155, maka akan menampilkan “Selamat anda lolos seleksi”. Jika tidak maka akan menampilkan “Maaf, anda tidak lolos seleksi”.

        //     Jika tidak memilih 1 atau 2 untuk jenis kelamin, maka akan menampilkan "Tidak ada pilihan tersebut". 
        //     Bagaimana menuliskan kode tersebut dengan percabangan bersarang?',
        //     'answer_id' => '10',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //11.2.
        // Maintest::create([
        //     'no' => '11.2.',
        //     'que' => 'Pada pelajaran matematika, Tama ditugaskan untuk menuliskan kelipatan angka 3 dari mulai 12 hingga 100. Tama mendapatkan sebagian angka-angkanya yaitu 12, 15, 18, 21, dan seterusnya. Namun untuk mempermudah menuliskannya, Tama membuat sebuah program pencetak sederhana dengan menggunakan perulangan. Pada program tersebut akan dicetak angka-angka kelipatan 3, tetapi jika sudah 10 angka, akan membuat baris baru untuk penulisannya. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '11',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => '12 15 18 21 24 27 30 33 36 39<br>
        //     42 45 48 51 54 57 60 63 66 69<br>
        //     72 75 78 81 84 87 90 93 96 99<br>
        //     Jumlah angka: 30',
        //     'answer' => 'i+3',
        //     'type' => 'for'
        // ]);

        // //11.1.
        // Maintest::create([
        //     'no' => '11.1.',
        //     'que' => 'Seseorang siswa ingin mengetahui angka kelipatan 3 yang dimulai dari 12 hingga 100 untuk mendapatkan polanya. Untuk itu, ia harus membuat suatu program yang di dalamnya terdapat perulangan. Dalam perulangan tersebut terdapat perintah untuk mencetak setiap angka kelipatan 3. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '11',
        //     'score' => '4'
        // ]);

        // //11.
        // Maintest::create([
        //     'no' => '11.',
        //     'que' => 'Terdapat suatu kasus untuk menampilkan angka-angka kelipatan 3. Program ini digunakan untuk mengetahui terdapat angka berapa saja pada kelipatan 3. Program diawali dengan deklarasi variabel-variabel yang digunakan yaitu variabel i dan variabel enter. Kemudian terdapat suatu perulangan yang di dalamnya mencetak angka dari mulai 12 sampai kelipatan 3 berikutnya hingga nilainya kurang dari 100. Kemudian dalam pencetakannya harus mencetak enter setelah terdapat 10 angka. Bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '11',
        //     'score' => '3'
        // ]);

        // //11.a.
        // Maintest::create([
        //     'no' => '11.a.',
        //     'que' => 'Terdapat suatu program perulangan. Program tersebut dibuat menggunakan perulangan for dengan variabel i, yang diawali dengan nilai 12 hingga 100. Iterasi atau naiknya nilai adalah 3. Pernyataan pada perulangan ini yaitu mencetak angka-angka yang menggunakan variabel i. Namun jika sudah 10 angka dicetak, harus mencetak enter. Bagaimana penulisan kode program perulangan tersebut?',
        //     'answer_id' => '11',
        //     'score' => '2'
        // ]);

        // //11.b.
        // Maintest::create([
        //     'no' => '11.b.',
        //     'que' => 'Terdapat suatu program perulangan sederhana. Program dibuat dengan menggunakan perulangan for, yang di dalamnya terdapat nilai awal dengan variabel i yaitu i=12, batas perulangan yaitu i<100, dan iterasi atau naiknya nilai yaitu i=i+3. Pernyataan  pertama pada perulangan ini yaitu sebuah kondisi, jika variabel enter % 10 == 0, maka akan mencetak \n atau enter. Dan setelahnya terdapat iterasi lain yaitu variabel enter++. Tujuan dari kondisi dan iterasi ini yaitu sebagai penghitung jika sudah 10 angka, maka akan mencetak enter. Selanjutnya yaitu mencetak variabel i. Bagaimana penulisan kode program perulangan sederhana ini?',
        //     'answer_id' => '11',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //12.2.
        // Maintest::create([
        //     'no' => '12.2.',
        //     'que' => 'Suatu waktu Tama menjual risol kepada teman-temannya di sekolah. Harga risol yang dijual yaitu Rp. 2,500. Ternyata saat menjualnya Tama kebingungan dalam menghitung banyak orang yang membeli dan berapa banyak risol yang dibeli setiap orangnya. Untuk itu ia membuat sebuah program untuk membantunya yang digunakan untuk memasukkan jumlah orang yang membeli, menghitung harga yang dibeli setiap orang yang tergantung pada banyaknya risol, dan terakhir dia menjumlahkan pendapatan totalnya. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '12',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Jumlah orang yang membeli: 3<br>
        //     Banyak risol orang ke-1: 3<br>
        //     Harganya: Rp.7500<br><br>

        //     Banyak risol orang ke-2: 4<br>
        //     Harganya: Rp.10000<br><br>

        //     Banyak risol orang ke-3: 2<br>
        //     Harganya: Rp.5000<br><br>

        //     Total harga keseluruhan yaitu Rp.22500',
        //     'answer' => '*2500',
        //     'type' => 'for'
        // ]);

        // //12.1.
        // Maintest::create([
        //     'no' => '12.1.',
        //     'que' => 'Seseorang menjual risol dengan harga Rp. 2,500. Untuk menghitung pendapatan pada setiap pembeli dan total pembeli, dimuatkan ke dalam suatu program dengan memasukkan banyak orang yang membeli dan banyak risol yang dibeli setiap orang. Dengan program ini akan ditampilkan harga total setiap orang dan total pendapatan penjualan. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '12',
        //     'score' => '4'
        // ]);

        // //12.
        // Maintest::create([
        //     'no' => '12.',
        //     'que' => 'Terdapat suatu kasus pada penjualan risol dan dibuatkan pada suatu program. Program ini digunakan untuk mengetahui harga perorang dan harga total pendapatan. Program diawali dengan memasukkan nilai banyak orang yang membeli pada variabel orang. Kemudian memasukkan banyak risol yang dibeli setiap orang dan diinisialisasikan pada variabel risol yang selanjutnya program akan menampilkan harga total pada setiap orang yang tergantung pada banyak risol yang dibeli tersebut, begitu seterusnya pada sejumlah orang yang membeli. Program diakhiri dengan menampilkan total harga keseluruhan. Bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '12',
        //     'score' => '3'
        // ]);

        // //12.a.
        // Maintest::create([
        //     'no' => '12.a.',
        //     'que' => 'Terdapat suatu kasus dalam pembelian makanan yaitu risol yang dibuatkan dalam sebuah program. Pada program tersebut terdapat perulangan. Perulangan tersebut akan berulang sejumlah orang yang membeli. Dalam perulangan tersebut meminta untuk memasukkan jumlah risol pada orang pertama, menghitung harga total risol untuk orang pertama tersebut, dan menampilkannya, begitu seterusnya hingga orang yang terakhir. Dan diakhiri dengan menampilkan total harga keseluruhan penjualan. Bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '12',
        //     'score' => '2'
        // ]);

        // //12.b.
        // Maintest::create([
        //     'no' => '12.b.',
        //     'que' => 'Pada suatu program terdapat perulangan for dengan batas variabel orang. Isi pada perulangan yaitu menampilkan “Banyak risol orang ke-...”, bagian titik-titik diisi dengan variabel iterasi pada perulangan. Dilanjutkan dengan mengisi nilainya dengan menyimpan pada variabel risol. Selanjutnya melakukan perhitungan jumlah risol dikalikan dengan harga risol yaitu 2500 dan menampilkan total perhitungan tersebut dengan variabel total. Setelah itu menjumlahkan harga masing-masing orang yang ditotalkan pada variabel total. Dilakukan perulangan sebanyak jumlah orang membeli kemudian menampilkan “total harga keseluruhan yaitu Rp. ...” dengan diikuti variabel total. Bagaimana penulisan kode tersebut dengan perulangan sederhana (for)?',
        //     'answer_id' => '12',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //13.2.
        // Maintest::create([
        //     'no' => '13.2.',
        //     'que' => 'Suatu hari Tama berencana untuk menabung, rencana untuk menabungnya yaitu Rp. 20.000 dalam 2 tahun atau 24 bulan. Namun Tama ingin mengetahui setiap bulan ia mendapatkan total tabungan berapa dan total tabungan terakhirnya ia akan mendapatkan berapa total uang yang ia dapatkan. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '13',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Masukkan uang yang ditabungkan setiap bulan: Rp. 20000<br>
        //     Masukkan berapa bulan tujuan menabung: 24<br>
        //     Semangat untuk menabung!<br>
        //     --------------------------------<br>
        //     Bulan ke-1 mendapatkan Rp. 20000<br>
        //     Bulan ke-2 mendapatkan Rp. 40000<br>
        //     Bulan ke-3 mendapatkan Rp. 60000<br>
        //     Bulan ke-4 mendapatkan Rp. 80000<br>
        //     Bulan ke-5 mendapatkan Rp. 100000<br>
        //     Bulan ke-6 mendapatkan Rp. 120000<br>
        //     Bulan ke-7 mendapatkan Rp. 140000<br>
        //     Bulan ke-8 mendapatkan Rp. 160000<br>
        //     Bulan ke-9 mendapatkan Rp. 180000<br>
        //     Bulan ke-10 mendapatkan Rp. 200000<br>
        //     Bulan ke-11 mendapatkan Rp. 220000<br>
        //     Bulan ke-12 mendapatkan Rp. 240000<br>
        //     Bulan ke-13 mendapatkan Rp. 260000<br>
        //     Bulan ke-14 mendapatkan Rp. 280000<br>
        //     Bulan ke-15 mendapatkan Rp. 300000<br>
        //     Bulan ke-16 mendapatkan Rp. 320000<br>
        //     Bulan ke-17 mendapatkan Rp. 340000<br>
        //     Bulan ke-18 mendapatkan Rp. 360000<br>
        //     Bulan ke-19 mendapatkan Rp. 380000<br>
        //     Bulan ke-20 mendapatkan Rp. 400000<br>
        //     Bulan ke-21 mendapatkan Rp. 420000<br>
        //     Bulan ke-22 mendapatkan Rp. 440000<br>
        //     Bulan ke-23 mendapatkan Rp. 460000<br>
        //     Bulan ke-24 mendapatkan Rp. 480000<br>
        //     --------------------------------<br>
        //     Total tabungan di bulan ke 24 yaitu sebesar Rp. 480000',
        //     'answer' => '<=bulan',
        //     'type' => 'while'
        // ]);

        // //13.1.
        // Maintest::create([
        //     'no' => '13.1.',
        //     'que' => 'Seseorang sedang memikirkan bagaimana membuat sebuah alat perhitungan untuk merencanakan menabung dengan jumlah tertentu dan dengan rentang waktu tertentu dalam bulan. Kemudian ia memikirkan untuk membuat suatu program perulangan sederhana yang tujuannya untuk mengetahui jumlah tabungan setiap bulan dan pada bulan terakhir ia akan mendapatkan berapa total uang yang ia dapatkan. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '13',
        //     'score' => '4'
        // ]);

        // //13.
        // Maintest::create([
        //     'no' => '13.',
        //     'que' => 'Terdapat suatu program penghitung rencana tabungan dengan jumlah uang yang sama. Program diawali dengan deklarasi variabel yang digunakan untuk program utamanya. Setelah itu ditampilkan suatu perintah untuk memasukkan nilai uang dan berapa bulan untuk menabung. Masukkan tersebut disimpan di variabel uang dan variabel bulan. Selanjutnya terdapat perulangan yang berulang sebanyak variabel bulan. Dalam perulangan ini terdapat operasi penjumlahan uang yang disimpan di tabungan dan dicetak jumlah tersebut agar mengetahui jumlah tabungan setiap bulannya. Pernyataan terakhir terdapat increment agar perulangan berjalan. Terakhir yang terdapat pada program ini yaitu mencetak total perhitungan tabungan sebanyak berapa bulan menabung. Untuk membuat program ini, bagaimana menuliskan kode perulangannya?',
        //     'answer_id' => '13',
        //     'score' => '3'
        // ]);

        // //13.a.
        // Maintest::create([
        //     'no' => '13.a.',
        //     'que' => 'Terdapat suatu program penghitung rencana tabungan dengan jumlah uang yang sama. Program tersebut menggunakan program perulangan, program akan berulang sebanyak berapa bulan yang dimasukkan pada variabel bulan. Di dalam perulangan terdapat operasi pada variabel tabungan, menjumlahkan setiap uang yang masuk pada tabungan yang selanjutnya menampilkan total tabungan di setiap bulannya tersebut. Terakhir berisi iterasi increment pada variabel i agar perulangan berjalan sesuai tujuan. Bagaimana penulisan kode tersebut?',
        //     'answer_id' => '13',
        //     'score' => '2'
        // ]);

        // //13.b.
        // Maintest::create([
        //     'no' => '13.b.',
        //     'que' => 'Terdapat suatu program penghitung rencana tabungan. Program tersebut menggunakan perulangan while dengan kondisinya yaitu variabel i <= bulan, artinya perulangan akan berulang sebanyak yang dimasukkan pada variabel bulan. Di dalam perulangan terdapat operasi pada variabel tabungan, yaitu tabungan dijumlahkan dengan variabel uang. Kemudian menampilkan total tabungan di setiap bulannya. Dan terakhir berisi iterasi increment pada variabel i. Bagaimana penulisan kode tersebut dengan perulangan sederhana (while)?',
        //     'answer_id' => '13',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //14.2.
        // Maintest::create([
        //     'no' => '14.2.',
        //     'que' => 'Di kelas Tama terdapat 36 siswa. Pada saat pembelajaran, guru ingin membagi ke dalam dua kelompok belajar. Pertama yaitu kelompok dengan nomor absen genap dan kedua yaitu kelompok dengan nomor absen ganjil. Kemudian guru ingin mengetahui berapa banyak siswa dengan nomor absen genap dan absen berapa saja. Setelah itu ditampilkan rasio dari siswa absen genap dengan total siswa. Pada kasus ini bagaimana cara membuat suatu kode program untuk memenuhi kebutuhan kasus ini?',
        //     'answer_id' => '14',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Total siswa<br>
        //     absen: 2<br>
        //     absen: 4<br>
        //     absen: 6<br>
        //     absen: 8<br>
        //     absen: 10<br>
        //     absen: 12<br>
        //     absen: 14<br>
        //     absen: 16<br>
        //     absen: 18<br>
        //     absen: 20<br>
        //     absen: 22<br>
        //     absen: 24<br>
        //     absen: 26<br>
        //     absen: 28<br>
        //     absen: 30<br>
        //     absen: 32<br>
        //     absen: 34<br>
        //     absen: 36<br><br>

        //     Ganjil = 18 orang<br>
        //     Genap = 18 orang<br><br>

        //     Rasio Ganjil = 18/36',
        //     'answer' => '%2==0',
        //     'type' => 'while'
        // ]);

        // //14.1.
        // Maintest::create([
        //     'no' => '14.1.',
        //     'que' => 'Pada suatu kelas, dibagi menjadi dua kelompok, kelompok nomor absen genap dan kelompok nomor absen ganjil. Jumlah total siswa yang ada di kelas tersebut 36 siswa. Untuk mengetahui berapa banyak siswa dengan nomor absen genap. Pada program tersebut bagaimana cara membuat suatu kode program untuk menampilkan banyaknya siswa dengan absen genap dan di akhir kode menampilkan rasio antara total absen genap dengan total siswa keseluruhan?',
        //     'answer_id' => '14',
        //     'score' => '4'
        // ]);

        // //14.
        // Maintest::create([
        //     'no' => '14.',
        //     'que' => 'Terdapat suatu kasus dalam pembagian kelompok kelas. Siswa di kelas tersebut yaitu 36 siswa. Dibutuhkan dua kelompok yaitu kelompok dengan nomor absen ganjil dan kelompok dengan nomor absen genap. Untuk menghitung salah satu kelompok dibutuhkan suatu program perulangan dengan sebanyak jumlah siswa yang dihitung, sehingga variabel siswa dijadikan batas perulangan. Program diawali dengan menginisialisasikan suatu nilai yaitu banyaknya siswa yang disimpan dalam variabel siswa, kemudian terdapat suatu perulangan yang digunakan untuk menghitung siswa dengan absen ganjil dan siswa dengan absen genap. Di dalam perulangan ini terdapat suatu kondisi pemeriksaan variabel i yaitu iterasi pada nomor absen diperiksa apakah variabel tersebut genap atau tidak, jika genap maka, variabel genap akan menghitung iterasinya sehingga terjadi perhitungan jumlah siswa dengan absen genap. Pada program tersebut bagaimana cara membuat suatu kode program untuk menghitung banyaknya siswa dengan absen genap?',
        //     'answer_id' => '14',
        //     'score' => '3'
        // ]);

        // //14.a.
        // Maintest::create([
        //     'no' => '14.a.',
        //     'que' => 'Terdapat suatu kasus penghitungan jumlah siswa dengan absen genap. Pada penghitungannya menggunakan suatu program perulangan dengan batas sejumlah siswa, yaitu 36 dengan menggunakan variabel siswa. Selanjutnya di dalam perulangan tersebut, dilakukan pemeriksaan terhadap variabel i yaitu variabel iterasi, jika variabel tersebut habis dibagi dua, maka variabel tersebut genap dan selanjutnya variabel genap akan bertambah satu, begitu seterusnya hingga mendapatkan total dari siswa dengan absen genap ada berapa siswa. Bagaimana penulisan kode program pada kasus tersebut?',
        //     'answer_id' => '14',
        //     'score' => '2'
        // ]);

        // //14.b.
        // Maintest::create([
        //     'no' => '14.b.',
        //     'que' => 'Terdapat variabel siswa, yaitu dengan nilai 36. Dan digunakan sebagai batas akhir dari suatu program perulangan. Pada perulangan tersebut, terdapat suatu pemeriksaan, apakah variabel i mod 2 sama dengan 0, jika iya berarti variabel tersebut genap, dan variabel genap akan bertambah satu nilai. Begitu seterusnya hingga perulangan selesai dan akan mendapatkan total siswa dengan nomor absen genap. Bagaimana penulisan kode tersebut dengan perulangan sederhana (while)?',
        //     'answer_id' => '14',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //15.2.
        // Maintest::create([
        //     'no' => '15.2.',
        //     'que' => 'Suatu hari Tama mengikuti balapan di sirkuit Bogor. Peraturan yang berlaku di sana yaitu setiap pembalap yang mencapai 3 lap, akan mendapatkan 1 poin dalam waktu 1 jam. Kemudian balapan pun dimulai. Lap yang didapatkan oleh Tama yaitu 18 lap, sedangkan temannya Tama yaitu Tami mendapatkan 12 lap. Mereka ingin mengetahui berapa poin yang mereka dapatkan dan di lap berapa mereka mendapatkan poinnya. Selain itu akan terlihat rasio perbedaan antara mereka. Pada kasus ini, bagaimana cara membuat suatu kode programnya?',
        //     'answer_id' => '15',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Masukkan jumlah lap: 18<br>
        //     Lap ke-3<br>
        //     Poin: 1<br><br>

        //     Lap ke-6<br>
        //     Poin: 2<br><br>

        //     Lap ke-9<br>
        //     Poin: 3<br><br>

        //     Lap ke-12<br>
        //     Poin: 4<br><br>

        //     Lap ke-15<br>
        //     Poin: 5<br><br>

        //     Lap ke-18<br>
        //     Poin: 6<br><br>

        //     Dengan jumlah lap tersebut mendapatkan 6 poin',
        //     'answer' => '%3==0',
        //     'type' => 'do'
        // ]);

        // //15.1.
        // Maintest::create([
        //     'no' => '15.1.',
        //     'que' => 'Pada suatu balapan terdapat sistem poin, jika pembalap mencapai 3 lap maka akan mendapatkan 1 poin. Karena ada beberapa pembalap maka dibuatkan sebuah program yang isinya yaitu perulangan yang terdapat percabangan yang menghitung poin, menampilkan lap yang mendapatkan poin, dan jumlah poin yang didapatkan. Dalam perulangan tersebut terdapat suatu batasan yaitu jumlah lap yang didapatkan seorang pembalap. Untuk kasus tersebut bagaimana penulisan kode tersebut?',
        //     'answer_id' => '15',
        //     'score' => '4'
        // ]);

        // //15.
        // Maintest::create([
        //     'no' => '15.',
        //     'que' => 'Terdapat suatu kasus pada balapan yaitu untuk menghitung poin, yang kemudian akan dibuatkan pada suatu program. Program diawali dengan memasukkan sebuah jumlah lap pada seorang pembalap yang disimpan pada variabel lap. Kemudian dilanjutkan pada suatu perulangan yang digunakan untuk mengetahui lap ke berapa mendapatkan poin dan mengetahui poinnya berapa. Pada perulangannya berisi sebuah kondisi penambahan poin dan mencetak lap dan poin yang didapatkan. Kemudian terdapat variabel i increment untuk menjalankan perulangan. Kondisi pada perulangannya yaitu variabel i harus kurang dari lap yang dimasukkan. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '15',
        //     'score' => '3'
        // ]);

        // //15.a.
        // Maintest::create([
        //     'no' => '15.a.',
        //     'que' => 'Terdapat sebuah program untuk menghitung poin pada suatu lap balapan. Dalam program tersebut terdapat sebuah perulangan yang di dalamnya yaitu terdapat suatu kondisi jika variabel i modulus 3 menghasilkan 0, maka menjalankan suatu pernyataan. Pada pernyataannya yaitu menjalankan increment pada variabel poin, mencetak lap, dan poin yang didapatkan. Selanjutnya terdapat increment pada variabel i untuk berjalannya perulangan. Dilakukan perulangan terus menerus hingga variabel i yang dimasukkan tidak memenuhi kondisi perulangan lagi. Bagaimana penulisan kode tersebut?',
        //     'answer_id' => '15',
        //     'score' => '2'
        // ]);

        // //15.b.
        // Maintest::create([
        //     'no' => '15.b.',
        //     'que' => 'Terdapat sebuah program perulangan yang di dalamnya yaitu suatu kondisi untuk memeriksa yaitu apakah i%3==3, jika iya maka menjalankan  increment pada variabel poin (poin++) artinya yang digunakan untuk menghitung poinnya kemudian mencetak putaran ke berapa dan berapa poin yang didapatkan. Selanjutnya terdapat increment pada variabel i (i++). Dilakukan perulangan terus menerus hingga variabel i kurang dari variabel lap atau tidak memenuhi kondisi perulangan lagi. Bagaimana penulisan kode tersebut dengan percabangan sederhana (repeat/do-while)?',
        //     'answer_id' => '15',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //16.2.
        // Maintest::create([
        //     'no' => '16.2.',
        //     'que' => 'Suatu hari Tama mengunjungi sebuah tempat permainan, di sana banyak sekali permainan yang tersedia. Kemudian terdapat suatu permainan untuk memasukkan bola berwarna ke keranjang, warna-warna yang dimiliki bola adalah warna biru, kuning, dan merah. Bola-bola tersebut memiliki nomor urutannya tersendiri secara berurutan dari 1 hingga 3. Ketika bola dimasukkan ke keranjang, maka bola dengan warna tersebut akan dihitung. Tama memainkan permainan tersebut dan mendapatkan hasil bola warna biru 3, bola warna kuning 5, dan warna merah 4. Untuk membuat program pencacah kemudian dihitung hasilnya, bagaimana menuliskan kode programnya?',
        //     'answer_id' => '16',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Warna bola<br>
        //     1. Biru<br>
        //     2. Kuning<br>
        //     3. Merah<br>
        //     4. Keluar<br>
        //     Masukkan nomor bola: 2<br>
        //     Bola dihitung!<br>
        //     Masukkan nomor bola: 3<br>
        //     Bola dihitung!<br>
        //     Masukkan nomor bola: 1<br>
        //     Bola dihitung!<br>
        //     Masukkan nomor bola: 2<br>
        //     Bola dihitung!<br>
        //     Masukkan nomor bola: 3<br>
        //     Bola dihitung!<br>
        //     Masukkan nomor bola: 4<br>
        //     Anda keluar dari perhitungan!<br><br>

        //     Jumlah bola<br>
        //     biru: 1<br>
        //     kuning: 2<br>
        //     merah: 2',
        //     'answer' => '==3',
        //     'type' => 'do'
        // ]);

        // //16.1.
        // Maintest::create([
        //     'no' => '16.1.',
        //     'que' => 'Terdapat penghitung warna bola, bola terdiri dari warna biru, kuning, dan merah. Bola-bola tersebut memiliki nomor urutannya tersendiri secara berurutan dari 1 hingga 3. Bola dihitung pada saat bola tersebut masuk ke dalam keranjang. Agar memudahkan dalam perhitungan, dibuatlah suatu program untuk menghitung  setiap warna yang masuk. Ketika masuk suatu bola dengan warna tertentu, program mencacah bola itu. Dan di akhir program mencetak jumlah masing-masing warna bola. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '16',
        //     'score' => '4'
        // ]);

        // //16.
        // Maintest::create([
        //     'no' => '16.',
        //     'que' => 'Di suatu tempat bermain terdapat suatu program yang digunakan untuk menghitung warna-warna bola yang dimasukkan dikeranjang. Program diawali dengan membuat suatu variabel penampung untuk masing-masing warna bola, dengan warna biru, kuning, dan merah. Kemudian terdapat suatu perulangan yang dalam pernyataannya terdapat suatu perintah untuk memasukkan pilihan nomor bola, setiap bola yang dipilih akan maka variabel penampung akan bertambah 1 sebagai penghitungnya. Bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '16',
        //     'score' => '3'
        // ]);

        // //16.a.
        // Maintest::create([
        //     'no' => '16.a.',
        //     'que' => 'Terdapat sebuah program perulangan yang bertujuan sebagai penghitung warna bola yang masuk dikeranjangnya masing-masing. Bola yang tersedia yaitu bola berwarna biru, kuning, dan merah. Program dibuat dengan menggunakan perulangan. Pada perulangan terdapat suatu masukkan untuk nomor bola yang disimpan di variabel nomor. Kemudian selanjutnya terdapat percabangan bertingkat yang di setiap kondisinya menghitung bola yang dipilih. Dan di akhir program terdapat jumlah bola yang dihitung masing-masing warna. Bagaimana penulisan kode program perulangan tersebut?',
        //     'answer_id' => '16',
        //     'score' => '2'
        // ]);

        // //16.b.
        // Maintest::create([
        //     'no' => '16.b.',
        //     'que' => 'Terdapat suatu program perulangan sederhana dengan perulangan repeat yang digunakan sebagai penghitung warna bola. Bola yang dihitung yaitu warna biru, kuning, dan merah dengan nomor 1 sampai 3. Perulangan ini memiliki pernyataan dimulai dari perintah memasukkan nomor bola yang memiliki warna kemudian disimpan pada variabel nomor. Kemudian nomor tersebut diperiksa pada kode program percabangan bertingkat yang di dalam setiap percabangannya terdapat increment untuk variabel warna yang dihitung, yaitu biru++, kuning++, dan merah++. Setelah menghitung dilanjutkan dengan menampilkan tulisan bahwa bola dihitung dan tampilan ketika masukkan tidak sesuai seperti nomor tidak ada pada pilihan maka akan menampilkan “tidak ada pilihan tersebut”, kondisi untuk perulangan repeat ini yaitu nomor!=4. Kemudian diakhiri menampilkan jumlah bola dari masing-masing warna. Bagaimana penulisan kode program perulangan sederhana repeat ini?',
        //     'answer_id' => '16',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //17.2.
        // Maintest::create([
        //     'no' => '17.2.',
        //     'que' => 'Suatu hari di perumahan Tama terdapat jadwal patroli satpam, satpam yang tersedia terdapat satpam tua dan satpam muda, untuk lebih jelasnya sebagai berikut.
        //     Satpam tua: Ahmad (A), Budi (B), Candra (C)
        //     Satpam muda: Doni (D), Erpan (E), Fauzi (F)
        //     Dalam pembagian jadwal, patroli harus terdiri dari dua orang yaitu satpam tua dan muda. Pada kombinasi pertama yaitu Ahmad dan Doni (AD). Untuk mengetahui kombinasi yang mungkin terjadi, Tama membantu para satpam dengan membuat suatu program. Bagaimana cara membuat program tersebut?',
        //     'answer_id' => '17',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'AD<br>
        //     AE<br>
        //     AF<br>
        //     BD<br>
        //     BE<br>
        //     BF<br>
        //     CD<br>
        //     CE<br>
        //     CF',
        //     'answer' => '<3',
        //     'type' => 'for'
        // ]);

        // //17.1.
        // Maintest::create([
        //     'no' => '17.1.',
        //     'que' => 'Pada suatu perumahan terdapat pembagian jadwal untuk patroli. Satpam yang tersedia yaitu satpam tua dan satpam muda, untuk lebih jelasnya sebagai berikut.
        //     Satpam tua: Ahmad (A), Budi (B), Candra (C)
        //     Satpam muda: Doni (D), Erpan (E), Fauzi (F)
        //     Dalam pembagian jadwal, patroli harus terdiri dari dua orang yaitu satpam tua dan muda. Pada kombinasi pertama yaitu Ahmad dan Doni (AD).  Untuk mendapatkan kombinasi yang mungkin terjadi dibutuhkan suatu program perulangan yang dapat menampilkan inisial nama satpam. Bagaimana penulisan kode tersebut?',
        //     'answer_id' => '17',
        //     'score' => '4'
        // ]);

        // //17.
        // Maintest::create([
        //     'no' => '17.',
        //     'que' => 'Terdapat suatu kasus pada pembagian jadwal patroli satpam. Satpam yang tersedia yaitu satpam muda dan satpam tua, untuk lebih jelasnya sebagai berikut.
        //     Satpam tua: Ahmad (A), Budi (B), Candra (C)
        //     Satpam muda: Doni (D), Erpan (E), Fauzi (F)
        //     Dalam pembagian jadwal, patroli harus terdiri dari dua orang yaitu satpam tua dan muda. Pada kombinasi pertama yaitu Ahmad dan Doni (AD).  
        //     Untuk mendapatkan kombinasi yang mungkin terjadi dibutuhkan suatu program perulangan. Program diawali dengan menampilkan nama-nama yang tersedia pada satpam tua dan satpam muda. Kemudian dilanjutkan pada perulangan dengan menggunakan variabel i dan di dalamnya terdapat perulangan ke dua dengan menggunakan variabel j. Di dalam perulangan ke dua terdapat dua pencetak yang mencetak inisial nama satpam tua secara berurutan dikombinasikan dengan inisial nama satpam muda untuk mengetahui kombinasi yang dibutuhkan. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '17',
        //     'score' => '3'
        // ]);

        // //17.a.
        // Maintest::create([
        //     'no' => '17.a.',
        //     'que' => 'Terdapat suatu kasus dalam pembagian jadwal patroli satpam, pembagiannya harus mempunyai kombinasi antara satpam tua dan satpam muda. Kasus ini dimuatkan dalam program perulangan. Perulangan yang pertama memiliki batas kurang dari 3 dengan variabel i, karena terdapat tiga nama untuk satpam tua. Dalam perulangan pertama ini memiliki perulangan lagi yang memiliki batas kurang dari 3 juga dengan variabel j, karena terdapat tiga nama untuk satpam muda. Kemudian dalam perulangan ke dua terdapat kode program untuk menampilkan inisial satpam tua dan inisial satpam muda (variabel yang digunakan yaitu variabel tua dan variabel muda). Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '17',
        //     'score' => '2'
        // ]);

        // //17.b.
        // Maintest::create([
        //     'no' => '17.b.',
        //     'que' => 'Terdapat sebuah perulangan dengan batas variabel i < 3, di dalam perulangan itu terdapat perulangan lagi dengan kondisi yang mirip yaitu variabel j < 3. Di dalam perulangan ke dua terdapat kode program untuk menampilkan huruf untuk variabel tua yaitu tua[i] dan terdapat kode program untuk menampilkan huruf untuk variabel muda yaitu muda[j]. Tujuan dari kedua pencetak ini berguna untuk menampilkan huruf kombinasi dari dua variabel dengan bantuan dua perulangan. Bagaimana penulisan kode tersebut dengan perulangan bersarang?',
        //     'answer_id' => '17',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //18.2.
        // Maintest::create([
        //     'no' => '18.2.',
        //     'que' => 'Pada pelajaran matematika, Tama diberikan tugas oleh gurunya untuk membuat suatu tabel perkalian, setiap orang harus membuat sebanyak yang mereka bisa. Tama menemukan hasil dari tabel perkalian seperti berikut ini.


        //     1	2	3	4	5	...
        //     2	4	6	8	10	...
        //     3	6	9	12	15	...
        //     4	8	12	16	20	...
        //     5	10	15	20	25	...
        //     ...	...	...	...	...	...

        //     Pada tabel yang ditemukan oleh Tama hanya sampai perkalian 5 saja, untuk itu dia membuat suatu program penghitung untuk menemukan perkalian yang lainnya. Program tersebut terdapat operasi perkalian sebanyak yang diinginkan untuk tabel perkalian, dan kemudian ditampilkan hasil hitungnya. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '18',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Masukkan batas perkalian: 5<br>
        //     1 2 3 4 5<br>
        //     2 4 6 8 10<br>
        //     3 6 9 12 15<br>
        //     4 8 12 16 20<br>
        //     5 10 15 20 25',
        //     'answer' => 'i*j',
        //     'type' => 'for'
        // ]);

        // //18.1.
        // Maintest::create([
        //     'no' => '18.1.',
        //     'que' => 'Pada suatu pembelajaran matematika, guru meminta untuk membuat suatu tabel perkalian. Tabel ini akan berbentuk seperti berikut ini.

        //     1	2	3	4	5	...
        //     2	4	6	8	10	...
        //     3	6	9	12	15	...
        //     4	8	12	16	20	...
        //     5	10	15	20	25	...
        //     ...	...	...	...	...	...

        //     Untuk membuat tabel perkalian ini lebih mudah, maka dibuatkan dalam suatu program perulangan. Dalam program tersebut terdapat operasi perkalian sebanyak yang diinginkan untuk tabel perkalian, dan kemudian ditampilkan hasil hitungnya. Pada kasus ini, bagaimana cara menuliskan kode program tersebut?',
        //     'answer_id' => '18',
        //     'score' => '4'
        // ]);

        // //18.
        // Maintest::create([
        //     'no' => '18.',
        //     'que' => 'Terdapat suatu kasus pada pembelajaran matematika, yaitu membuat sebuah tabel perkalian. Tabel ini akan berbentuk seperti berikut ini.

        //     1	2	3	4	5	...
        //     2	4	6	8	10	...
        //     3	6	9	12	15	...
        //     4	8	12	16	20	...
        //     5	10	15	20	25	...
        //     ...	...	...	...	...	...

        //     Untuk mendapatkan hasil perkalian dan menjadi sebuah tabel perkalian dibutuhkan suatu program perulangan. Pada program perulangan ini diawali dengan memasukkan suatu nilai yang akan digunakan untuk batas akhir nilai dari tabel perkalian tersebut. Perulangan yang terdapat pada program ini terdapat 2 perulangan. Pada perulangan yang ke 1 menggunakan variabel i dan perulangan ke dua menggunakan variabel j. Di dalam perulangan ke dua terdapat operasi perkalian dari variabel yang digunakan pada perulangan dan ditampilkan hasilnya. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '18',
        //     'score' => '3'
        // ]);

        // //18.a.
        // Maintest::create([
        //     'no' => '18.a.',
        //     'que' => 'Terdapat suatu kasus pada pembelajaran matematika, yaitu membuat sebuah tabel perkalian. Kemudian tabel ini dibuat dari suatu program perulangan. Perulangan yang pertama memiliki batas yang dimasukkan oleh pengguna program yang disimpan dalam variabel input, di dalam perulangan itu terdapat perulangan ke dua dengan kondisi sama. Di dalam perulangan ke dua terdapat operasi aritmatika yaitu operasi perkalian variabel i dengan variabel j yang disimpan dalam variabel hitung dan kemudian mencetak variabel hitung tersebut. Setelah perulangan kedua selesai, kemudian mencetak enter. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '18',
        //     'score' => '2'
        // ]);

        // //18.b.
        // Maintest::create([
        //     'no' => '18.b.',
        //     'que' => 'Terdapat sebuah perulangan dengan batas yang dimasukkan dengan variabel input, di dalam perulangan itu terdapat perulangan ke dua dengan kondisi sama, yaitu memiliki batas yang dimasukkan. Di dalam perulangan ke dua terdapat operasi aritmatika yaitu variabel hitung yang isinya hitung = i * j dan kemudian mencetak variabel hitung tersebut. Setelah perulangan kedua selesai, kemudian mencetak enter. Bagaimana penulisan kode tersebut dengan perulangan bersarang (for di dalam for)?',
        //     'answer_id' => '18',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //19.2.
        // Maintest::create([
        //     'no' => '19.2.',
        //     'que' => 'Akhir pekan ini Tama akan pergi berlibur ke kota Jakarta dengan mobil pribadi. Untuk menempuh perjalanan, Tama menemukan 4 jalur utama yang akan digunakan Tama untuk pergi dan untuk pulang, jalur tersebut yaitu jalur Cipanas, jalur Jonggol, jalur Lembang, dan jalur Padalarang.  Salah satu kombinasi jalur pergi dan pulang oleh Tama yaitu pergi melalui jalur Cipanas dan pulang melalui jalur Jonggol (CJ). Kemudian Tama membuat suatu program untuk mengetahui kombinasi jalur lain yang dapat dilalui dan menghitung banyaknya pilihan jalur. Bagaimana cara membuat program tersebut?',
        //     'answer_id' => '19',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'Jalur Bandung - Jakarta<br><br>

        //     Jalur Cipanas (C)<br>
        //     Jalur Jonggol (J)<br>
        //     Jalur Lembang (L)<br>
        //     Jalur Padalarang (P)<br><br>

        //     C - C | C - J | C - L | C - P |<br>
        //     J - C | J - J | J - L | J - P |<br>
        //     L - C | L - J | L - L | L - P |<br>
        //     P - C | P - J | P - L | P - P |<br><br>

        //     Banyak kombinasi jalur yaitu 16 jalur',
        //     'answer' => '<=3',
        //     'type' => 'for'
        // ]);

        // //19.1.
        // Maintest::create([
        //     'no' => '19.1.',
        //     'que' => 'Pada suatu perjalanan dari kota Bandung ke kota Jakarta terdapat 4 jalur utama yang dapat dilalui yaitu jalur Cipanas, jalur Jonggol, jalur Lembang, dan jalur Padalarang. Jalur pergi dan pulang dapat dilalui dengan jalur yang sama ataupun dengan jalur yang berbeda. Pada jalur pergi dan pulang kombinasi pertama yaitu jalur Cipanas - Cipanas (CC) atau jika dengan jalur yang berbeda yaitu Cipanas - Jonggol (CJ).  
        //     Untuk mendapatkan kombinasi yang mungkin terjadi dibutuhkan suatu program yang dapat menampilkan inisial nama jalur yang dikombinasikan. Program akan menampilkan jalur yang tersedia, menampilkan banyaknya kombinasi jalur yang memungkinkan, dan total hitung kombinasi jalur yang dapat dilalui. Bagaimana penulisan kode tersebut?',
        //     'answer_id' => '19',
        //     'score' => '4'
        // ]);

        // //19.
        // Maintest::create([
        //     'no' => '19.',
        //     'que' => 'Terdapat suatu kasus pada pemilihan jalur berangkat dan pulang dari kota Bandung ke kota Jakarta. Jalur yang tersedia terdapat 4 jalur utama, yaitu jalur Cipanas, jalur Jonggol, jalur Lembang, dan jalur Padalarang. Jalur pergi dan pulang dapat dilalui dengan jalur yang sama ataupun dengan jalur yang berbeda. Pada jalur pergi dan pulang kombinasi pertama yaitu jalur Cipanas - Cipanas (CC) atau jika dengan jalur yang berbeda yaitu Cipanas - Jonggol (CJ).  
        //     Untuk mendapatkan kombinasi yang mungkin terjadi dibutuhkan suatu program. Pada program ini diawali dengan menampilkan jalur yang tersedia, kemudian terdapat sebuah perulangan dengan menggunakan variabel i dan di dalamnya terdapat perulangan ke dua dengan menggunakan variabel j. Kemudian di dalam perulangan ke dua terdapat dua pencetak yang mencetak inisial nama jalur pergi dikombinasikan dengan inisial nama jalur pulang untuk mengetahui kombinasi yang lainnya. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '19',
        //     'score' => '3'
        // ]);

        // //19.a.
        // Maintest::create([
        //     'no' => '19.a.',
        //     'que' => 'Terdapat sebuah perulangan yang berulang dari 0 sampai 3, di dalam perulangan tersebut terdapat perulangan ke dua yang berulang sama seperti perulangan ke satu. Di dalam perulangan ke dua terdapat kode program untuk menampilkan huruf inisial suatu jalur dengan variabel pergi dan huruf inisial suatu jalur dengan variabel pulang. Terakhir terdapat suatu penghitung dengan variabel hitung. Setelah melakukan perulangan kedua, terdapat pencetak enter. Bagaimana penulisan kode perulangan tersebut?',
        //     'answer_id' => '19',
        //     'score' => '2'
        // ]);

        // //19.b.
        // Maintest::create([
        //     'no' => '19.b.',
        //     'que' => 'Terdapat sebuah perulangan dengan batas variabel i <= 3, di dalam perulangan itu terdapat perulangan ke dua dengan kondisi yang mirip yaitu variabel j < 3. Di dalam perulangan ke dua terdapat kode program untuk menampilkan huruf inisial suatu jalur dengan variabel pergi [i] dan huruf inisial suatu jalur dengan variabel pulang[j]. Terakhir terdapat suatu penghitung dengan variabel hitung, kodenya ditulis dengan hitung++. Setelah melakukan perulangan kedua, terdapat pencetak enter. Bagaimana penulisan kode tersebut dengan perulangan bersarang?',
        //     'answer_id' => '19',
        //     'score' => '1'
        // ]);

        // // ----------------------------------------------------------------------------------------

        // //20.2.
        // Maintest::create([
        //     'no' => '20.2.',
        //     'que' => 'Suatu hari Tama disekolahnya diminta untuk mengatur siapa yang akan mengikuti perlombaan. Gurunya meminta tiga orang perwakilan dari setiap kelas yaitu dari kelas satu, kelas dua, dan kelas tiga. Siswa yang didapatkan oleh Tama yaitu sebagai berikut.
        //     Kelas 1: Lidya (L), Arta (A), Oliv (O)
        //     Kelas 2: Makara (M), Nurul (N), Tiwi (T)
        //     Kelas 3: Wahyu (W), Zidan (Z), Permata (P)

        //     Kemudian guru meminta untuk dibuatkan kelompok dari kombinasi kelas-kelas tersebut. Kombinasi pertama yang didapatkan adalah Lidya, Makara, dan Wahyu (LMW). Untuk mengetahui kombinasi yang mungkin terjadi, Tama membuat sebuah program. Bagaimana cara membuat program tersebut?',
        //     'answer_id' => '20',
        //     'score' => '5'
        // ]);

        // Answer::create([
        //     'program' => 'LMW<br>
        //     LMZ<br>
        //     LMP<br><br>

        //     LNW<br>
        //     LNZ<br>
        //     LNP<br><br>

        //     LTW<br>
        //     LTZ<br>
        //     LTP<br><br>

        //     AMW<br>
        //     AMZ<br>
        //     AMP<br><br>

        //     ANW<br>
        //     ANZ<br>
        //     ANP<br><br>

        //     ATW<br>
        //     ATZ<br>
        //     ATP<br><br>

        //     OMW<br>
        //     OMZ<br>
        //     OMP<br><br>

        //     ONW<br>
        //     ONZ<br>
        //     ONP<br><br>

        //     OTW<br>
        //     OTZ<br>
        //     OTP<br><br>

        //     Jumlah: 27',
        //     'answer' => '<3',
        //     'type' => 'for'
        // ]);

        // //20.1.
        // Maintest::create([
        //     'no' => '20.1.',
        //     'que' => 'Pada suatu sekolah siswanya akan mengikuti perlombaan, dan membutuhkan dari kelas satu, kelas dua, dan kelas tiga. Setiap kelas mempunyai perwakilan 3 siswa. Siswa yang didapat yaitu dengan rincian berikut.
        //     Kelas 1: Lidya (L), Arta (A), Oliv (O)
        //     Kelas 2: Makara (M), Nurul (N), Tiwi (T)
        //     Kelas 3: Wahyu (W), Zidan (Z), Permata (P)

        //     Dari ke tiga kelas tersebut nantinya siswa akan dibuat dalam satu kelompok dari setiap perwakilan kelas dengan jumlah tiga siswa. Kelompok pada kombinasi pertama yaitu Lidya, Makara, dan Wahyu (LMW). Untuk mendapatkan kombinasi yang mungkin terjadi dibutuhkan suatu program perulangan yang dapat menampilkan inisial nama-namanya. Bagaimana penulisan kode tersebut?',
        //     'answer_id' => '20',
        //     'score' => '4'
        // ]);

        // //20.
        // Maintest::create([
        //     'no' => '20.',
        //     'que' => 'Terdapat suatu kasus pada perwakilan siswa untuk perlombaan, dibutuhkan tiga orang setiap kelas yang terdiri dari kelas satu, kelas dua, dan kelas tiga. Siswa yang bersedia yaitu dengan rincian berikut.
        //     Kelas 1: Lidya (L), Arta (A), Oliv (O)
        //     Kelas 2: Makara (M), Nurul (N), Tiwi (T)
        //     Kelas 3: Wahyu (W), Zidan (Z), Permata (P)

        //     Kemudian dari ke tiga kelas tersebut dibuat dalam satu kelompok dari setiap perwakilan kelas dengan jumlah tiga siswa. Kelompok pada kombinasi pertama yaitu Lidya, Makara, dan Wahyu (LMW).
        //     Untuk mendapatkan kombinasi lain yang mungkin terjadi dibutuhkan suatu program perulangan. Program diawali dengan menampilkan nama-nama di setiap kelas, kemudian terdapat program perulangan dengan menggunakan tiga perulangan yang menggunakan variabel i, variabel j, dan variabel k. Di dalam perulangan ke tiga terdapat tiga pencetak yang mencetak inisial nama dari siswa pada setiap kelas yang untuk mengetahui kombinasi yang dibutuhkan. Bagaimana penulisan kode pada kasus tersebut? ',
        //     'answer_id' => '20',
        //     'score' => '3'
        // ]);

        // //20.a.
        // Maintest::create([
        //     'no' => '20.a.',
        //     'que' => 'Terdapat suatu kasus dalam perwakilan setiap kelas untuk perlombaan, terdapat 3 kelas yang akan mewakili dan setiap kelas terdapat salah satu dari tiga siswa yang dipilih. Kemudian kasus ini dimuatkan dalam program perulangan. Perulangan yang pertama yaitu memiliki batas kurang dari 3 dengan variabel i, karena terdapat tiga nama untuk kelas pertama. Dalam perulangan pertama ini memiliki perulangan lagi yang memiliki batas kurang dari 3 juga dengan variabel j, karena terdapat tiga nama untuk kelas kedua. Dan terakhir terdapat perulangan ke tiga yang memiliki batas kurang dari 3 juga dengan variabel k, karena terdapat tiga nama untuk kelas ke tiga. Kemudian dalam perulangan ke tiga terdapat kode program untuk menampilkan inisial-inisial nama pada setiap kelas yang menggunakan variabel satu, variabel dua, dan variabel tiga. Bagaimana penulisan kode pada kasus tersebut?',
        //     'answer_id' => '20',
        //     'score' => '2'
        // ]);

        // //20.b.
        // Maintest::create([
        //     'no' => '20.b.',
        //     'que' => 'Terdapat sebuah perulangan dengan batas variabel i < 3, di dalam perulangan itu terdapat perulangan lagi dengan kondisi yang mirip yaitu variabel j < 3, dan di dalam perulangan ke dua terdapat perulangan ke tiga dengan kondisi yang mirip yaitu variabel k < 3. Di dalam perulangan ke tiga terdapat kode program untuk menampilkan huruf untuk variabel satu yaitu satu[i], terdapat kode program untuk menampilkan huruf untuk variabel dua yaitu dua[j], dan terdapat kode program untuk menampilkan huruf untuk variabel tiga yaitu tiga[k]. Tujuan dari ketiga pencetak ini berguna untuk menampilkan huruf kombinasi dari tiga variabel dengan bantuan tiga perulangan. Bagaimana penulisan kode tersebut dengan perulangan bersarang?',
        //     'answer_id' => '20',
        //     'score' => '1'
        // ]);
    }
}
