<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Solusi Net Nusantara — Internet & Jaringan Terpercaya')</title>
    <meta name="description" content="PT Solusi Net Nusantara, penyedia layanan internet broadband, instalasi jaringan, dan maintenance untuk rumah dan bisnis.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .navbar { position: sticky; top: 0; z-index: 1030; }
        .navbar-brand img { width: auto; max-width: 180px; height: 36px; object-fit: contain; }
        .navbar .container { min-height: 64px; }
        main { position: relative; z-index: 1; }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main>
        @if (session('success'))
            <div class="container pt-3">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        document.querySelectorAll('[data-confirm]').forEach((form) => {
            form.addEventListener('submit', (e) => {
                if (!confirm(form.dataset.confirm)) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
