@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        <div id="header-profile">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-3">
                    @if ( $user->image )
                        <img src="{{ asset('storage/' . $user->image) }}" style="border-radius: 20px" alt="profile" width="165px" class="d-block mx-auto">
                    @else
                        <img src="{{ asset('storage/profile-image/profile.png') }}" style="border-radius: 20px" alt="profile" width="165px" class="d-block mx-auto">
                    @endif
                </div>
                <div class="col-md-5">
                    <p class="fs-3 fw-bold mb-0">{{ $user->name }}</p>
                    <p class="fs-6 my-2"><span class="text-muted me-3">username</span> {{ $user->username }}</p>
                    <p class="fs-6"><span class="text-muted me-5">email </span> {{ $user->email }}</p>
                    
                    <div class="row">
                        <div class="col-md-5">
                            <button type="button" class="btn btn-outline-primary px-3 py-2" style="border-radius: 10px; font-size: 11pt;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Setting Foto Profil
                            </button>
                        </div>

                        @if (session('success'))
                            <div class="col-md-7">
                                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center py-2" role="alert" id="sukses">
                                    <i class="bi bi-check-circle pe-3"></i>
                                    <div>
                                        {{ session('success') }}
                                    </div>
                                    <button type="button" class="btn-close px-3" style="padding-top: 6px" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        @endif
                        
                        @error('image')
                            <div class="col-md-7">
                                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center py-2" role="alert" id="gagal">
                                    <i class="bi bi-exclamation-circle pe-3"></i>
                                    <div>
                                        {{ $message }}
                                        {{-- Format atau ukuran tidak bisa, silahkan coba lagi! --}}
                                    </div>
                                    <button type="button" class="btn-close px-3" style="padding-top: 6px" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        @enderror

                        <script>
                        window.setTimeout(function() {
                            $("#gagal").alert('close');
                        }, 3000);

                        window.setTimeout(function() {
                            $("#sukses").alert('close');
                        }, 3000);
                        </script>

                    </div>
                    

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Setting Foto Profil</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="my-3">
                                        <form action="/home/profile/update" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                            <label for="image" class="form-label fs-6">Update Foto Profile</label>
                                            <input class="form-control" type="file" id="image" name="image">
                                            <input type="submit" value="Simpan" class="btn btn-blue px-3 py-2 mt-3">
                                        </form>

                                        @if ($user->image)
                                            <form action="/home/profile/delete" method="post">
                                                @csrf
                                                <input type="hidden" name="oldImage" value="{{ $user->image }}">
                                                <label for="delete" class="form-label fs-6 mt-4">Delete Foto Profile</label>
                                                <input id="delete" type="submit" value="Delete" class="btn btn-danger px-3 py-2 d-block" style="border-radius: 15px">
                                            </form>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary px-3 py-2" data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <hr class="mt-5 mb-4">

        <div id="summary" class="mb-5">
            <div class="row mb-4">
                <p class="fs-5 fw-bold text-center">Rangkuman Tes</p>
                <div class="col-md-4">
                    <div class="card py-3">
                        <div class="card-body text-center">
                            <p class="card-title fs-6 fw-bold text-center mb-3">Tes Gaya Belajar</p>
                            @if (isset($user->dataStyle->learning_s))
                                <div class="card-text fs-6">
                                    Gaya belajar kamu adalah
                                    <p class="mt-2">{{ $user->dataStyle->learning_s }}</p>
                                </div>
                                <a href="/home/styles/result" class="card-link">Lihat Detail</a>
                            @else
                                <p class="card-text">
                                    Anda belum mengisi tes, silahkan isi tes terlebih dahulu.
                                </p>
                                <a href="/home/styles" class="card-link">Isi Tes</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card py-3">
                        <div class="card-body text-center">
                            <p class="card-title fs-6 fw-bold text-center mb-3">Tes Tingkatan Berpikir Logis</p>
                            @if (isset($user->dataLogic->sum))
                                <div class="card-text fs-6">
                                    Nilai Tes Berpikir Logis kamu adalah
                                    <p class="mt-2">{{ $user->dataLogic->sum * 10 }}</p>
                                </div>
                                <a href="/home/logics/score" class="card-link">Lihat Detail</a>
                            @else
                                <p class="card-text">
                                    Anda belum mengisi tes, silahkan isi tes terlebih dahulu.
                                </p>
                                <a href="/home/logics" class="card-link">Isi Tes</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card py-3">
                        <div class="card-body text-center">
                            <p class="card-title fs-6 fw-bold text-cente mb-3">Pretest Asesmen Adaptif</p>
                            @if (isset($user->dataPretest->sum))
                                <div class="card-text fs-6">
                                    Nilai Pretest kamu adalah
                                    <p class="mt-2">{{ $user->dataPretest->sum }}</p>
                                </div>
                                <a href="/home/pretest/score" class="card-link">Lihat Detail</a>
                            @else
                                <p class="card-text">
                                    Anda belum mengisi tes, silahkan isi tes terlebih dahulu.
                                </p>
                                <a href="/home/pretest" class="card-link">Isi Tes</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card py-3">
                        <div class="card-body text-center">
                            <p class="card-title fs-6 fw-bold text-center mb-3">Postest Asesmen Adaptif</p>
                            @if (isset($user->dataPosttest->sum))
                                <div class="card-text fs-6">
                                    Nilai Posttest kamu adalah
                                    <p class="mt-2">{{ $user->dataPosttest->sum }}</p>
                                </div>
                                <a href="/home/posttest/score" class="card-link">Lihat Detail</a>
                            @else
                                <p class="card-text">
                                    Anda belum mengisi tes, silahkan isi tes terlebih dahulu.
                                </p>
                                <a href="/home/posttest" class="card-link">Isi Tes</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card py-3">
                        <div class="card-body text-center">
                            <p class="card-title fs-6 fw-bold text-center mb-3">Tes Tingkatan Berpikir Logis 2</p>
                            @if (isset($user->dataLogicii->sum))
                                <div class="card-text fs-6">
                                    Nilai Tes Berpikir Logis kamu adalah
                                    <p class="mt-2">{{ $user->dataLogicii->sum * 10 }}</p>
                                </div>
                                <a href="/home/logicsii/score" class="card-link">Lihat Detail</a>
                            @else
                                <p class="card-text">
                                    Anda belum mengisi tes, silahkan isi tes terlebih dahulu.
                                </p>
                                <a href="/home/logicsii" class="card-link">Isi Tes</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
@endsection