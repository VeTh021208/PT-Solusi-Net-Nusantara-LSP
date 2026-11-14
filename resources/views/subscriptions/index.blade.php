@extends('layouts.app')

@section('title', 'Langganan Saya — PT Solusi Net Nusantara')

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Akun',
        'title' => 'Langganan Saya',
        'subtitle' => 'Daftar pengajuan langganan yang pernah Anda kirimkan.',
    ])

    <section class="py-5">
        <div class="container">
            @if ($subscriptions->isEmpty())
                <p class="text-muted">Anda belum mengajukan langganan apa pun. <a href="{{ route('products.index') }}">Lihat layanan kami</a>.</p>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle bg-white shadow-sm">
                        <thead class="table-light">
                            <tr>
                                <th>Layanan</th>
                                <th>Telepon</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Konfirmasi</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscriptions as $item)
                                <tr>
                                    <td>{{ $item->product->name ?? '-' }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>
                                        @php
                                            $badgeClass = match ($item->status) {
                                                'approved' => 'text-bg-success',
                                                'rejected' => 'text-bg-danger',
                                                'active' => 'text-bg-success',
                                                'non_active' => 'text-bg-secondary',
                                                default => 'text-bg-warning',
                                            };
                                        @endphp
                                        <span class="badge {{ $badgeClass }}">{{ $item->status_label }}</span>
                                    </td> 
                                    <td>
                                    @if ($item->status === 'approved' || $item->status === 'non_active')
                                    <a href="https://wa.me/083898645908" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                                    @endif
                                    </td>
                                    <td>{{ $item->created_at->format('d M Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </section>

@endsection
