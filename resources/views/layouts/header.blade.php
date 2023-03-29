  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
  @include('layouts.img_menu') 
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center" style="font-size:22px;">{{\App\Models\Params::getTituloSite()}}</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
          @include('layouts.menu')
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->