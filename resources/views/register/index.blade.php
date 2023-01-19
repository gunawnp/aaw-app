@extends('layouts.main')

@section('container')
<div class="container m-top">
    <div class="row justify-content-center">
        <div class="col-lg-4 me-5 mt-4 pt-5">
            <img id="login" src="illus/form.svg" class="" alt="Login" width="400" />
        </div>
        <div class="col-lg-4 ms-5 mt-4">
            <main class="form-signup w-100 m-auto">
                <form action="/daftar" method="post">
                    @csrf
                    <h1 class="h3 mb-4 fw-normal text-center">Form Pendaftaran</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" value="{{ old('name') }}" required>
                        <label for="name">Nama</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" name="username" value="{{ old('username') }}" required>
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" required>
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-blue fs-5 mt-4" type="submit">Daftar</button>
                    <p class="mt-3 text-center">Sudah mempunyai akun? <a href="/login" class="text-decoration-none">Silahkan Login!</a></p>
                </form>
            </main>
        </div>
    </div>
</div>

@endsection