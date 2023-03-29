<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clínica Crisálida - Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.3.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-portfolio">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
       @include('layouts.img_menu')
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">{{$parametros["titulo_home"]}}</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
          @include('layouts.menu')
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/novas/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Portfolio</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Portfolio</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tudo</li>
            <li data-filter=".filter-area">Área</li>
            <li data-filter=".filter-product">Refeição</li>
            <li data-filter=".filter-espaco">Espaços</li>
            <li data-filter=".filter-reunioes">Reuniões</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/novas/portifolio/capela.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Refeição</h4>
                <p>Capela do Almoço</p>
                <a href="assets/img/novas/portifolio/capela.jpeg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/novas/refeição02.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Refeição</h4>
                <p>Capela da Janta</p>
                <a href="assets/img/novas/refeição02.jpeg" title="Jonathas Queiroz" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-espaco">
              <img src="assets/img/novas/portifolio/enfermaria.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Espaço Interno</h4>
                <p>Enfermaria</p>
                <a href="assets/img/novas/portifolio/enfermaria.jpeg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-reunioes">
              <img src="assets/img/novas/portifolio/arereuni05.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reuniões</h4>
                <p>Partilha de Sentimento</p>
                <a href="assets/img/novas/portifolio/are05.jpeg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/novas/portifolio/cafe_manha.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Refeição</h4>
                <p>Capela do Café da Manhã</p>
                <a href="assets/img/novas/portifolio/cafe_manha.jpeg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-area">
              <img src="assets/img/novas/portifolio/area_geral01.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Area Externa</h4>
                <p>Espaço Amplo</p>
                <a href="assets/img/novas/portifolio/area_geral01.jpeg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-area">
              <img src="assets/img/novas/portifolio/piscina01.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Área Externa</h4>
                <p>Piscina</p>
                <a href="assets/img/novas/portifolio/piscina01.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-reunioes">
              <img src="assets/img/novas/portifolio/auditorio_reuniao.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reuniões</h4>
                <p>Auditório</p>
                <a href="assets/img/novas/portifolio/auditorio_reuniao.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-area">
              <img src="assets/img/novas/portifolio/area_geral031.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reuniões</h4>
                <p>Auditório</p>
                <a href="assets/img/novas/portifolio/area_geral031.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/novas/portifolio/refeição03.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Refeição</h4>
                <p>Variedades Almoço</p>
                <a href="assets/img/novas/portifolio/refeição03.jpeg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-espaco">
              <img src="assets/img/novas/portifolio/administração01.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Espaço Internos</h4>
                <p>Administração</p>
                <a href="assets/img/novas/portifolio/administração01.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-reunioes">
              <img src="assets/img/novas/portifolio/reuniao_terapeutica.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reunião (Vídeo)</h4>
                <p>Reunião com Terapeuta p/ Dependência Química</p>
                <a href="assets/img/novas/portifolio/reuniao_terapeutica.jpeg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-area">
              <img src="assets/img/novas/portifolio/piscina.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reuniões</h4>
                <p>Auditório</p>
                <a href="assets/img/novas/portifolio/piscina.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-area">
              <img src="assets/img/novas/portifolio/area_geral01_corte.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Area Externa</h4>
                <p>Visão Externa</p>
                <a href="assets/img/novas/portifolio/area_geral01_corte.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-product">
              <img src="assets/img/novas/portifolio/refeição04.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Refeição</h4>
                <p>Variedade Almoço</p>
                <a href="assets/img/novas/portifolio/refeição04.jpeg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-reunioes">
              <img src="assets/img/novas/portifolio/reuniao_assistente.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Reunião</h4>
                <p>Reunião com Assistente Social</p>
                <a href="assets/img/novas/portifolio/reuniao_assistente.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-espaco">
              <img src="assets/img/novas/portifolio/enfermaria.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Espaço Interno</h4>
                <p>Enfermagem</p>
                <a href="assets/img/novas/portifolio/enfermaria.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-espaco">
              <img src="assets/img/novas/portifolio/area_geral02.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Área Externa</h4>
                <p>Visão Ampla</p>
                <a href="assets/img/novas/portifolio/area_geral02.jpeg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>Nova</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
          @include('layouts.links')
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

  @include('layouts.sub_footer')
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  @include('layouts.scripts_rodape') 

</body>

</html>