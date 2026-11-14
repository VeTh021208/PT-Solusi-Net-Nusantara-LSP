@extends('layouts.app')

@section('title', 'Layanan Kami — PT Solusi Net Nusantara')

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Layanan',
        'title' => 'Semua Layanan Kami',
        'subtitle' => 'Pilih layanan internet broadband, instalasi jaringan, atau maintenance sesuai kebutuhan Anda.',
    ])

    <section class="py-5">
        <div class="container">
            <div class="d-flex flex-wrap gap-2 mb-4">
                <a href="{{ route('products.index') }}" class="btn btn-sm {{ ! $activeCategory ? 'btn-primary' : 'btn-outline-secondary' }}">
                    Semua
                </a>
                @foreach ($categories as $category)
                    <a href="{{ route('products.index', ['kategori' => $category->slug]) }}"
                       class="btn btn-sm {{ $activeCategory === $category->slug ? 'btn-primary' : 'btn-outline-secondary' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @forelse ($products as $product)
                    @include('partials.product-card', ['product' => $product])
                @empty
                    <p class="text-muted">Belum ada layanan pada kategori ini.</p>
                @endforelse
            </div>

            @if ($products->hasPages())
                <nav class="mt-4" aria-label="Navigasi halaman">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $products->onFirstPage() ? '#' : $products->previousPageUrl() }}">Sebelumnya</a>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link">Halaman {{ $products->currentPage() }} dari {{ $products->lastPage() }}</span>
                        </li>
                        <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $products->hasMorePages() ? $products->nextPageUrl() : '#' }}">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            @endif
        </div>
    </section>

@endsection
