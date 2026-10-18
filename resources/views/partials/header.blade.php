<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="{{ url('/') }}" style="color: black;">Toys Station</a>
        <button class="navbar-toggler shadow-sm border-1" style="background-color: #198754;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" href="{{ url('/') }}" style="color: black;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('produk*') ? 'active fw-bold' : '' }}" href="{{ url('/produk') }}" style="color: black;">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tentang*') ? 'active fw-bold' : '' }}" href="{{ url('/tentang') }}" style="color: black;">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak*') ? 'active fw-bold' : '' }}" href="{{ url('/kontak') }}" style="color: black;">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>