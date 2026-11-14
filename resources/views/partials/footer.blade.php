<footer class="bg-light border-top mt-5 pt-4 pb-3">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a href="{{ route('home') }}" class="d-inline-flex align-items-center gap-2 fw-bold text-primary text-decoration-none mb-2">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo PT Solusi Net Nusantara" height="36">
                    <span>Solusi Net Nusantara</span>
                </a>
                <p class="text-muted small">Penyedia layanan internet broadband, instalasi jaringan, dan maintenance terpercaya untuk rumah maupun bisnis Anda.</p>

                <div class="d-flex gap-2">
                    <a href="https://www.tiktok.com/@vethfish" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/muraaja02/" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/vethfish" class="btn btn-outline-primary btn-sm rounded-circle" aria-label="X"><i class="fa-brands fa-x"></i></a>
                </div>
            </div>

            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Hubungi Kami</h5>
                <ul class="list-unstyled text-muted small">
                    <li class="mb-2"><i class="fa-solid fa-location-dot me-2 text-primary"></i>Kp. Kayu Manis Rt. 03/03 Kel. Kayumanis, Tanah Sareal, Bogor</li>
                    <li class="mb-2"><i class="fa-solid fa-phone me-2 text-primary"></i>0838-9864-5908</li>
                    <li class="mb-2"><i class="fa-solid fa-envelope me-2 text-primary"></i>veth021208@gmail.com</li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h5 class="fw-bold mb-3">Lokasi Kami</h5>
                <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm">
                    <iframe
                        src="https://www.google.com/maps?q=Kayumanis%2C%20Tanah%20Sareal%2C%20Bogor&output=embed"
                        title="Lokasi PT Solusi Net Nusantara"
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        style="border: 0;"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <div class="border-top text-center text-muted small pt-3 mt-3">
            &copy; {{ date('Y') }} PT Solusi Net Nusantara. Hak cipta dilindungi.
        </div>
    </div>
</footer>
