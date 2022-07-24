@extends('layouts.template')

@section('content')
    <!-- Masthead-->
    <div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/slider1.png" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="/img/slider2.png" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="/img/slider3.png" class="d-block w-100" alt="Gambar 3" />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlide" data-bs-slide="prev">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlide" data-bs-slide="next">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>
    <!-- Company Profile -->
    <section id="about">
            <div class="container px-4" style="padding-top: 20px;">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Profil Perusahaan</h2>
                        <p class="lead">CV. CIPTA JAYA LESTARI merupakan Agen Resmi penjualan Mesin Mesin Merk Vertex.</p>
                        <p class="lead">Selain itu kami juga sebagai Distributor / Supplier berbagai mesin mesin untuk memenuhi kebutuhan industri Anda, seperti :</p>
                        <ul>
                            <li>Mesin CNC Milling</li>
                            <li>Mesin Bubut</li>
                            <li>Mesin Bubut CNC</li>
                            <li>VERTEX TOOLS</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <!-- Our Team Showcase -->
   <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">Our Sales Team</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-1.jpg" alt="Sales 1" />
                            <h5>Sales 1</h5>
                            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-2.jpg" alt="Sales 2" />
                            <h5>Sales 2</h5>
                            <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-3.jpg" alt="Sales 3" />
                            <h5>Sales 3</h5>
                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="/img/testimonials-3.jpg" alt="Sales 4" />
                            <h5>Sales 4.</h5>
                            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection