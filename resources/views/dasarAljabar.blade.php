@extends('layouts.landing')

@section('content')
<nav class="navbar navigation-bar navbar-expand-lg navbar-collapse-md navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a href="/"><img src="{{ asset('/landing/images/logo/aniedu-logo.png') }}" alt="" class="navbar-brand"
                style="width: 215px; height: 60px; object-fit: contain;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white active" href="#home">Beranda <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="#do-you-know">Tahukah Kalian</a>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white" href="#form-of-operation">Bentuk Operasi</a>
                </li>
                <li class="nav-item dropdown pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Subject
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/">Home</a>
                        <a class="dropdown-item" href="dasar-aljabar" style="background-color: #b1dfcd;">Konsep
                            Dasar Aljabar</a>
                        <a class="dropdown-item" href="konversi-pecahan">Konversi Pecahan</a>
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
<section class="jumbotron-dasar-aljabar jumbotron jumbotron-fluid"
    style="background-image: url({{ asset('/landing/images/background-img/bg-header.jpg') }} );">
    <div class="container mt-3 mt-lg-0">

        <img src="{{ asset('/landing/images/illustration-img/manwithformula-withtext.png') }}" alt=""
            class="jumbotron-dasar-aljabar-img d-flex float-right">

    </div>
</section>

<!-- Do You Know (Part One) -->
<section class="do-you-know-part-one pt-5 pb-5 color-1" id="do-you-know"
    style="background-image: url({{ asset('/landing/images/background-img/square-pattern-second.pn') }});">
    <div class="container">
        <h1 class="heading-do-you-know-part-one text-center color-primary">Tahukah Kalian?</h1>
        <div class="row">

            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('/landing/images/illustration-img/girl.png') }}" alt="" class="do-you-know-girl-img">
            </div>

            <div class="col-lg-6 col-md-6 pt-2 pt-lg-5">
                <p class="color-primary">2a + 3b = 7</p>
                <p class="color-primary">ada 3 hal yang harus selalu diingat dan diperhatikan.</p>

                <p class="color-primary">Konstanta: 7<br>Variabel: a dan b<br>Koefisien: 2 dan 3</p>

                <p class="color-primary">Beda koefisien dan konstanta adalah konstanta<br>berdiri sendiri dan
                    koefisien
                    diikuti oleh variabel</p>
            </div>

        </div>

    </div>
</section>

<!-- Do You Know (Part Two) -->
<section class="do-you-know-part-two pt-5 pb-5"
    style="background-image: url({{ asset('/landing/images/background-img/bg-about-and-contact.jpg')}});">
    <div class="container">
        <img src="{{ asset('/landing/images/shapes-img/first-scribbles.png') }}" alt="" class="do-you-know-scribbles-img-top">
        <div class="row">

            <div class="col-lg-6 col-md-6 order-2 order-lg-1 order-md-1">
                <div class="do-you-know-part-two-square-img">
                    <div class="do-you-know-content-text">
                        <p class="text-white">Konsep Aljabar dapat ditemukan di mana<br>saja, seperti dalam
                            kehidupan
                            kita<br>sehari-hari.</p>
                        <br>
                        <p class="text-white">Contoh: menghitung luas tanah,<br>menghitung volume air dan masih
                            banyak<br>lainnya.</p>
                        <br>
                        <p class="text-white">Membandingkan jumlah kapasitas berat<br>yang dapat diangkat oleh lift
                            agar
                            tidak<br>jatuh juga menggunakan konsep dasar<br>aljabar.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 order-1 order-lg-2 order-md-2">
                <img src="{{ asset('/landing/images/illustration-img/boy-with-ruler.png') }}" alt=""
                    class="do-you-know-boy-with-ruler-img">
            </div>

        </div>
        <img src="{{ asset('/landing/images/shapes-img/second-scribbles.png') }}" alt=""
            class="do-you-know-scribbles-img-bottom d-flex float-right">
    </div>
</section>

<!-- Form Of Operation -->
<section class="form-of-operation color-1 pt-5 pb-5" id="form-of-operation"
    >
    <div class="container">
        <h1 class="color-1 text-center pt-5">Bentuk Operasi</h1>
        <img src="{{ asset('/landing/images/shapes-img/second-border.png') }}" alt=""
            class="form-of-operation-heading-border-bottom d-flex mx-auto">

        <div class="row pt-4 color-1">

            <div class="col-lg-6 color-primary">
                <p>Ada bentuk operasi dasar aljabar yang<br>wajib diingat untuk memudahkan
                    kita<br>dalam menjawab soal matematika:</p>

                <p>2y merupakan 2.y atau 2 kali y</p>

                <p>Maka, apabila ada soalan 2y = 6 dan<br>ingin mencari y,2 akan dipindah dan menjadi bagi (:).
                    Maka:</p>

                <p>y = 6:2, maka y = 3</p>

                <div class="form-of-operation-bottom-line-one"></div>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('/landing/images/shapes-img/triangle.png') }}" alt=""
                    class="form-of-operation-triangle-img mirror-img d-flex ml-auto">

                <div class="form-of-operation-bottom-line-two"></div>
            </div>

        </div>

        <p class="color-primary pt-5">Ayuk belajar bareng Ani dan Edu lewat video ini!</p>

        <div class="text-center d-flex justify-content-center">
            <img src="{{ asset('/landing/images/shapes-img/rectangle.png') }}" alt="" class="form-of-operation-rectangle-img">
        </div>

        <p class="color-primary text-center pt-4">Main Game Yuk!</p>
        <img src="{{ asset('/landing/images/illustration-img/go.png') }}" alt=""
            class="form-of-operation-go-img img-fluid position-absolute">

        <div class="btn-test-wrapper text-center">
            <a href="{{ url('sign-up') }}" class="btn btn-test rounded-0 pt-0 pr-4 pb-0 pl-4">Test</a>
        </div>

        <img src="{{ asset('/landing/images/shapes-img/first-border.png') }}" alt=""
            class="form-of-operation-border-bottom-img position-absolute mt-">

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