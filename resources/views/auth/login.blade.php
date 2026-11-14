@extends('layouts.app')

@section('title', 'Masuk — PT Solusi Net Nusantara')

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Akun',
        'title' => 'Masuk ke Akun Anda',
        'subtitle' => 'Masuk untuk mengajukan langganan layanan internet kami.',
    ])

    <section class="py-5">
        <div class="container">
            <div class="card border-0 shadow-sm mx-auto" style="max-width: 440px;">
                <div class="card-body p-4">
                    <h1 class="h5 fw-bold mb-3"><i class="fa-solid fa-right-to-bracket me-2"></i>Masuk</h1>

                    @if ($errors->any())
                        <div class="alert alert-danger">{{ $errors->first() }}</div>
                    @endif

                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="email@contoh.com" autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Kata sandi Anda">
                        </div>

                        <div class="form-check mb-3">
                            <input type="checkbox" name="remember" id="remember" class="form-check-input">
                            <label for="remember" class="form-check-label">Ingat saya</label>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    </form>

                    <p class="text-center small mt-3 mb-0">Belum punya akun? <a href="{{ route('register') }}" class="fw-semibold">Daftar sekarang</a></p>
                </div>
            </div>
        </div>
    </section>

@endsection
