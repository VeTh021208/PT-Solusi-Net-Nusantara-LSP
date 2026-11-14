@extends('layouts.app')

@section('title', 'Kontak Kami — PT Solusi Net Nusantara')

@section('content')

    @include('partials.page-header', [
        'eyebrow' => 'Kontak',
        'title' => 'Hubungi Kami',
        'subtitle' => 'Ada pertanyaan seputar layanan internet atau ingin berlangganan? Kirim pesan ke kami.',
    ])

    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold">Informasi Kontak</h3>
                            <p class="text-muted">Kami siap membantu setiap hari kerja, mulai pukul 08.00 hingga 20.00.</p>

                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex gap-2">
                                    <i class="fa-solid fa-location-dot text-primary mt-1"></i>
                                    <span>Kp. Kayu Manis Rt. 03/03 Kel. Kayumanis, Tanah Sareal, Bogor</span>
                                </li>
                                <li class="mb-3 d-flex gap-2">
                                    <i class="fa-solid fa-phone text-primary mt-1"></i>
                                    <span>0838-9864-5908 (Whatsapp)</span>
                                </li>
                                <li class="mb-3 d-flex gap-2">
                                    <i class="fa-solid fa-envelope text-primary mt-1"></i>
                                    <span>veth021208@gmail.com</span>
                                </li>
                            </ul>

                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://wa.me/6283898645908" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                            </div>

                            <iframe
                                class="w-100 mt-3 rounded border"
                                style="height: 280px;"
                                src="https://www.google.com/maps?q=Tanah%20Sareal%2C%20Bogor&output=embed"
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Kirim Pesan</h3>

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nama lengkap Anda">
                                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email@contoh.com">
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="message" class="form-label">Pesan</label>
                                    <textarea id="message" name="message" rows="4" class="form-control @error('message') is-invalid @enderror" placeholder="Tulis pesan Anda di sini">{{ old('message') }}</textarea>
                                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
