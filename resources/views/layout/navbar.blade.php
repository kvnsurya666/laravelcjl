 @extends('template')

 @section('content')
     <nav class="navbar-dark sticky-top bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-1">
            <a class="navbar-brand" href="#" style="padding-top: 10px; padding-bottom: 10px">
              <img src="/assets/img/logo ciptajayalestari.PNG" alt="" width="100" height="50" />
            </a>
          </div>

          <div class="col-md-11" id="navbarNav">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/views/katalog/produk.php" role="button" aria-expanded="false">Katalog</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="mesin.php">Mesin</a></li>
                  <li><a class="dropdown-item" href="oli.php">Oli</a></li>
                  <li><a class="dropdown-item" href="aksesoris.php">Aksesoris</a></li>
                  <li><a class="dropdown-item" href="jasa.php">Jasa</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tentangkami.php">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
 @endsection

 