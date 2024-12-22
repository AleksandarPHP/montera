<!DOCTYPE html>
<html lang="sr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="https://code.jquery.com/ui/1.14.0/themes/base/jquery-ui.css"
        />
        <link rel="stylesheet" type="text/css" href="{{asset('assets/slick-1.8.1/slick/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/slick-1.8.1/slick/slick-theme.css')}}"/>

        <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
        />
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js"></script>
        <title>Montera</title>
    </head>
    <body>
        <header>
            <nav class="navbar fixed-top navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand d-lg-none" href="{{ url('/') }}">
                        <img
                            src="{{ asset('assets/images/logo.svg') }}"
                            alt="logo"
                            class="img-fluid"
                        />
                    </a>
                    <ul class="navbar-nav languages">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                SRB
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">ENG</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar"
                        aria-controls="offcanvasNavbar"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="offcanvas offcanvas-end"
                        tabindex="-1"
                        id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel"
                    >
                        <div class="offcanvas-header">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="offcanvas"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        O nama
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        Lokacija
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        SADRŽAJ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        Logo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        APARTMANI
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        KUPOVINA
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">
                                        NAJAM APARTMANA
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-contact">
                        <i class="fa-solid fa-mobile-screen"></i>
                        <div>
                            <a href="tel:+381 66 686 89 85"
                                >+381 66 686 89 85</a
                            >
                            <a href="tel: +381 65 927 97 00">
                                +381 65 927 97 00</a
                            >
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>
