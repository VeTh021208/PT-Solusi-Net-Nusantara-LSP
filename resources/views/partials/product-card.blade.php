<div class="col">
    <a href="{{ route('products.show', $product->slug) }}" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm border-0">
            <div class="bg-primary-subtle d-flex align-items-center justify-content-center" style="height: 160px;">
                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="card-body">
                <span class="badge text-bg-light border">{{ $product->category->name ?? '-' }}</span>
                <h3 class="h6 fw-semibold mt-2 mb-2">{{ $product->name }}</h3>
                <div class="fw-bold text-primary">
                    Rp{{ number_format($product->price, 0, ',', '.') }}
                    <span class="fw-normal text-muted small">/ {{ $product->unit }}</span>
                </div>
            </div>
        </div>
    </a>
</div>
