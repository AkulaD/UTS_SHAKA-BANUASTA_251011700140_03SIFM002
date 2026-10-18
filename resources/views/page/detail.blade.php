@extends('layouts.app')

@section('content')
<style>
    .product-image-main {
        width: 100%;
        height: auto;
        object-fit: contain;
        max-height: 450px;
        background-color: #f8f9fa;
        border-radius: 1rem;
        padding: 2rem;
    }
    .badge-custom {
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-weight: 600;
        font-size: 0.85rem;
    }
    .badge-category {
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
    }
    .badge-age {
        background-color: rgba(13, 110, 253, 0.1);
        color: #0d6efd;
    }
</style>

<div class="container mt-4 mb-5">
    
    <nav aria-label="breadcrumb" class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-success text-decoration-none">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/produk') }}" class="text-success text-decoration-none">Katalog Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>

    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-5">
        <div class="row g-0 align-items-center">
            <div class="col-md-5 p-4 p-md-5 border-end">
                <img src="{{ asset('images/' . $product->image) }}" class="product-image-main shadow-sm" alt="{{ $product->name }}">
            </div>
            
            <div class="col-md-7 p-4 p-md-5 d-flex flex-column h-100">
                <h2 class="fw-bold text-dark mb-3">{{ $product->name }}</h2>
                
                <div class="d-flex flex-wrap gap-2 mb-4">
                    <span class="badge-custom badge-category"><i class="bi bi-tag-fill me-1"></i> {{ $product->category }}</span>
                    <span class="badge-custom badge-age"><i class="bi bi-person-fill me-1"></i> {{ $product->age_group }}</span>
                </div>

                <h1 class="display-5 fw-bold text-success mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</h1>
                
                <h6 class="fw-bold mb-2">Deskripsi Produk:</h6>
                <p class="text-muted" style="line-height: 1.8; text-align: justify;">
                    {{ $product->description }}
                </p>

                <div class="mt-4 pt-4 border-top">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <a href="https://wa.me/6289507974439?text=Halo%20Toys%20Station,%20saya%20ingin%20bertanya%20tentang%20produk%20{{ urlencode($product->name) }}" target="_blank" class="btn btn-outline-success w-100 py-3 rounded-3 fw-bold">
                                <i class="bi bi-whatsapp me-2"></i> Tanya Admin via WA
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection