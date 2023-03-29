<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'O que?'])
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/enfermaria011.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Adicção</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Adicção</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>O que é o Adicção</h2>

                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Exemplificados pela compulsão alimentar, condição que torna a pessoa refém dos alimentos, 
                              as adicções são desequilíbrios cerebrais associados à dependência de alguma substância ou atividade. 
                              Mesmo que esse comportamento resulte em consequências nocivas, a pessoa não consegue se libertar facilmente, 
                              pois as adicções são atitudes patológicas de difícil domínio.<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i> A sua origem têm relação direta com os traumas e que é importante focar o tratamento nos fatores causais. A atenção a esse detalhe pode ajudar a perceber, de forma mais concreta, a natureza do problema. Desse modo, é possível não só compreender o que é a adicção, como relativizar as principais causas e tratá-las com intervenções mais eficazes. Contudo, existem aspectos biopsicossociais como origem da adicção, em que 33,3% é fator biológico, 33,3% fatores psicológicos (entre eles, traumas) e 33,3% social (influência do meio).<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Ainda que a manifestação da adicção seja peculiar em cada pessoa, conhecer sua origem é primordial para ajudar a quem está dominado por ele. Independentemente do grau de dificuldade do indivíduo, o ideal é buscar a humanização do atendimento e do tratamento.<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Nos adultos, a negligência com o autocuidado pode levar ao consumo inveterado de álcool ou drogas. Em adolescentes e jovens, a adicção pode ser ignorada ou nem mesmo percebida pelos pais. A ideia não é culpabilizar, mas alertar para os sinais que podem indicar a origem da adicção em grupos mais vulneráveis, e compreender as motivações que geram essa situação.<br><br>                            
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Destacamos algumas condições associadas à origem das adicções:<br>
                            <br>
                            <ul style="line-height:150%;list-style-type: none;">
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;solidão;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;crises depressivas;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;sentimentos de frustração;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;perda do controle emocional;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;conflitos familiares constantes;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;ausência ou falta de atenção dos pais;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;dificuldade para lidar com situações adversas;</li>
                              <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;tentativa de disfarçar a dor com algo prazeroso, mesmo que momentaneamente;</li>                            
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
          <h2>Quais os principais tipos de adicção</h2>

        <div class="row gy-5">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: red;"></i></div>
            <div>  
              <h4 class="title"><a href="#" class="stretched-link">Bebidas alcoólicas</a></h4>
              <p class="cardtext description">O uso abusivo do álcool é uma questão que afeta milhões de pessoas e que pode desencadear diversas enfermidades, inclusive, fatais. A adicção de alcoolismo é caracterizado por um desejo incessante e constante de consumir esse produto. Entre os efeitos da substância, destacam-se a violência, os conflitos familiares/ sociais e outras complicações que surgem como reflexos da dependência.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Tabagismo</a></h4>
              <p class="cardtext description">O hábito de fumar começa de forma inocente, até mesmo, pela observação dos hábitos de amigos ou familiares e, de repente, a adicção se estabelece e faz parte da rotina. Além das implicações sociais, o uso do tabaco está diretamente relacionado a diversos tipos de tumores. Entre os mais perigosos, o câncer de pulmão é o segundo mais comum no país.</div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Drogas ilícitas</a></h4>
              <p class="cardtext description">Entre os entorpecentes mais comuns, destacam-se maconha, cocaína, heroína e o crack, além das drogas sintéticas com alto potencial de dependência, como o ecstasy. O consumo dessas substâncias ilícitas está na lista das principais causadoras de adicção.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Internet</a></h4>
              <p class="cardtext description">Um estudo realizado por uma pesquisadora da Universidade Federal de São Paulo (Unifesp) avaliou 264 jovens entre 13 e 17 anos de idade. A meta era identificar o perfil dos usuários de internet e das mais variadas mídias digitais, e relacionar as consequências dessa adicção sobre a qualidade de vida deles.<br> 
              Um estudo realizado por uma pesquisadora da Universidade Federal de São Paulo (Unifesp) avaliou 264 jovens entre 13 e 17 anos de idade. A meta era identificar o perfil dos usuários de internet e das mais variadas mídias digitais, e relacionar as consequências dessa adicção sobre a qualidade de vida deles. 
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Redes sociais</a></h4>
              <p class="cardtext description">A relação entre redes sociais e saúde mental se tornou uma das grandes preocupações da saúde pública. Buscar formas de estimular o uso saudável de celulares e de smartphones, sem que isso afete a estabilidade psicológica, é um dos desafios da atualidade. Além de outros prejuízos, a adicção em redes sociais provoca transtornos depressivos, ao tornar os usuários reféns desses aplicativos.</p>
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