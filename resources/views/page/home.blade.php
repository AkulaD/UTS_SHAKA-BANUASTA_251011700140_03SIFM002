@extends('layouts.app')

@section('content')
<style>
    .poster-card {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .poster-card:hover {
        z-index: 10 !important;
        transform: scale(1.05) translateY(-10px);
    }
    .poster-background {
        background-image: url("{{ asset('images/banner.png') }}");
        background-size: cover;
        background-position: center;
        border-radius: 2rem;
        position: absolute;
        top: -5%;
        left: -5%;
        right: -5%;
        bottom: -5%;
        opacity: 0.15;
        z-index: 0;
    }
    .category-card {
        transition: all 0.2s ease-in-out;
    }
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
        .product-scroll-container {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 15px;
        gap: 1rem;
    }
    .product-scroll-container::-webkit-scrollbar {
        height: 8px;
    }
    .product-scroll-container::-webkit-scrollbar-thumb {
        background-color: #009E48;
        border-radius: 10px;
    }
    .product-scroll-container::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }
    .product-card-scroll {
        min-width: 200px;
        max-width: 200px;
        transition: transform 0.2s;
    }
    .product-card-scroll:hover {
        transform: translateY(-5px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .product-image-wrapper {
        height: 200px;
        overflow: hidden;
        border-radius: 1rem 1rem 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }
    .product-image-wrapper img {
        object-fit: contain;
        width: 100%;
        height: 100%;
    }
</style>

<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        
        <div class="col-lg-6 mb-5 mb-lg-0">
            <span class="badge bg-success mb-3 px-3 py-2 rounded-pill">
                <i class="bi bi-stars me-1"></i> Koleksi Terbaru
            </span>
            <h1 class="display-4 fw-bold text-dark mb-3">
                Selamat Datang di <span class="text-success">Toys Station</span>
            </h1>
            <p class="lead text-muted mb-4">
                Temukan berbagai macam mainan edukatif, boneka lucu, dan action figure keren untuk buah hati Anda. Mainan berkualitas dengan harga terjangkau hanya di Toys Station.
            </p>
            <div class="d-flex gap-3">
                <a href="{{ url('/produk') }}" class="btn btn-success btn-lg px-4 shadow-sm">
                    <i class="bi bi-box-seam me-2"></i> Lihat Katalog
                </a>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="position-relative p-4" style="min-height: 500px;">
                
                <div class="poster-background"></div>

                @foreach($posters as $poster)
                    <img src="{{ $poster->url }}"
                        class="poster-card position-absolute img-fluid rounded-4 {{ $poster->shadow }} border border-3 border-white" 
                        alt="{{ $poster->alt }}"
                        style="{{ $poster->style }}">
                @endforeach

            </div>
        </div>
        
    </div>

    <div class="row g-4 mt-5 justify-content-center">
        
        <div class="col-lg col-md-4 col-6">
            <a href="{{ url('/produk') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center category-card rounded-4 py-4">
                    <div class="card-body">
                        <i class="bi bi-balloon text-success display-5 mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark mb-1">Bayi</h6>
                        <small class="text-muted">0 - 12 Bulan</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="{{ url('/produk') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center category-card rounded-4 py-4">
                    <div class="card-body">
                        <i class="bi bi-1-circle text-warning display-5 mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark mb-1">Balita</h6>
                        <small class="text-muted">1 - 3 Tahun</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-4 col-6">
            <a href="{{ url('/produk') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center category-card rounded-4 py-4">
                    <div class="card-body">
                        <i class="bi bi-brush text-danger display-5 mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark mb-1">Pra-Sekolah</h6>
                        <small class="text-muted">3 - 5 Tahun</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-6 col-6">
            <a href="{{ url('/produk') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center category-card rounded-4 py-4">
                    <div class="card-body">
                        <i class="bi bi-mortarboard text-primary display-5 mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark mb-1">Usia Sekolah</h6>
                        <small class="text-muted">6 Tahun Ke Atas</small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg col-md-6 col-6">
            <a href="{{ url('/produk') }}" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm text-center category-card rounded-4 py-4">
                    <div class="card-body">
                        <i class="bi bi-controller text-dark display-5 mb-3 d-block"></i>
                        <h6 class="fw-bold text-dark mb-1">Remaja</h6>
                        <small class="text-muted">16 Tahun Ke Atas</small>
                    </div>
                </div>
            </a>
        </div>

    </div>

    <div class="row mt-5 mb-3 align-items-center">
        <div class="col">
            <h3 class="fw-bold m-0">PRODUK BARU</h3>
        </div>
        <div class="col-auto">
            <a href="{{ url('/produk') }}" class="btn btn-outline-success btn-sm rounded-pill">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <div class="product-scroll-container">
        @foreach($toys as $toy)
            <div class="card product-card-scroll border-0 shadow-sm rounded-4">
                <div class="position-relative">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/' . $toy->image) }}" alt="{{ $toy->name }}">
                    </div>
                    <span class="badge bg-danger position-absolute top-0 start-0 m-2 rounded-1">
                        <i class="bi bi-fire"></i> Baru
                    </span>
                </div>
                <div class="card-body p-3">
                    <h6 class="card-title text-truncate fw-bold text-dark mb-1" title="{{ $toy->name }}">{{ $toy->name }}</h6>
                    
                    <div class="text-warning small mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fw-bold text-success">Rp {{ number_format($toy->price, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="mt-2 text-muted" style="font-size: 0.75rem;">
                        {{ $toy->age_group }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- <div class="row mt-5 mb-3 align-items-center">
        <div class="col">
            <h4 class="fw-bold m-0 text-success">MAINAN BAYI</h4>
        </div>
        <div class="col-auto">
            <a href="{{ url('/produk?search=0+-+12+Bulan') }}" class="btn btn-outline-success btn-sm rounded-pill">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <div class="product-scroll-container">
        @foreach($toys->where('age_group', '0 - 12 Bulan') as $toy)
            <div class="card product-card-scroll border-0 shadow-sm rounded-4">
                <div class="position-relative">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/' . $toy->image) }}" alt="{{ $toy->name }}">
                    </div>
                </div>
                <div class="card-body p-3">
                    <h6 class="card-title text-truncate fw-bold text-dark mb-1" title="{{ $toy->name }}">{{ $toy->name }}</h6>
                    
                    <div class="text-warning small mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fw-bold text-success">Rp {{ number_format($toy->price, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="mt-2 text-muted" style="font-size: 0.75rem;">
                        {{ $toy->age_group }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5 mb-3 align-items-center">
        <div class="col">
            <h4 class="fw-bold m-0 text-warning">MAINAN BALITA</h4>
        </div>
        <div class="col-auto">
            <a href="{{ url('/produk?search=1+-+3+Tahun') }}" class="btn btn-outline-warning btn-sm rounded-pill">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <div class="product-scroll-container">
        @foreach($toys->where('age_group', '1 - 3 Tahun') as $toy)
            <div class="card product-card-scroll border-0 shadow-sm rounded-4">
                <div class="position-relative">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/' . $toy->image) }}" alt="{{ $toy->name }}">
                    </div>
                </div>
                <div class="card-body p-3">
                    <h6 class="card-title text-truncate fw-bold text-dark mb-1" title="{{ $toy->name }}">{{ $toy->name }}</h6>
                    
                    <div class="text-warning small mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fw-bold text-success">Rp {{ number_format($toy->price, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="mt-2 text-muted" style="font-size: 0.75rem;">
                        {{ $toy->age_group }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row mt-5 mb-3 align-items-center">
        <div class="col">
            <h4 class="fw-bold m-0 text-danger">PRA-SEKOLAH</h4>
        </div>
        <div class="col-auto">
            <a href="{{ url('/produk?search=3+-+5+Tahun') }}" class="btn btn-outline-danger btn-sm rounded-pill">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <div class="product-scroll-container">
        @foreach($toys->where('age_group', '3 - 5 Tahun') as $toy)
            <div class="card product-card-scroll border-0 shadow-sm rounded-4">
                <div class="position-relative">
                    <div class="product-image-wrapper">
                        <img src="{{ asset('images/' . $toy->image) }}" alt="{{ $toy->name }}">
                    </div>
                </div>
                <div class="card-body p-3">
                    <h6 class="card-title text-truncate fw-bold text-dark mb-1" title="{{ $toy->name }}">{{ $toy->name }}</h6>
                    
                    <div class="text-warning small mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mt-2">
                        <span class="fw-bold text-success">Rp {{ number_format($toy->price, 0, ',', '.') }}</span>
                    </div>
                    
                    <div class="mt-2 text-muted" style="font-size: 0.75rem;">
                        {{ $toy->age_group }}
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

    <div class="row mt-5 pt-4 mb-2 align-items-center border-bottom pb-2">
        <div class="col">
            <h4 class="fw-bold m-0 text-success">NEWS</h4>
        </div>
        <div class="col-auto">
            <a href="#" class="text-decoration-none text-muted fw-bold small">MORE <i class="bi bi-caret-right-fill"></i></a>
        </div>
    </div>

    <div class="row py-3 border-bottom align-items-center">
        <div class="col-md-3 text-muted small mb-1 mb-md-0">
            2026.10.18 / Info Rilis
        </div>
        <div class="col-md-9 text-dark">
            Segera Hadir: Koleksi Eksklusif Action Figure Gundam Edisi Terbatas Akhir Tahun!
        </div>
    </div>

    <div class="row py-3 border-bottom align-items-center">
        <div class="col-md-3 text-muted small mb-1 mb-md-0">
            2026.10.15 / Info Rilis
        </div>
        <div class="col-md-9 text-dark">
            Persiapan Peluncuran LEGO Set Spesial Edisi Musim Dingin 2026.
        </div>
    </div>

    <div class="row py-3 border-bottom align-items-center">
        <div class="col-md-3 text-muted small mb-1 mb-md-0">
            2026.10.10 / Pengumuman
        </div>
        <div class="col-md-9 text-dark">
            Sneak Peek: Mainan Edukatif Seri Robotika Interaktif untuk Anak Usia Sekolah.
        </div>
    </div>

    <div class="row py-3 border-bottom align-items-center">
        <div class="col-md-3 text-muted small mb-1 mb-md-0">
            2026.10.05 / Pengumuman
        </div>
        <div class="col-md-9 text-dark">
            Nantikan Kehadiran Board Game Edisi Khusus Nusantara Bulan Depan!
        </div>
    </div>
</div>
@endsection