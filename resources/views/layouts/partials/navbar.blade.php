<nav class="navbar navbar-expand-lg bg-white px-sm-5 fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('page.main') }}">
            <img src="{{ asset('assets/img/dover-chemical.png') }}" id="navbar-logo" alt="Logo dover">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page" href="{{ route('page.main', '#hero') }}">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page"
                        href="{{ route('page.main', '#services') }}">SERVICES</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page"
                        href="{{ route('page.main', '#about') }}">ABOUT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page"
                        href="{{ route('page.main', '#product') }}">PRODUCT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page"
                        href="{{ route('page.main', '#contact') }}">CONTACT</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link text-dark" aria-current="page" href="{{ route('news.guest.index') }}">NEWS</a>
                </li>
        </div>
    </div>
</nav>