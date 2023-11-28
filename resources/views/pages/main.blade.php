<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT DOVER CHEMICAL</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/dover-logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@300;400;500;600;700&family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header>

    </header>
    <nav class="navbar navbar-expand-lg bg-white px-sm-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('page.main') }}">
                <img src="{{ asset('assets/img/dover-chemical.png') }}" id="navbar-logo" alt="Logo dover">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="{{ route('page.main') }}">HOME</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="#">SERVICES</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="#">ABOUT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="#">PRODUCT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" aria-current="page" href="#">NEWS</a>
                    </li>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>