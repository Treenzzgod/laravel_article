@extends('layouts.layouts')

@section('container')
<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">LavaRead</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link active nav-text" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text active" href="/post">Article</a>
                    </li>
                    <li class="nav-item dropdown">
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section class="container-fluid body-text p-t-125 m-b-200">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5 d-none d-lg-block">
                <img src="/storage/images/hero-login.png" alt="landing" class="img-fluid m-l-50">
            </div>
            <div class="col-lg-5 p-t-30 m-l-125 mx-auto">
                <form class="validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        Login to
                        <h3 class="secondary-text m-t-20">LavaRead Admin</h3>
                    </span>
                    <div class="p-b-40">
                        <div class="wrap-input100 validate-input" data-validate="Valid ID is required">
                            <input class="input100" type="email" name="email" placeholder="email" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="p-b-20">
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" id="password" placeholder="Password" @error('password') is-invalid @enderror" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-12 mx-auto p-t-20">
                        <button class="btn-success btn btn-lg" type="submit">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
