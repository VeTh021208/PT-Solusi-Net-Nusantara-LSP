<section class="bg-light border-bottom py-4">
    <div class="container text-center">
        <span class="badge text-primary bg-primary-subtle mb-2">{{ $eyebrow ?? 'Solusi Net Nusantara' }}</span>
        <h1 class="h3 fw-bold mb-1">{{ $title }}</h1>
        @isset($subtitle)
            <p class="text-muted mb-0">{{ $subtitle }}</p>
        @endisset
    </div>
</section>
