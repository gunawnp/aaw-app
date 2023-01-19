@extends('layouts.main')

@section('container')
    <!-- Hero -->
    <div class="container p-top-hero mb-5" id="welcome">
      <div class="row align-items-center">
        <div id="sc1" class="col-md mb-5 text-center d-none"></div>
        <div id="teks-home" class="col-md">
          <div class="row">
            <p class="fs-5 fw-bold">Selamat Datang di</p>
          </div>
          <div class="row mb-2">
            <p class="fs-2 fw-bold">Adaptive Assessment Web</p>
          </div>
          <div class="row">
            <p class="fs-6"><b>AAW</b> adalah sebuah aplikasi yang berfungsi sebagai tes pemahaman suatu mata pelajaran dengan metode asesmen adaptif. Asesmen yang berbentuk adaptif yaitu tes yang dapat menyesuaikan tingkat kesukaran soal dengan kemampuan siswa.</p>
          </div>
          <div id="tombol-home" class="row align-items-center mt-3">
            @auth
              <div class="col-5">
                <a href="/home" type="button" class="btn btn-blue py-3">Menuju Home</a>
              </div>
            @else
              <div class="col-3">
                <a href="/login" type="button" class="btn btn-blue">Login</a>
              </div>
              <div class="col-3">
                <a href="/daftar" type="button" class="btn btn-white">Daftar</a>
              </div>
            @endauth
          </div>
        </div>
        <div id="c3" class="col-md text-center">
          <img id="welcome" src="illus/programming.svg" class="rounded-circle" alt="Programming" width="400" />
        </div>
      </div>
    </div>
    <!-- End Hero -->

@endsection