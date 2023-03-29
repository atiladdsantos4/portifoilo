<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Tipo'])
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/enfermaria011.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Tipos de Internação</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Tipos de Internação</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Sobre as Internações</h2>
                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Existem três tipos de internação que podem ser empregados no tratamento de um dependente químico: internação voluntária, involuntária e compulsória. Elas são reguladas pela Lei Federal 10.216/2001.<br><br>
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
          <h2>O descritivo de cada uma e em que perfil se adequa o seu ente querido</h2>
        <div class="row gy-5">
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-medical-fill" style="color: red;"></i></div>
                <div>  
                <h4 class="title"><a href="#" class="stretched-link">Internação voluntária</a></h4>
                <p class="cardtext description">A pessoa que solicita voluntariamente a própria internação, ou que a consente, deve assinar, no momento da admissão, uma declaração de que optou por esse regime de tratamento. O término da internação se dá por solicitação escrita do paciente ou por determinação do médico responsável. Uma internação voluntária pode, contudo, se transformar em involuntária e o paciente, então, não poderá sair do estabelecimento sem a prévia autorização.</p>
                </div>
            </div>
            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-medical-fill" style="color: #15a04a;"></i></div>
                <div>
                <h4 class="title"><a href="#" class="stretched-link">Internação involuntária</a></h4>
                <p class="cardtext description">É a que ocorre sem o consentimento do paciente e a pedido de terceiros. Geralmente, são os familiares que solicitam a internação do paciente, mas é possível que o pedido venha de outras fontes. O pedido tem que ser feito por escrito e aceito pelo médico psiquiatra.
A lei determina que, nesses casos, os responsáveis técnicos do estabelecimento de saúde têm prazo de 72 horas para informar ao Ministério Público do estado sobre a internação e os motivos dela. O objetivo é evitar a possibilidade de esse tipo de internação ser utilizado para a cárcere privado.</div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-medical-fill" style="color: #d90769;"></i></div>
                <div>
                <h4 class="title"><a href="#" class="stretched-link">Internação compulsória</a></h4>
                <p class="cardtext description">Nesse caso não é necessária a autorização familiar. A internação compulsória é sempre determinada pelo juiz competente, depois de pedido formal, feito por um médico, atestando que a pessoa não tem domínio sobre a própria condição psicológica e física. O juiz levará em conta o laudo médico especializado, as condições de segurança do estabelecimento, quanto à salvaguarda do paciente, dos demais internados e funcionários</p>
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
    <!-- ======= End Testimonials Section ======= -->

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