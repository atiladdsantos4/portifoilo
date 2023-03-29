<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clínica Crisálida - Contato</title>
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

<body class="page-contact">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    @include('layouts.img_menu') 
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Contato</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Contato</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">

        <div class="row gy-4 d-flex justify-content-end">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Localização:</h4>
                <p>{{$parametros["endereco"]}}</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>clinicacrisalida2022@outlook.com</p>
              </div>
            </div><!-- End Info Item -->

            <!-- <div class="info-item d-flex d-md-none d-xl-none d-lg-none d-sm-block ">
              <i class="text-success bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h4>WhatsApp:</h4>
                <p><a href="https://api.whatsapp.com/send/?phone=5571999872426&text&type=phone_number&app_absent=0">+55 71 996795851</a></p>
              </div>
            </div>End Info Item

            <div class="info-item d-flex d-none d-md-block d-lg-block">
              <i class="text-success bi bi-whatsapp flex-shrink-0"></i>
              <div>
                <h4>WhatsApp:</h4>
                <p><a target="_blank" href="https://web.whatsapp.com/send?phone=+5571999872426&text=Olá">+55 71 996795851</a></p>
              </div>
            </div>End Info Item  -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Ligue:</h4>
                <p>71-996795851</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <form action="{{route('home.mail')}}" method="post" role="form" class="php-email-form">
              @csrf 
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nome" class="form-control" id="nome" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Seu E-mail foi envado com sucesso</div>
              </div>
              <div class="text-center"><button class="envia_email" type="button">Enviar Mensagem</button></div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
   @include('layouts.rodape')
</footer><!-- End Footer -->
  <!-- End Footer -->
  
  <div id="preloader"></div>
  @include('layouts.scripts_rodape') 

</body>

</html>
<script>
  
  $('.envia_email').on('click',function(){
        $(".loading").css("display","block");
        var dadosForm = [];
        dadosForm.push(
          {'name': '_token','value': $("input[name=_token]").val()},
          {'name': 'email','value': $('#email').val()},
          {'name': 'assunto','value': $('#subject').val()},
          {'name': 'mensagem','value': $('#mensagem').val()},
          {'name': 'nome','value':$('#nome').val()}  
          );
          $.post("{{route('home.mail')}}", dadosForm, function(resultado) {
            }, 'json')
          .done(function(resultado) {
                if(resultado.valid){
                    $(".loading").css("display","none"); 
                    $(".sent-message").css("display","block");
                    setTimeout(function() { 
                      $(".sent-message").css("display","none");
                    }, 3000); 
                } else {
                    $(".error-message").html(resultado.mensagem);
                    $(".error-message").css("display","block");
                    setTimeout(function() { 
                      $(".error-message").css("display","none");
                    }, 3000);          
                }
          })
          .always(function(resultado) {
             null;
          });
  });

</script>  
