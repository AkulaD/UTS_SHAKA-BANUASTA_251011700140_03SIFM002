@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5">
    
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="fw-bold text-success mb-3">TENTANG KAMI</h3>
            <hr class="border-success border-2 opacity-50" style="width: 100px;">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-3 mb-3 mb-md-0">
            <h5 class="fw-bold text-success">PROFIL PERUSAHAAN</h5>
            <p class="text-muted small">Informasi Umum</p>
        </div>
        <div class="col-md-9">
            <table class="table table-borderless table-sm">
                <tbody>
                    <tr>
                        <td class="fw-bold" style="width: 30%;">Nama Perusahaan</td>
                        <td>PT Toys Station Indonesia</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Lokasi Pusat</td>
                        <td>Jl. Puspitek Raya No. 10, Serpong, Tangerang Selatan, Banten 15310</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Tahun Berdiri</td>
                        <td>2025</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Struktur Kepemilikan</td>
                        <td>100% Dimiliki oleh Toys Station Group</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Direktur Utama</td>
                        <td>Shaka Banuasta (Pendiri & CEO)</td>
                    </tr>
                    <tr>
                        <td class="fw-bold align-top">Anak Perusahaan</td>
                        <td>
                            <div class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> Toys Station Retail
                            </div>
                            <div class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> Toys Station Playground
                            </div>
                            <div class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> Toys Station Distribution
                            </div>
                            <div>
                                <i class="bi bi-check-circle-fill text-primary me-2"></i> Toys Station Edukasi
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-3 mb-3 mb-md-0">
            <h5 class="fw-bold text-success">AKSES & LOKASI</h5>
            <p class="text-muted small">Lokasi Toko Offline</p>
        </div>
        <div class="col-md-9">
            <p class="fw-bold mb-1">Kantor Pusat & Toko Utama</p>
            <p class="mb-1">Jl. Puspitek Raya No. 10, Serpong, Tangerang Selatan</p>
            
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden shadow-sm">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.273964581428!2d106.67278731476996!3d-6.346480495359587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5a1c4e13a2b%3A0x6b7f5f7c5c5c5c5c!2sUniversitas%20Pamulang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

</div>
@endsection