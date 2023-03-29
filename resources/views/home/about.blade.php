<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Sobre Nós'])
</head>


<body class="page-about">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">
  
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset("assets/img/novas/auditorio_reuniao.jpeg")}}');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>{{$parametros["titulo_about"]}}</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Sobre Nós</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4" data-aos="fade-up">
          <div class="col-lg-4">
            <img src="{{asset('assets/img/novas/area_geral031.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8">
            <div class="content ps-lg-5">
              <h3>Atuamos a 2 anos auxiliando na reabilitação de dependentes químicos </h3>
              <p>
                 O dependente precisa notar que ele é amado e que existem pessoas que se importam com ele, especialmente se ele já estiver em processo de recuperação.
                 Procuramos apoiar o dependente durante seu processo de abstinência, pois, após o fim dessa fase complicada, há grandes 
                 chances dele se recuperar. Apesar de ser um processo trabalhoso, vencer o vício é totalmente possível.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i>As drogas não são você, são apenas uma parte de sua vida que pode deixar para trás – Autor desconhecido;</li>
                <li><i class="bi bi-check-circle-fill"></i>As pessoas vêm e me falam: “Você não vai conseguir. E então eu vou lá e surpreendo elas. E quer saber uma coisa? Não existe nada melhor do que isso</li>
                <li><i class="bi bi-check-circle-fill"></i>A verdade é que você não vai conseguir seguir em frente se não tirar os olhos do retrovisor. Mire pra frente, e siga em frente!</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Por que Nos Escolher</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
           
          <div class="col-xl-5 img-bg" style="background-image: url('{{asset("assets/img/novas/foto_about.png")}}')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Possuímos Almoço Variável</h3>
                    <h4 class="mb-3">Cardápio Variado Todos os Dias.</h4>
                    <p>Todos os Dias uma Refeição diferenciada. O nosso menu inclui 04 refeições: Café da Manhã, Almoço, Lanche da Tarde e Janta. Sempre variando seus Conteúdos </p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Reuniões Terapêuticas</h3>
                    <h4 class="mb-3">Todos os dias os nossos "acolhidos" sao submetidos a reuniões terapêuticas</h4>
                    <p>Todos os dias os acolhidos participam de Reuniões Terapêuticas que abordam temas relacionados a depencia química e alcolismo. Bem como temas relacionados a sintomas, programas de prevenção a recaída e outros afins</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Reuniões com Assistente Social</h3>
                    <h4 class="mb-3">01 (uma) vez por semana temos reuniões com o nosso profissional de Assistências Social.</h4>
                    <p>Temas pautados relacionados a defesa e garantia dos direitos sociais para todo(a)s). A(O) profissional viabiliza a melhoria das condições de vida de usuários/as no enfrentamento de desigualdades e acesso às políticas sociais, econômicas, ambientais e culturais</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Espiritualidade Ecumênica</h3>
                    <h4 class="mb-3">Cultos Ecumênicos</h4>
                    <p>São realizadas reuniões ecumênicas com os acolhidos diariamente, de forma que possam aproximar-se do poder superior da forma que cada um entende e compreende.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    
    <!-- ======= Call To Action Section ======= -->
    <!-- <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3>Ut fugiat aliquam aut non</h3>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    <!-- End Call To Action Section -->

    <!-- ======= Team Section ======= -->
    @include('layouts.equipe')
    <!-- End Team Section -->

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