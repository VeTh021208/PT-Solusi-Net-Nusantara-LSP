@extends('layouts.app')

@section('title', 'Galeri Perusahaan — PT Solusi Net Nusantara')

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Galeri',
        'title' => 'Galeri Perusahaan',
        'subtitle' => 'Dokumentasi kegiatan instalasi, maintenance, dan aktivitas tim kami di lapangan.',
    ])

    <section class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-4">
                @forelse ($galleries as $item)
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                            <div class="card-body">
                                <h3 class="h6 fw-semibold mb-1">{{ $item->title }}</h3>
                                @if ($item->description)
                                    <p class="text-muted small mb-0">{{ $item->description }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Belum ada foto galeri. Tambahkan lewat panel admin.</p>
                @endforelse
            </div>

            @if ($galleries->hasPages())
                <nav class="mt-4" aria-label="Navigasi halaman">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item {{ $galleries->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $galleries->onFirstPage() ? '#' : $galleries->previousPageUrl() }}">Sebelumnya</a>
                        </li>
                        <li class="page-item disabled">
                            <span class="page-link">Halaman {{ $galleries->currentPage() }} dari {{ $galleries->lastPage() }}</span>
                        </li>
                        <li class="page-item {{ $galleries->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $galleries->hasMorePages() ? $galleries->nextPageUrl() : '#' }}">Selanjutnya</a>
                        </li>
                    </ul>
                </nav>
            @endif
        </div>
    </section>

@endsection
