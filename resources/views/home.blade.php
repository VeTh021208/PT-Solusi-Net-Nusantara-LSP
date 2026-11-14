@extends('layouts.app')

@section('title', 'PT Solusi Net Nusantara — Internet & Jaringan Terpercaya')

@section('content')

    <section class="py-5 bg-primary text-white">
        <div class="container py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge text-bg-light mb-3">Jasa Layanan Internet &amp; Jaringan</span>
                    <h1 class="display-5 fw-bold mb-3">Koneksi Internet Stabil &amp; Terpercaya untuk Rumah &amp; Bisnis</h1>
                    <p class="lead mb-4">PT Solusi Net Nusantara menyediakan layanan internet broadband, instalasi jaringan, dan maintenance dengan tim teknisi berpengalaman di seluruh area operasional kami.</p>
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="{{ route('products.index') }}" class="btn btn-light fw-semibold">Lihat Layanan</a>
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-light">Hubungi Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Tentang Kami</div>
                <h2 class="h3 fw-bold">Kenapa Pilih Solusi Net Nusantara?</h2>
                <p class="text-muted">Beberapa alasan pelanggan mempercayakan jaringan internetnya kepada kami.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Koneksi Stabil</div>
                        <p class="text-muted small mb-0">Jaringan dipantau rutin agar internet tetap lancar setiap hari.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Instalasi Cepat</div>
                        <p class="text-muted small mb-0">Tim teknisi siap memasang jaringan baru dalam waktu singkat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Harga Bersahabat</div>
                        <p class="text-muted small mb-0">Paket layanan disesuaikan dengan kebutuhan rumah maupun bisnis.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="border-start border-primary border-3 ps-3">
                        <div class="fw-semibold mb-1">Dukungan Responsif</div>
                        <p class="text-muted small mb-0">Tim layanan pelanggan siap membantu setiap kendala jaringan.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('about') }}" class="btn btn-outline-primary">Selengkapnya Tentang Kami</a>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Kategori</div>
                <h2 class="h3 fw-bold">Jelajahi Kategori Layanan</h2>
                <p class="text-muted">Layanan dikelompokkan supaya lebih mudah Anda pilih sesuai kebutuhan.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3 justify-content-center">
                @forelse ($categories as $category)
                    <div class="col">
                        <a href="{{ route('products.index', ['kategori' => $category->slug]) }}" class="text-decoration-none">
                            <div class="card h-100 text-center border-0 shadow-sm">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold text-dark mb-1">{{ $category->name }}</h3>
                                    <span class="text-muted small">{{ $category->products_count }} layanan</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="text-muted">Belum ada kategori yang ditambahkan.</p>
                @endforelse
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <div class="text-primary fw-bold small text-uppercase">Layanan Unggulan</div>
                <h2 class="h3 fw-bold">Layanan Pilihan Kami</h2>
                <p class="text-muted">Beberapa layanan yang paling banyak diminati pelanggan.</p>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @forelse ($featuredProducts as $product)
                    @include('partials.product-card', ['product' => $product])
                @empty
                    <p class="text-muted">Belum ada layanan. Tambahkan layanan lewat panel admin.</p>
                @endforelse
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    @if ($galleries->isNotEmpty())
        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="text-primary fw-bold small text-uppercase">Galeri</div>
                    <h2 class="h3 fw-bold">Aktivitas &amp; Dokumentasi Kami</h2>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    @foreach ($galleries as $item)
                        <div class="col">
                            <div class="card h-100 border-0 shadow-sm">
                                <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                                <div class="card-body">
                                    <h3 class="h6 fw-semibold mb-0">{{ $item->title }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('gallery.index') }}" class="btn btn-outline-primary">Lihat Semua Galeri</a>
                </div>
            </div>
        </section>
    @endif

    <section class="py-5 bg-primary text-white">
        <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div>
                <h2 class="h4 fw-bold mb-1">Siap berlangganan internet di tempat Anda?</h2>
                <p class="mb-0 opacity-75">Daftar akun, pilih layanan, dan ajukan langganan hanya dalam beberapa langkah.</p>
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-light fw-semibold">Ajukan Langganan</a>
        </div>
    </section>

@endsection
