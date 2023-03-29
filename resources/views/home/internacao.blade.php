<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Internacao'])
</head>

<body class="page-services">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/novas/enfermaria011.jpeg')}});">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Quando devo internar?</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Quando devo internar?</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Necessidade de Internação</h2>

                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Escolher um modelo de tratamento para dependência química nem sempre é uma tarefa fácil. Muitas vezes o dependente recusa o modelo de tratamento proposto ou simplesmente não enxerga a necessidade de um. No entanto, a internação do dependente químico pode ser necessária.(por: marceloparazzi - https://www.marceloparazzi.com.br/)<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>O descontrole no consumo do que causa a adicção gera um impulso muito forte e faz com que a pessoa seja compelida a suprir suas necessidades. Essa é uma situação que gera implicações nos âmbitos pessoal, afetivo, acadêmico e profissional. Geralmente, a dependência está associada a ansiedade, dor, solidão e sentimentos de culpa.<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Por tal razão, não basta apenas o entendimento do que é a adicção, mas saber identificar os sinais que sugerem a necessidade de internação é fundamental.<br><br>
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
          <h2>Identificar Sintomas Abaixo</h2>

        <div class="row gy-5">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: red;"></i></div>
            <div>  
              <h4 class="title"><a href="#" class="stretched-link">Agressividade;</a></h4>
              <p class="cardtext description">Outro sinal de que é necessária a internação do dependente químico é o fato de que ele se torna mais agressivo.

Devido ao uso da droga e tentando mascarar isso, ele fica irritado ao ser questionado. Também pode ficar irritado caso queiram dar conselhos.
O usuário também costuma ficar agressivo quando não tem acesso à droga e passa a entrar em  estado de abstinência. Nesse momento ele é capaz de fazer qualquer coisa para obtê-la.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Tendência a isolamento;</a></h4>
              <p class="cardtext description">O adicto entra em sua zona de total egoncentrismo vivenciando uma vida en torno de seu vicio. Vive para seu vicio e se vicia para viver.</div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Dificuldade para lidar com abstinência</a></h4>
              <p class="cardtext description">Perde a capacidade de lidar com o controle de suas vontades, e em total abistinência e compulsão aberta torna-se um alvo fácil para o uso sem a vontade própria</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Desinteresse pela escola ou pelo trabalho</a></h4>
              <p class="cardtext description">Tudo que está fora do alcance da sua substância ou habito de preferência fica em segundo plano, até o total descaso e desinteresse.              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Pequenos furtos em casa para manter a adicção</a></h4>
              <p class="cardtext description">Cegado pela sua abistinência, não encontra qualquer barreira para sustentar seu vício. E ainda cedo, efetua pequenos furtos, podendo chegar a consequências mais desastrosas num futuro não tão distante.
                É importante ressaltar que a adicção é um doença progressiva que se apresenta de forma cada vez mais abrupta a cada recaída.
              </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: orange;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Falta de responsabilidade com os compromissos</a></h4>
              <p class="cardtext description">Nada é mais importante que o seu vício e respectiva utilização de sua substância ou hábito de preferência.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-chat-left" style="color: #6f42c1"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Negação ou dificuldade de falar sobre o problema</a></h4>
              <p class="cardtext description">Na dependência química a negação é um dos principais obstáculos no processo de aceitação da doença, pois não são todos os dependentes que reconhecem que tem problemas com o consumo de álcool ou outras drogas. 
               A negação decorre de fracasso ou perda e é um dos maiores obstáculos iniciais a serem superados em qualquer tratamento, isso porque nem todos os indivíduos que fazem uso e abuso de substâncias psicoativas reconhecem que têm um problema
              </p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    @include('layouts.service_card')
    <!-- End Services Cards Section -->
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