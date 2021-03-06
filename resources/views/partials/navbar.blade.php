<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Toko</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Kategori</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('kontakKami') ? 'active' : '' }}" href="{{ route('kontakKami') }}">Kontak</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('tentangKami') ? 'active' : '' }}" href="{{ route('tentangKami') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
        </div>
    </div>
</nav>