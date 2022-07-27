@extends('layouts.template')

@section('content')
 <!-- Carousel -->
    <div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/slider1.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
          <div class="carousel-item">
            <img src="/assets/img/slider2.jpg" class="d-block w-100" alt="Gambar 2" />
          </div>
          <div class="carousel-item">
            <img src="/assets/img/slider3.jpg" class="d-block w-100" alt="Gambar 3" />
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

    <!-- Our Products Carousel -->
    <div class="container">
          <div class="row" style="padding-top: 20px;">
            <div class="col-12">
              <div class="row head-panel align-items-center d-flex justify-content-between">
              <div class="col-8 col-md-9 head-panel__left">
                <h2 class="head-panel__title">Our Products</h2>
              </div>
            </div>
            </div> 
          </div>
            <div id="carouselProdukUnggulan" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                      <a href="mesin.php">
                        <img src="/assets/img/Logo/weida.png" class="card-img-top" alt="WEIDA">
                      </a> 
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/dixon.jpg" class="card-img-top" alt="DIXON">
                      
                    </div>
              
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/fullmark.jpg" class="card-img-top" alt="FULLMARK">
                      
                    </div>
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/bositools.png" class="card-img-top" alt="BOSI TOOLS">
                      
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/J&W.jpg" class="card-img-top" alt="J&W">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/Besdia.jpg" class="card-img-top" alt="Besdia">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/Carmar.jpg" class="card-img-top" alt="CarMar">
                      
                    </div>

                    <div class="card col-md-4" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/Arntz.jpg" class="card-img-top" alt="Arntz">
                      
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="row justify-content-center" style="padding: 20px;">
                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/vertex.png" class="card-img-top" alt="VERTEX">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/seayac.jpg" class="card-img-top" alt="SEAYAC">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/waytrain.jpg" class="card-img-top" alt="WAYTRAIN">
                      
                    </div>

                    <div class="card col-md-3" style="width: 20rem; padding-right: 10px;">
                        <img src="/assets/img/Logo/sanou.jpg" class="card-img-top" alt="SAN OU">
                      
                    </div>
                </div>
                </div> 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselProdukUnggulan" data-bs-slide="prev">
                    <i class="bi bi-chevron-left" style="color: #067fe2;" aria-hidden="true"></i>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselProdukUnggulan" data-bs-slide="next">
                    <i class="bi bi-chevron-right" style="color: #067fe2;" aria-hidden="true"></i>
                  <span class="visually-hidden">Next</span>
              </button>
            </div>                           
    </div>

    <!-- Image Showcases-->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/gambar1.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Machinery</h3>
            <p>Ingin cari macam - macam mesin?</p>
            <div class="shop-button">
              <a href="mesin.php">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/gambar2.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Machine Tools</h3>
            <p>Ingin cari berbagai machine tool?</p>
            <div class="shop-button">
              <a href="machinetool.php">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('/assets/img/gambar3.jpg')"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h3>Accesories</h3>
            <p>Ingin cari macam - macam aksesoris?</p>
            <div class="shop-button">
              <a href="aksesoris.php">Lihat Disini</a>
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('/assets/img/jasa.jpg')"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h3>Cutting Tools</h3>
            <p>Ingin cari berbagai jenis cutting tool?</p>
            <div class="shop-button">
              <a href="cuttingtool.php">Lihat Disini</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
