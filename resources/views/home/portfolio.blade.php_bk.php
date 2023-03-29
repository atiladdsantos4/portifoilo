<!DOCTYPE html>
<html lang="en">
<?php
  $dir    = 'C:\\Apache24\\htdocs\\projetos\\portifolio\\public\\assets\\img\\portfolio';
  $files1 = scandir($dir);
  
  // foreach(  $files1 as $item ){
  //   $arquivo =  explode( "-", $item);
  //   //echo 'arquivo:'.$arquivo[0];
  //   if( count($arquivo) > 1 ){
  //      print_r($arquivo);
  //   } else {
  //      echo 'Item:'.$item ;
  //   }    
  // }
  //print_r($files1);
  //print_r($files2)

?>
<head>
  @include('layouts.header_scripts',['titulo'=>'Portifólio'])
</head>

<body class="page-portfolio">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/portifolio-header.jpg')}});">
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
            <li data-filter="*" class="filter_active">Tudo</li>
            <li data-filter=".filter-area">Área</li>
            <li data-filter=".filter-product">Refeição</li>
            <li data-filter=".filter-espaco">Espaços</li>
            <li data-filter=".filter-reunioes">Reuniões</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
          @foreach( $files1 as $item )  
          @php
            $arquivo =  explode( "-", $item);
            qtde:count($arquivo);
          @endphp
          @if( count($arquivo) > 1)
            <div class="col-lg-4 col-md-6 portfolio-item filter_active {{$arquivo[2].'.'.$arquivo[3]}}">
                <img src="{{asset('assets/img/portfolio/'.$item)}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{$arquivo[0]}}</h4>
                  <p>{{$arquivo[1]}}</p>
                  <a href="{{asset('assets/img/portfolio/'.$item)}}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
            </div><!-- End Portfolio Item -->
          @endif
          @endforeach
          </div><!-- End Portfolio Container -->
        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
   @include('layouts.rodape')
</footer><!-- End Footer -->
  <!-- End Footer -->
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>
  @include('layouts.scripts_rodape') 

</body>
@include('admin.layouts.login')
</html>