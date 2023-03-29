<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Index'])
</head>


<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
     @include('layouts.img_menu') 
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
       
       <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        
        <h1 class="d-flex align-items-center">{{\App\Models\Params::getTituloSite()}}</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
          @include('layouts.menu')
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 class="main" data-aos="fade-up">Focamos no que interessa</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>De acordo com a definição da Organização Mundial de Saúde, 
              a dependência química é uma doença caracterizada pelo uso 
              descontrolado de uma ou mais substâncias psicoativas, ou seja, 
              que causam mudanças no estado mental da pessoa. 
              Dependência química tem tratamento e controle,  e esse é o nosso foco.</p>
          </blockquote>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('home.geral',[ 'interface'=>'about'])}}" class="btn-get-started">Vamos Iniciar</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Assista o Video</span></a>
          </div>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200" style="color:white;">
            <br>
            "Deus, conceda-me a serenidade
             para aceitar as coisas que não posso modificar,
             a coragem para modificar aquelas que posso
             e a sabedoria para reconhecer a diferença."
          </div>  
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Por que Nos Escolher</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="300">

          <div class="col-xl-5 img-bg" style="background-image: url('{{asset("assets/img/novas/portifolio.jpeg")}}')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Tempo de Atuação</h3>
                    <h4 class="mb-3">Estamos a 2 anos cuidando de Dependentes Químicos e Alcoólatras </h4>
                    <p>Auxiliamos no tratamento de reabilitação de pessoas cujo controle de sua vida
                        foi totalmente conduzido pelo abuso do consumo de álcool e ou drogas.
                        Sabemos que quando se chega ao fundo poço  e total perda de controle é 
                        necessário um isolamento social para blindar a exposição e fechar a compulsão pelo desejo de usar 
                        substãncias químicas.
                    </p>   
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Outras Comorbidades</h3>
                    <h4 class="mb-3">Tratamos também de Comorbidades Leves </h4>
                    <p>Paciêntes com baixo grau de comorbidade psiquiátrica, também são assistidos por nossa equipe, bem como idosos, 
                       cujo convivência familiar tornou-se exaustiva.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Acompanhamento com Profissionais qualificados</h3>
                    <h4 class="mb-3">Possuímos profissionais diversificados.</h4>
                    <p>Para cada área de atuação possuímos um profissonal qualificado para atender seu ente querido.
                  </div>
                </div><!-- End slide item -->

                <!-- <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Necessitatibus suscipit non voluptatem quibusdam</h3>
                    <h4 class="mb-3">Tempora quos est ut quia adipisci ut voluptas. Deleniti laborum soluta nihil est. Eum similique neque autem ut.</h4>
                    <p>Ut rerum et autem vel. Et rerum molestiae aut sit vel incidunt sit at voluptatem. Saepe dolorem et sed voluptate impedit. Ad et qui sint at qui animi animi rerum.</p>
                  </div>
                </div>End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->
    <div class="container" data-aos="fade-up">
      @include('layouts.img_menu')
    </div>
    <!-- ======= Our Services Section ======= -->
    @include('layouts.servicos')
    <!-- End Our Services Section -->


    <!-- ======= Recent Blog Posts Section ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
              <span style="font-size:16px;">Clínica de Reabilitação Crisálida</span>
            </a>
            <p>A 2 anos auxiliando no tratamento de reabilitação de pessoas cujo controle de sua vida
              foi totalmente conduzido pelo abuso do consumo de álcool e ou drogas</p>
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
          @include('layouts.servicos_rodape')
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            @include('layouts.contato_rodape')
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
@include('admin.layouts.login')

</html>