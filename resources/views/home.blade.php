@extends('layouts.landing')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navigation-bar navbar-expand-lg navbar-expand-md navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a href="#home"><img src="{{ asset('/landing/images/logo/aniedu-logo.png') }}" alt="" class="navbar-brand"
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
                        <a class="nav-link nav-menu text-white" href="#subject">Subject</a>
                    </li>
                    <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                        <a class="nav-link nav-menu text-white" href="#about-and-contact">About dan Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  <!-- Jumbotron -->
  <section class="jumbotron-homepage jumbotron jumbotron-fluid" style="background-image: url({{ asset('/landing/images/background-img/bg-header.jpg') }});">
        <div class="container d-flex justify-content-center mt-3 mt-lg-0">
            <img src="{{ asset('/landing/images/illustration-img/boy-and-girl.png') }}" alt="" class="jumbotron-homepage-img">
        </div>
        </div>

        <div class="scroll-down d-flex justify-content-center">
            <img src="{{ asset('/landing/images/shapes-img/scrolldown.png') }}" alt="" class="scroll-down-icon-img ml-5">
        </div>
    </section>

    <!-- Subject -->
    <section class="subject pt-5 pb-5" id="subject">
        <img src="{{ asset('/landing/images/shapes-img/first-scribbles.png') }}" alt=""
            class="subject-scribbles-img img-fluid d-flex mr-auto ml-3 mt-5">
        <div class="container">

            <h3 class="display-4 text-center pt-3 pt-lg-0 pt-md-0 color-1">Subject</h3>

            <div class="subject-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{ asset('/landing/images/illustration-img/boy.png') }}" alt="" class="subject-img d-flex mx-auto">
                    </div>

                    <div class="col-lg-6 col-md-6 mt-lg-5 mt-md-4">
                        <div class="pt-2">
                        <img src="{{ asset('/landing/images/illustration-img/go.png') }}" alt="" class="subject-go-img">
                            <div>
                                <a href="/dasar-aljabar"
                                    class="subject-btn subject-btn-konsep-aljabar rounded-0 pt-2 pr-4 pb-2 pl-4">Konsep
                                    Aljabar</a>
                            </div>
                            <div class="mt-5">
                                <a href="/konversi-pecahan"
                                    class="subject-btn subject-btn-konversi-pecahan mt-5 rounded-0 pt-2 pr-4 pb-2 pl-4">Konversi
                                    Pecahan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <img src="{{ asset('/landing/images/shapes-img/second-scribbles.png') }}" alt=""
            class="subject-scribbles-img img-fluid d-flex ml-auto mr-3 mt-4 mt-lg-0 mt-md-0">
    </section>

    <!-- About and Contact -->
    <section class="about-and-contact" id="about-and-contact"
        style="background-image: url({{ asset('/landing/images/background-img/bg-about-and-contact.jpg') }});">
        <div class="container">
            <div class="row pt-3">

                <div class="col-lg-4 col-md-4 pt-5 mt-3">
                    <h1 class="heading-about-us text-white text-center">About Us</h1>
                    <img src="{{ asset('/landing/images/shapes-img/first-border.png') }}" alt=""
                        class="about-border-bottom d-flex mx-auto">

                    <div class="about-us-content">

                        <p class="text-white pt-3 pl-5 pl-lg-5 pl-md-4 ml-md-0">AniEdu Web adalah
                            sebuah website yang
                            memfasilitasi siswa kelas 6 SD untuk
                            mempelajari konsep dasar aljabar dan cara konversi pecahan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <img src="{{ asset('/landing/images/shapes-img/ruler.png') }}" alt=""
                        class="about-and-contact-ruler-img d-flex mx-auto">
                </div>

                <div class="col-lg-4 col-md-4 pt-4 pt-lg-5 mt-lg-3 pt-md-5 mt-md-3">
                    <h1 class="heading-contact text-white text-center">Contact</h1>
                    <img src="{{ asset('/landing/images/shapes-img/second-border.png') }}" alt=""
                        class="contact-border-bottom d-flex mx-auto">

                    <div class="contact-content pt-3 pl-5 ml-lg-5 pl-md-4 ml-md-0">
                        <a href="mailto:AniEduWeb@gmail.com" class="contact-socmed d-block"><i class="fas fa-envelope contact-icon pr-2"></i><span
                                class="text-white socmed">Email:</span><br><span
                                class="socmed pl-4 ml-3">AniEduWeb@gmail.com</span></a>
                        <a href="https://www.instagram.com/website.aniedu" class="contact-socmed d-block mt-3"><i class="fab fa-instagram-square contact-icon pr-2"></i><span
                                class="text-white socmed">Instagram:</span><br><span
                                class="socmed pl-4 ml-3">website.aniedu</span></a>

                    </div>

                    <img src="{{ asset('/landing/images/shapes-img/triangle.png') }}" alt="" class="about-and-contact-triangle d-flex">
                </div>

            </div>
        </div>
    </section>


@endsection