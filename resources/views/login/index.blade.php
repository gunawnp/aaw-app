@extends('layouts.main')

@section('container')
<div class="container p-top">
    <div class="row justify-content-center mt-5 pt-4">
        <div class="col-lg-4 me-5">
            <img id="login" src="illus/login.svg" class="" alt="Login" width="400" />
        </div>
        <div class="col-lg-4 ms-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-4 fw-normal text-center">Silahkan Login</h1>
        
                    <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-blue fs-5 mt-3" type="submit">Login</button>
                    <p class="mt-3 text-center">Belum Mendaftar? <a href="/daftar" class="text-decoration-none">Silahkan Daftar!</a></p>
                </form>
            </main>
        </div>
    </div>
</div>

@endsection