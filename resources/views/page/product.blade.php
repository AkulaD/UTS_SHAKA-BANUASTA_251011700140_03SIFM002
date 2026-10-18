@extends('layouts.app')

@section('content')
<style>
    .custom-card {
        border: 1px solid transparent;
        transition: transform 0.2s, border 0.2s, box-shadow 0.2s;
        text-decoration: none;
        color: inherit;
        display: block;
        background: #fff;
    }
    .custom-card:hover {
        border: 1px solid #198754;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .product-img-wrapper {
        position: relative;
        width: 100%;
        padding-top: 100%;
        overflow: hidden;
        background-color: #f8f9fa;
    }
    .product-img-wrapper img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .product-title {
        font-size: 0.875rem;
        line-height: 1.25rem;
        height: 2.5rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 0.5rem;
        color: #212529;
    }
    .product-price {
        color: #198754;
        font-size: 1rem;
        font-weight: bold;
    }
    .badge-category {
        font-size: 0.65rem;
        padding: 0.2rem 0.5rem;
        background-color: rgba(25, 135, 84, 0.1);
        color: #198754;
        border-radius: 0.2rem;
        font-weight: 600;
    }
    
    .custom-search, .custom-select {
        border: 1px solid #dee2e6;
        border-radius: 0.5rem;
        padding: 0.6rem 1rem;
        box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        transition: all 0.2s ease;
    }
    .custom-search:focus, .custom-select:focus {
        border-color: #198754;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        outline: none;
    }
    .search-wrapper {
        position: relative;
    }
    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }
</style>

<div class="container mt-4 mb-5">
    
    <div class="bg-white p-3 mb-4">
        <div class="row align-items-center">
            <div class="col-md-4 mb-3 mb-md-0">
                <h4 class="fw-bold m-0 text-success">Katalog Produk</h4>
            </div>
            <div class="col-md-8">
                <form action="{{ url('/produk') }}" method="GET" class="row g-2 justify-content-md-end">
                    
                    <div class="col-12 col-md-5 search-wrapper">
                        <input type="text" name="search" class="form-control custom-search w-100" placeholder="Cari mainan..." value="{{ request('search') }}">
                        <i class="bi bi-search search-icon"></i>
                    </div>
                    
                    <div class="col-12 col-md-4">
                        <select name="category" class="form-select custom-select" onchange="this.form.submit()">
                            <option value="">Semua Kategori</option>
                            <option value="Track & Kendaraan" {{ request('category') == 'Track & Kendaraan' ? 'selected' : '' }}>Track & Kendaraan</option>
                            <option value="Mainan Bayi & Teether" {{ request('category') == 'Mainan Bayi & Teether' ? 'selected' : '' }}>Mainan Bayi & Teether</option>
                            <option value="LEGO & Bricks" {{ request('category') == 'LEGO & Bricks' ? 'selected' : '' }}>LEGO & Bricks</option>
                            <option value="Remote Control (RC)" {{ request('category') == 'Remote Control (RC)' ? 'selected' : '' }}>Remote Control (RC)</option>
                            <option value="Blaster & Senjata Mainan" {{ request('category') == 'Blaster & Senjata Mainan' ? 'selected' : '' }}>Blaster & Senjata Mainan</option>
                            <option value="Boneka & Plushie" {{ request('category') == 'Boneka & Plushie' ? 'selected' : '' }}>Boneka & Plushie</option>
                            <option value="Board Game" {{ request('category') == 'Board Game' ? 'selected' : '' }}>Board Game</option>
                            <option value="Model Kit & Gunpla" {{ request('category') == 'Model Kit & Gunpla' ? 'selected' : '' }}>Model Kit & Gunpla</option>
                            <option value="Diecast & Koleksi" {{ request('category') == 'Diecast & Koleksi' ? 'selected' : '' }}>Diecast & Koleksi</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="d-none"></button>
                </form>
            </div>
        </div>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">
        @forelse($products as $product)
        <div class="col">
            <a href="{{ url('/produk/' . $product->id) }}" class="card h-100 custom-card rounded-3 overflow-hidden">
                <div class="product-img-wrapper">
                    <img src="{{ asset('assets/images/' . $product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="card-body p-2 d-flex flex-column">
                    <div class="product-title">{{ $product->name }}</div>
                    
                    <div class="mt-auto">
                        <div class="d-flex align-items-center mb-1">
                            <span class="badge-category">{{ $product->category }}</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <h5 class="text-muted">Maaf, mainan yang kamu cari tidak ditemukan.</h5>
        </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>

</div>
@endsection