<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Alcoolismo'])
</head>

<body class="page-services">


  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/enfermaria011.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Alcoolismo</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Alcoolismo</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>O que é o Alcoolismo</h2>

                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                            <i style="color:blue;" class="bi bi-forward"></i>Segunda a Organização Mundial da Saúde (OMS), o alcoolismo é uma doença crônica capaz de levar o paciente a outras complicações médicas, como a cirrose e a hepatite.<br><br>
                            <i style="color:blue;" class="bi bi-forward"></i>Para além do uso ocasional de bebidas alcóolicas, o alcoolismo é uma condição em que o indivíduo faz constantemente o uso abusivo e descontrolado desse tipo de bebida.<br><br>
                            <i style="color:blue;" class="bi bi-forward"></i>Aos poucos, o organismo perde a sensibilidade ao álcool, e a pessoa com alcoolismo tem que fazer o uso de quantidades cada vez maior da substância, tornando-se um vício progressivo.<br><br>
                            <i style="color:blue;" class="bi bi-forward"></i>O alcoolismo atrapalha a vida de uma pessoa em diferentes âmbitos e aspectos, afetando, inclusive, seus familiares, amigos e até mesmo colegas de trabalho.<br><br>                            
                            <i style="color:blue;" class="bi bi-forward"></i>A longo prazo, o álcool prejudica todos os órgãos, em especial o fígado, que é responsável pela destruição das substâncias tóxicas ingeridas ou produzidas pelo corpo durante a digestão.<br><br> 
                            <i style="color:blue;" class="bi bi-forward"></i>Dessa forma, havendo uma grande dosagem de álcool no sangue, o fígado sofre uma sobrecarga para metabolizá-lo. O álcool no organismo causa inflamações, que podem ser:<br>
                            <br>
                            <ul style="line-height:80%;list-style-type: none;">
                            <li align="left"><i class="lista bi bi-check-circle-fill"></i> gastrite, quando ocorre no estômago;</li><br>
                            <li align="left"><i class="lista bi bi-check-circle-fill"></i> hepatite alcoólica, no fígado;</li><br>
                            <li align="left"><i class="lista bi bi-check-circle-fill"></i> pancreatite, no pâncreas;</li><br>
                            <li align="left"><i class="lista bi bi-check-circle-fill"></i> neurite, nos nervos.</li>
                            </ul> 
                           </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>          
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Sintomas do Alcoolismo</h2>

        <div class="row gy-5">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: red;"></i></div>
            <div>  
              <h4 class="title"><a href="#" class="stretched-link">Solidão</a></h4>
              <p class="description">Pessoa beber sozinha e fora de situações sociais.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Afastamento</a></h4>
              <p class="description">Continuam a beber mesmo quando percebem que estão se afastando da família e dos amigos</div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Agressividade</a></h4>
              <p class="description">Demonstrar agressividade quando confrontados.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Perda de Controle</a></h4>
              <p class="description">Ter dificuldade para parar de beber mesmo estando embriagada. </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Saúde Mental Comprometida</a></h4>
              <p class="description">Apresentar paranoia e alucinações.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #224DB9;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Não Aceitação</a></h4>
              <p class="description">Tentar esconder as evidências do consumo de bebidas alcoólicas</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #224DB9;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Comprometimento da Saúde Física</a></h4>
              <p class="description">Apresentar sinais preocupantes, como perda de memória, tremores, insônia e falta de apetite</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    @include('layouts.service_card')
    <!-- End Services Cards Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('layouts.testemunhos')
    <!-- End Testimonials Section -->

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

</html>