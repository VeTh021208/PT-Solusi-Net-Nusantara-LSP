@extends('layouts.app')

@section('title', $product->name . ' — PT Solusi Net Nusantara')

@section('content')

    <section class="py-5">
        <div class="container">
            <a href="{{ route('products.index') }}" class="btn btn-link ps-0 text-decoration-none fw-semibold">&larr; Kembali ke Semua Layanan</a>

            <div class="row g-4 mt-1">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm bg-primary-subtle">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="card-img-top object-fit-cover" style="min-height: 320px;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="badge text-bg-light border">{{ $product->category->name ?? '-' }}</span>
                    <h1 class="h3 fw-bold mt-2 mb-2">{{ $product->name }}</h1>
                    <div class="fs-4 fw-bold text-primary mb-3">
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                        <span class="fs-6 fw-normal text-muted">/ {{ $product->unit }}</span>
                    </div>

                    <p class="text-muted">{{ $product->description ?: 'Belum ada deskripsi untuk layanan ini.' }}</p>

                    @auth
                        <div class="card border-0 shadow-sm mt-3">
                            <div class="card-body p-4">
                                <h3 class="h5 fw-bold mb-3"><i class="fa-solid fa-file-signature me-2"></i>Ajukan Langganan</h3>

                                <form action="{{ route('subscriptions.store', $product->slug) }}" method="POST">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Nomor Telepon</label>
                                        <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx">
                                        @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Alamat Pemasangan</label>
                                        <textarea id="address" name="address" rows="3" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat lengkap pemasangan">{{ old('address') }}</textarea>
                                        @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="notes" class="form-label">Catatan (opsional)</label>
                                        <textarea id="notes" name="notes" rows="2" class="form-control" placeholder="Catatan tambahan">{{ old('notes') }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fa-solid fa-paper-plane me-1"></i> Ajukan Langganan Sekarang
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Masuk untuk Berlangganan</a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    @if ($related->isNotEmpty())
        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-4">
                    <div class="text-primary fw-bold small text-uppercase">Layanan Terkait</div>
                    <h2 class="h3 fw-bold">Dari Kategori yang Sama</h2>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                    @foreach ($related as $item)
                        @include('partials.product-card', ['product' => $item])
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
