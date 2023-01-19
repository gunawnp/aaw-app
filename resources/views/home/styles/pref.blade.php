@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4">
        @if (!$pref)
            <div style="height: 500px" class="d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h5 class="fs-4 fw-bold mb-4">Data belum tersedia, silahkan ikuti tes!</h5>
                    <a href="/home/styles/begin" type="button" class="btn btn-blue mb-5">Mulai Tes</a>
                </div>
            </div>
        @else
            <div class="lh-lg row mt-3 justify-content-center">
                <h4 class="fw-bold mb-4">Pendekatan Gaya Belajar</h4>
                <p class="fs-6">Di bawah ini adalah tabel penentu gaya belajarmu yang menentukan kekuatan preferensinya. Dengan dilakukan hal ini maka akan mengetahui seberapa kuat gaya belajar tertentu dibandingkan dengan gaya belajar lainnya. </p>
                <div class="col-md-5 me-5 mt-4">
                    <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
                        <thead>
                            <tr>
                                <th class="fs-6">Activist</th>
                                <th class="fs-6">Reflector</th>
                                <th class="fs-6">Theorist</th>
                                <th class="fs-6">Pragmatist</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>20 <br> 19 <br> 18 <br> 17 <br> 16 <br> 15 <br> 14 <br> 13</td>
                                <td>20 <br>19 <br>18</td>
                                <td>20 <br>19 <br>18 <br>17 <br>16</td>
                                <td>20<br>19<br>18<br>17</td>
                                <td>Preferensi yang sangat kuat</td>
                            </tr>
                            <tr>
                                <td>12 <br> 11</td>
                                <td>17 <br>16 <br>15</td>
                                <td>15 <br>14</td>
                                <td>16 <br>15</td>
                                <td>Preferensi yang kuat</td>
                            </tr>
                            <tr>
                                <td>10<br>9<br>8<br>7</td>
                                <td>14<br>13<br>12</td>
                                <td>13<br>12<br>11</td>
                                <td>14<br>13<br>12</td>
                                <td>Preferensi yang sedang</td>
                            </tr>
                            <tr>
                                <td>6<br>5<br>4</td>
                                <td>11<br>10<br>9</td>
                                <td>10<br>9<br>8</td>
                                <td>11<br>10<br>9</td>
                                <td>Preferensi yang rendah</td>
                            </tr>
                            <tr>
                                <td>3<br>2<br>1<br>0</td>
                                <td>8<br>7<br>6<br>5<br>4<br>3<br>2<br>1<br>0</td>
                                <td>7<br>6<br>5<br>4<br>3<br>2<br>1<br>0</td>
                                <td>8<br>7<br>6<br>5<br>4<br>3<br>2<br>1<br>0</td>
                                <td>Preferensi yang sangat rendah</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-5 me-5 mt-4">
                    <h6 class="fw-bold mb-3">Skor Total yang Didapatkan</h6>
                    <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th class="fs-6">Activist</th>
                                <th class="fs-6">Reflector</th>
                                <th class="fs-6">Theorist</th>
                                <th class="fs-6">Pragmatist</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total</td>
                                @foreach ($pref as $pr)
                                    <td>{{ $pr }}</td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <div class="fs-6">
                        <h6 class="fw-bold">Kesimpulan</h6>
                        Saya memiliki preferensi yang <i>sangat kuat</i> untuk <div class="underline-text fw-bold {{ $str[4] === '' ? 'ut-mh' : '' }}">{{ $str[4] }}</div>
                        <br>
                        Saya memiliki preferensi yang <i>kuat</i> untuk <div class="underline-text fw-bold {{ $str[3] === '' ? 'ut-mh' : '' }}">{{ $str[3] }}</div>
                        <br>
                        Saya memiliki preferensi yang <i>sedang</i> untuk <div class="underline-text {{ $str[2] === '' ? 'ut-mh' : '' }}">{{ $str[2] }}</div>
                        <br>
                        Saya memiliki preferensi yang <i>rendah</i> untuk <div class="underline-text {{ $str[1] === '' ? 'ut-mh' : '' }}">{{ $str[1] }}</div>
                        <br>
                        Saya memiliki preferensi yang <i>sangat rendah</i> untuk <div class="underline-text {{ $str[0] === '' ? 'ut-mh' : '' }}">{{ $str[0] }}</div>
                    </div>
                </div>
                
            </div>
            <hr>
            <div class="lh-lg row mt-4 justify-content-center fs-6">
                <h4 class="fw-bold mb-4">Deskripsi Pendekatan Belajar</h4>
                <p class="mb-4">
                    <b>ACTIVISTS (Aktivis)</b> adalah orang yang suka belajar dengan cara yang menyenangkan, sedikit teori, tugas yang praktis, dan pengalaman langsung. Seperti permainan, pemecahan masalah, dan simulasi. Mereka ingin mencoba hal-hal baru seperti menghadapi suatu tantangan dan dapat menjadi pemimpin dalam kelompok untuk memecahkan suatu permasalahan tim.
                </p>
                <p class="mb-4">
                    <b>THEORISTS (Ahli Teori)</b> adalah orang yang suka belajar dengan cara yang lebih formal dan serius melalui cara analisis dan konseptualisasi, seperti membaca buku atau melakukan penelitian. Mereka ingin mengetahui teori dan logika dari suatu hal dengan menantang diri sendiri untuk melebihi batas kemampuan. Serta dapat memahami situasi yang kompleks. Selain itu mereka suka mencari pola dan menghubungkan informasi baru dengan pengetahuan yang sudah ada.
                </p>
                <p class="mb-4">
                    <b>REFLECTORS (Reflektor)</b> adalah orang yang suka belajar dengan cara yang lebih tenang dan diam, seperti mendengarkan, mengamati, mempertimbangkan, berpikir sebelum bertindak, dan membaca. Mereka ingin merenungkan dan berdiskusi dengan orang lain tentang apa yang dipelajari.
                </p>
                <p class="mb-4">
                    <b>PRAGMATISTS (Pragmatis)</b> adalah orang yang suka belajar dengan cara yang cepat dan efisien, dan ingin belajar dari contoh yang sukses dalam pekerjaan mereka. Mereka ingin mengetahui cara-cara yang efisien untuk menyelesaikan masalah di tempat kerja. Dapat dengan cepat mempelajari sesuatu. Menyelesaikan masalah dengan penyusunan rencana aksi, uji coba, dan memperhatikan tahapan aksinya. Mereka suka mencoba teori dalam situasi nyata dan menemukan cara untuk mengatasi masalah.
                </p>
            </div>
            <hr>
            <div class="text-center">
                <p class="fs-6 mt-3"> Untuk melihat hasil akhir berupa jenis gaya belajar anda, <br> silahkan tekan tombol di bawah ini atau pilih Hasil di bagian Tes Gaya Belajar pada sidebar.</p>
                <a href="/home/styles/result" type="button" class="btn btn-blue mb-5">Hasil Tes Gaya Belajar</a>
            </div>
        @endif
    </main>
@endsection