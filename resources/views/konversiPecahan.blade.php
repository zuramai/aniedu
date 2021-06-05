@extends('layouts.landing')
@section('content')
<!-- Responsive CSS For Background Image in section .pecahan-how-to-convert -->
<style>
    @media (max-width: 321px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-without-square.jpg')}});
        }
    }

    @media (min-width: 350px) and (max-width: 575.98px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-without-square.jpg')}});
            height: 915px;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-without-square.jpg')}});
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-without-square.jpg')}});
            height: 570px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-without-square.jpg')}});
        }
    }

    @media (min-width: 1200px) {
        .pecahan-how-to-convert {
            background-image: url({{ asset('landing/images/background-img/bg-image-how-to-convert-with-square.jpg')}});
        }
    }
</style>
 <!-- Navbar -->
 <nav class="navbar navigation-bar navbar-expand-lg navbar-collapse-md navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a href="/"><img src="{{ asset('landing/images/logo/aniedu-logo.png') }}" alt="" class="navbar-brand"
                style="width: 215px; height: 60px; object-fit: contain;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="#home">Beranda <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="#do-you-know">Tahukah Kalian</a>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="#how-to-convert">Cara Mengkonversikan</a>
                </li>
                <li class="nav-item dropdown pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subject
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/">Home</a>
                        <a class="dropdown-item" href="/dasar-aljabar">Konsep Dasar Aljabar</a>
                        <a class="dropdown-item" href="/konversi-pecahan"
                            style="background-color: #b1dfcd;">Konversi Pecahan</a>
                    </div>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="/about-and-contact">About dan Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Jumbotron -->
<section class="jumbotron-konversi-pecahan jumbotron jumbotron-fluid"
    style="background-image: url({{ asset('landing/images/background-img/bg-header.jpg')}});">
    <div class="container mt-3 mt-lg-0">

        <img src="{{ asset('landing/images/illustration-img/girlwithformula-withtext.png') }}" alt=""
            class="jumbotron-konversi-pecahan-img d-flex mx-auto">

    </div>
</section>

<!-- Heading pecahan-do-you-know -->
<section class="pecahan-do-you-know color-1 pt-5 pb-5" id="do-you-know"
   >
    <div class="container">
        <h1 class="heading-pecahan-do-you-know text-center color-1 pt-5">Tahukah Kalian?</h1>
        <img src="{{ asset('landing/images/shapes-img/second-border.png') }}" alt=""
            class="heading-pecahan-do-you-know-border-bottom d-flex mx-auto">
        <img src="{{ asset('landing/images/shapes-img/ruler.png') }}" alt="" class="pecahan-do-you-know-ruler-img">

        <div class="pecahan-do-you-know-content">
            <div class="row">

                <div class="col-lg-6 col-md-6 color-primary order-2 order-lg-1 order-md-1 pt-lg-3">
                    <p>Ada 3 macam konversi pecahan, yaitu:</p>

                    <p>Desimal: merupakan pecahan yang ada komanya. Contoh: 2,1</p>

                    <p>Pecahan Biasa: yaitu pecahan yang menggunakan per. Contoh: &frac12;</p>

                    <p>Pecahan Campuran: merupakan pecahan yang mengkombinasikan bilangan bulat dan pecahan biasa.
                        Contoh: 2&frac12;</p>
                </div>

                <div class="col-lg-6 col-md-6 order-1 order-lg-2 order-md-2">
                    <img src="{{ asset('landing/images/illustration-img/boy-second.png') }}" alt="" class="pecahan-do-you-know-img">
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Heading pecahan-how-to-convert -->
<section class="pecahan-how-to-convert pt-4 mt-4" id="how-to-convert">
    <div class="container">
        <img src="{{ asset('landing/images/shapes-img/how-to-convert-scribbles-top.png') }}" alt=""
            class="pecahan-how-to-convert-scribbles-top">
        <h1 class="heading-pecahan-how-to-convert text-center text-white">Cara Mengkonversikan</h1>

        <div class="pecahan-how-to-convert-content">
            <div class="row text-white">

                <div class="col-lg-6 col-md-6">
                    <p>Pecahan campuran -> Biasa<br>3&frac14;&nbsp;=<span style="border-bottom: 3px solid white;">
                            (3x4)+1</span><br><span class="pecahan-bottom-1">4</span></p>

                    <p class="pl-4">&nbsp;=<span style="border-bottom: 3px solid white;"> 12+1</span><br><span
                            class="pecahan-bottom-2">4</span></p>

                    <p class="pl-4">&nbsp;=<span style="border-bottom: 3px solid white;"> 13</span><br><span
                            class="pecahan-bottom-3">4</span></p>

                    <p class="pt-lg-3">Persentase -> Biasa<br>% = 100 yang dituliskan pada penyebut berapa pun
                        jumlah persennya, dan
                        angka persen akan menjadi pembilang. Contoh: 20% = 20/100<br>55% = 55/100</p>

                </div>

                <div class="col-lg-6 col-md-6">
                    <p>Pecahan desimal -> Biasa<br>Prinsipnya jumlah angka setelah tanda koma (,), menentukan jumlah
                        angka 0 pada penyebut sedangkan koma pada pembilang akan hilang. Contoh:<br>0,25 =
                        25/100<br>3,242 = 3242/1000</p>

                    <img src="{{ asset('landing/images/shapes-img/triangle.png') }}" alt=""
                        class="pecahan-how-to-convert-triangle-img mirror-img">
                </div>

            </div>
        </div>
        <img src="{{ asset('landing/images/shapes-img/first-scribbles.png') }}" alt=""
            class="pecahan-how-to-convert-scribbles-bottom">
    </div>
</section>

<section class="pecahan-learn-with-ani-and-edu form-of-operation pt-3 pb-5"
   >
    <div class="container">
        <p class="color-1 pt-4 pt-lg-5 pt-md-5">Ayuk belajar bareng Ani dan Edu lewat video ini!</p>

        <div class="text-center d-flex justify-content-center">
            <img src="{{ asset('landing/images/shapes-img/rectangle.png') }}" alt="" class="form-of-operation-rectangle-img">
        </div>

        <p class="color-1 text-center pt-4">Main Game Yuk!</p>
        <img src="{{ asset('landing/images/illustration-img/go.png') }}" alt=""
            class="form-of-operation-go-img img-fluid position-absolute">

        <div class="btn-test-wrapper text-center">
            <a href="{{ url('sign-up') }}" class="btn-test rounded-0 pt-0 pr-4 pb-0 pl-4">Test</a>
        </div>

        <img src="{{ asset('landing/images/shapes-img/first-border.png') }}" alt=""
            class="form-of-operation-border-bottom-img position-absolute mt-">

    </div>
    </div>
</section>
<!-- Top Footer -->
<section class="bg-color-2 pt-5 pb-5">
    <div class="container">
        <div class="row text-center text-center">

            <div class="col-lg-4 col-md-4 pt-3 pt-lg-0">
                <h3 class="text-lg-center text-white d-inline d-lg-block d-md-block">About Us</h3>
                <div class="d-flex flex-column top-footer-about-content-wrapper text-center text-lg-left">
                    <a href="about-and-contact.html#section-about-us" class="color-2">Team</a>
                    <a href="about-and-contact.html#section-about-website" class="color-2">Website</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 pt-3 pt-lg-0">
                <h3 class="text-lg-center text-white d-inline d-lg-block">Contact Us</h3>
                <div class="d-flex flex-row top-footer-contact-content-wrapper justify-content-center justify-content-lg-start">
                    <a href="mailto:AniEduWeb@gmail.com" class="text-dark contact-socmed top-footer-socmed"><i class="fas fa-envelope"></i></a>
                    <a href="https://www.instagram.com/website.aniedu/" class="text-dark contact-socmed top-footer-socmed"><i class="fab fa-instagram-square pl-3"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 pt-3 pt-lg-0">
                <h3 class="text-lg-center text-white d-inline d-lg-block">More</h3>
                <div class="d-flex flex-column top-footer-more-content-wrapper">
                    <a href="" class="color-2">Gaming</a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection