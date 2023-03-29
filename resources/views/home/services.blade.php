<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.header_scripts',['titulo'=>'Serviços'])
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/enfermaria011.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Serviços</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Serviços</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Services Section ======= -->
    @include('layouts.servicos')
        <!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    @include('layouts.service_card')
    <!-- End Services Cards Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.testemunhos')
    <!-- End Testimonials Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   @include('layouts.footer')
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  @include('layouts.scripts_rodape') 

</body>
@include('admin.layouts.login')
</html>