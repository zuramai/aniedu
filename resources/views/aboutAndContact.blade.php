@extends('layouts.landing')
@section('content')

<!-- Navbar -->
<nav class="navbar navbar-about-and-contact navbar-expand-lg navbar-expand-md navbar-dark fixed-top" id="navbar">
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
                    <a class="nav-link nav-menu text-white " href="/">Beranda <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Materi</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/">Beranda</a>
                        <a class="dropdown-item" href="/dasar-aljabar">Konsep Dasar Aljabar</a>
                        <a class="dropdown-item" href="/konversi-pecahan">Konversi Pecahan</a>
                    </div>
                </li>
                <li class="nav-item pl-3 pl-lg-4 pl-md-3">
                    <a class="nav-link nav-menu text-white active" href="#">About dan Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section class="section-about-website mt-5" id="section-about-website">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="heading-about-website color-1 text-center pt-5 mt-5">About Website</h1>
                    <img src="{{ asset('/images/shapes-img/second-border.png') }}" alt=""
                        class="section-about-website-border-bottom d-flex mx-auto">
                    <img src="{{ asset('/images/shapes-img/triangle.png') }}" alt=""
                        class="section-about-website-triangle-img mirror-img">
                    <p class="color-3 text-center pt-4">Apa itu Ani Edu Web?<br
                            class="section-about-website-new-line">AniEdu Web adalah sebuah website
                        dan
                        animasi yang berfungsi<br class="section-about-website-new-line">
                        sebagai media pembelajaran anak sekolah dasar kelas 6 dalam<br
                            class="section-about-website-new-line">memahami konsep dasar dari
                        penggunaan aljabar
                        dan cara<br class="section-about-website-new-line">mengkorversikan pecahan.</p>

                </div>

            </div>
        </div>
    </section>

    <div class="container pt-5 pb-5">
        <img src="{{ asset('/images/shapes-img/second-scribbles.png') }}" alt="" class="section-about-and-contact-scribbles-top">
        <img src="{{ asset('/images/shapes-img/ruler.png') }}" alt="" class="section-about-and-contact-ruler-img mirror-img">
    </div>

    <section class="section-about-us" id="section-about-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <img src="{{ asset('/images/illustration-img/boy-second.png') }}" alt="" class="section-about-us-boy-img">
                    <img src="{{ asset('/images/illustration-img/go.png') }}" alt="" class="section-about-us-go-img">
                </div>

                <div class="col-lg-6 col-md-6 pb-4 pb-lg-0 text-center">
                    <h1 class="color-1 pt-lg-3 pt-md-0">About Us</h1>
                    <img src="{{ asset('/images/shapes-img/second-border.png') }}" alt=""
                        class="section-about-us-border-bottom d-flex mx-auto">
                    <p class="color-3 pt-4">Website ini dibuat oleh Michella dengan harapan dapat membantu anak kelas
                        enam sekolah dasar untuk lebih giat belajar matematika
                    </p>
                    <p class="color-3">Animasi yang ada dalam website ini
                        dibuat oleh Yurike untuk mendukung sistem pembelajaran praktik dari teori yang sudah dijelaskan.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="section-contact-us" id="section-contact-us">
        <div class="container">
            <img src="{{ asset('/images/shapes-img/second-scribbles.png') }}" alt="" class="section-contact-us-scribbles-top">
            <h1 class="heading-contact-us text-center text-white">Contact Us</h1>
            <img src="{{ asset('/images/shapes-img/triangle.png') }}" alt="" class="section-contact-us-triangle-img mirror-img">
            <img src="{{ asset('/images/shapes-img/second-border.png') }}" alt=""
                class="section-contact-us-border-bottom d-flex mx-auto">

            <div class="section-contact-us-content">
                <div class="row text-center text-white">

                    <div class="col-lg-6 col-md-6">
                        <h2>Michella</h2>
                        <div class="pt-3">
                            <a href="mailto:e12170075@john.petra.ac.id" class="contact-us-link">email: e12170075@john.petra.ac.id</a>
                            <br>
                            <a href="https://www.instagram.com/michellaa_san/" class="contact-us-link">instagram: michellaa_san</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 pt-5 pt-md-0 pt-lg-0">
                        <h2>Yurike</h2>
                        <div class="pt-3">
                            <a href="mailto:E12170079@john.petra.ac.id" class="contact-us-link">email: E12170079@john.petra.ac.id</a>
                            <br>
                            <a href="https://www.instagram.com/yuui.ke/" class="contact-us-link">instagram: yuui.ke</a>
                        </div>
                    </div>

                    <div class="col-lg-6 contact-us-content-bottom">
                        <img src="{{ asset('/images/shapes-img/first-scribbles.png') }}" alt=""
                            class="section-contact-us-scribbles-bottom">
                    </div>

                    <div class="col-lg-6 contact-us-content-bottom">
                        <div class="contact-us-socmed-btn">
                            <a href="mailto:AniEduWeb@gmail.com" class="text-dark contact-socmed top-footer-socmed"><i class="fas fa-envelope"></i></a>
                            <a href="https://www.instagram.com/website.aniedu/" class="text-dark contact-socmed top-footer-socmed"><i class="fab fa-instagram-square pl-3"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection