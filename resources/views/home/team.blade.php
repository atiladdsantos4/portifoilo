<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Nosso Time'])
</head>

<body class="page-team">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->
  
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/team-header.jpg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Equipe</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'contact'])}}">Home</a></li>
          <li>Equipe</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    @include('layouts.equipe')
    <!-- ======= End Team Section ======= -->
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