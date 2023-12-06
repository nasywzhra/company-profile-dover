<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT DOVER CHEMICAL</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/dover-logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@300;400;500;600;700&family=Quicksand&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white px-sm-5 fixed-top">
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
                        <a class="nav-link text-dark" aria-current="page" href="{{ route('page.main') }}">HOME</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" aria-current="page" href="#services">SERVICES</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" aria-current="page" href="#about">ABOUT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" aria-current="page" href="#product">PRODUCT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" aria-current="page" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" aria-current="page" href="#">NEWS</a>
                    </li>
            </div>
        </div>
    </nav>

    <header>
        <!-- Jumbotron -->
        <div class="container-fluid bg-image px-0 object-fit-cover" id="hero">
            <img class="image-fluid" src="{{ asset('assets/img/bg-jumbotron.png') }}" alt="bg jumbotron" width="100%">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);"></div>
            <div class="hero-text">
                <div class="hero-animation">
                    YOUR ONE STOP CHEMICAL SOLUTION PROVIDER <br> <i
                        class=" hero-icon-down fa-solid fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="services" class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="text-center section-title">
                    SERVICES
                </h1>
                <div class="title-line"></div>
            </div>
            <div class="row justify-content-center">
                <div class="card px-0" style="width: 310px; margin-bottom: 57px">
                    <img src="{{ asset('assets/img/services/services-1.png') }}" class="card-img-top" alt="services1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tank Storage Rental</h5>
                        <p class="card-text text-center">We provide internal floating roof tanks for chemical storage,
                            Other available services are heating, cooling, nitrogen blanketing, dry air, drum filling,
                            and internal/external storage facilities.</p>
                    </div>
                </div>
                <div class="card px-0 mx-5" style="width: 310px; margin:0px 40px 57px">
                    <img src="{{ asset('assets/img/services/services-2.png') }}" class="card-img-top" alt="services2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Logistic and Trucking</h5>
                        <p class="card-text text-center">we provide a comprehensive logistic solution for our customer.
                            Using innovative technology and highly trained staffs, we continuously improve our delivery
                            and warehouse performance.</p>
                    </div>
                </div>
                <div class="card px-0 " style="width: 310px; margin-bottom: 57px">
                    <img src="{{ asset('assets/img/services/services-3.png') }}" class="card-img-top" alt="services3">
                    <div class="card-body">
                        <h5 class="card-title text-center">Drum / IBC Filling Solution</h5>
                        <p class="card-text text-center">We have the facilities to carry out all the operations relating
                            to drumming/IBCs.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="container-fluid px-0">
            <div class="bg-about">
                <img src="{{ asset('assets/img/about/about.png') }}" alt="About" class="img-fluid">
                <div class="about-content">
                    <h1 class="section-title">About</h1>
                    <div class="title-line"></div>
                    <p>Founded in 1960, The Dovechem Group is one of the leading chemical company group in Southeast
                        Asia engaged in the business of Distribution, Manufacturing, Terminal and Logistics for the
                        chemical industry.</p>
                    <p>PT. Dover Chemical, located in Merak, Banten, Indonesia has been established as an Indonesia PMA
                        Chemical Company under Dovechem Group since 1980.</p>
                    <p>PT. Dover Chemical produces paraformaldehyde, formaldehyde, formaldehyde resins (UF, MF, PF, PUF)
                        used in the wood panel industries and household furniture. It also produces emulsion adhesives
                        which are utilized widely in many industries. In PT. Dover Chemical, we have been continuously
                        improving our manufacturing process and capacity to achieve a greater production efficiency.</p>
                </div>
            </div>
            <div class=" d-flex justify-content-center footer-about">
                <div class="col-footer-about">
                    <h6 class="footer-about-title">1960</h6>
                    <p class="mb-0 footer-about-text">Year Establish</p>
                </div>
                <div class="col-line"></div>
                <div class="col-footer-about">
                    <h6 class="footer-about-title">4</h6>
                    <p class="mb-0 footer-about-text">Awards Won</p>
                </div>
            </div>
        </section>

        <section id="product" class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="text-center section-title">
                    PRODUCTS
                </h1>
                <div class="title-line"></div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="product-detail shadow">
                    <img src="{{ asset('assets/img/product/product-1.png') }}" class="product-image" alt="product1">
                    <div class="product-description ">
                        <p class="product-title">
                            Polycarboxylate Superplasticizier (PCE)
                        </p>
                        <div class="product-text">
                            'Polycarboxylate Superplasticizer (PCE) is a water-soluble concrete additive used to reduce
                            water to cement ratio without affecting the workability of the mixture.'
                        </div>
                    </div>
                </div>
                <div class="product-detail shadow">
                    <img src="{{ asset('assets/img/product/product-2.png') }}" class="product-image" alt="product2">
                    <div class="product-description">
                        <p class="product-title">
                            Sodium Benzoate - Dovative Ben
                        </p>
                        <p class="product-text">
                            ‘Sodium benzoate , also know as benzoic acid sodium salt is amde by reacting sodium
                            hydroxide with benzoic acid, is primarily used as additive and preservative in food and
                            beverage application to reduce or inhibit activity of microorganism’
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="product-detail shadow">
                    <img src="{{ asset('assets/img/product/product-3.png') }}" class="product-image" alt="product3">
                    <div class="product-description">
                        <p class="product-title">
                            Formalydehye
                        </p>
                        <p class="product-text">
                            'Formaldehyde solutions are used as raw material in a broad range of industries and
                            applications including moulded articles, high-pressure laminates, adhesives for plywood,
                            particleboard and other types of wood panels, coatings, varnishes and enamels, foundry core
                            and shell binders, glass and mineral wool insulation and fertilizers.'
                        </p>
                    </div>
                </div>
                <div class="product-detail shadow">
                    <img src="{{ asset('assets/img/product/product-4.png') }}" class="product-image" alt="product4">
                    <div class="product-description">
                        <p class="product-title">
                            Paraformaldehyde
                        </p>
                        <p class="product-text">
                            ' Paraformaldehyde is the solid form of liquid formaldehyde, formed by the polymerization of
                            formaldehyde with a typical degree of polymerization of 8-100 units. '
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 120px">
                <img src="{{ asset('assets/img/product/logo-dover.png') }}" class="product-footer-img" alt="Logo Dover">
                <img src="{{ asset('assets/img/product/sgs-logo.png') }}" class="product-footer-img" alt="Logo Dover">
                <img src="{{ asset('assets/img/product/safety-logo.png') }}" class="product-footer-img"
                    alt="Logo Dover">
                <img src="{{ asset('assets/img/product/iso-logo.png') }}" class="product-footer-img" alt="Logo Dover">
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>