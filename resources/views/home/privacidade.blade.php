<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clínica Crisálida - Co-Dependência</title>
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

<body class="page-services">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
  @include('layouts.img_menu')
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('home.geral',[ 'interface'=>'index'])}}" class="logo d-flex align-items-center">
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/novas/enfermaria011.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2 style="font-size:20px !important;">Política de Privacidade</h2>
        <ol>
          <li><a href="{{route('home.geral',[ 'interface'=>'index'])}}">Home</a></li>
          <li>Política de Privacidade</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <div class="section-header">
                <h2>Política de Privacidade</h2>
                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>As imagens do utilizadas pelo site são relativas ao ambiente real, no entanto, por tratar-se de dependentes químicos e ou alcoólatras em processo de recuperação, os rostos são omitidos no sentido de preservar o anonimato e a não exposição social.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>A sua privacidade é importante para nós. É política do Crisálida Centro de Reabilitação respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Crisálida Centro de Reabilitação, e outros sites que possuímos e operamos.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas políticas de privacidade.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.<br><br>
                                <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto conosco.<br><br>
                                <ul style="line-height:150%;list-style-type: none;">
                                        <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;O serviço Google AdSense que usamos para veicular publicidade usa um cookie DoubleClick para veicular anúncios mais relevantes em toda a Web e limitar o número de vezes que um determinado anúncio é exibido para você.</li>
                                        <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;Para mais informações sobre o Google AdSense, consulte as FAQs oficiais sobre privacidade do Google AdSense.</li>
                                        <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;Utilizamos anúncios para compensar os custos de funcionamento deste site e fornecer financiamento para futuros desenvolvimentos. Os cookies de publicidade comportamental usados ​​por este site foram projetados para garantir que você forneça os anúncios mais relevantes sempre que possível, rastreando anonimamente seus interesses e apresentando coisas semelhantes que possam ser do seu interesse.</li>
                                        <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;Vários parceiros anunciam em nosso nome e os cookies de rastreamento de afiliados simplesmente nos permitem ver se nossos clientes acessaram o site através de um dos sites de nossos parceiros, para que possamos creditá-los adequadamente e, quando aplicável, permitir que nossos parceiros afiliados ofereçam qualquer promoção que pode fornecê-lo para fazer uma compra.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
    </div>
    <div class="section-header">
                <h2>Compromisso do Usuário</h2>
                <div class="row " data-aos="fade-up">
                    <div class="col-lg-12">
                        <div class="content ps-lg-5">
                            <p align="left">
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>A sua privacidade é importante para nós. É política do Crisálida Centro de Reabilitação respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site Crisálida Centro de Reabilitação, e outros sites que possuímos e operamos.<br><br>
                            <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o atila santos oferece no site e com caráter enunciativo, mas não limitativo:<br><br>
                            <ul style="line-height:150%;list-style-type: none;">
                                <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;</li>
                                <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, pix bet365 ou azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                                <li align="left"><i class="lista bi bi-check-circle-fill"></i>&nbsp;C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do , de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
                            </ul> 
                            </p>
                        </div>
                    </div>
                </div>
    </div>
    <div class="section-header">
         <h2>Mais informações</h2>
         <div class="row " data-aos="fade-up">
                <div class="col-lg-12">
                    <div class="content ps-lg-5">
                        <p align="left">
                           <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.<br><br>
                           <i style="color:blue;margin-right:5px;" class="bi bi-forward"></i>Esta política é efetiva a partir de 23 February 2023 19:30<br><br>
                        </p>
                     </div>
               </div>
         </div>
    </div>
    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tipos de Internação</h2>
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
    <section id="services-cards" class="services-cards">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/novas/area_geral01_corte.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Espaço Amplo com Visual Campestre.</h4>
                    <p>Temos uma área ampla para circulação dos acolhidos. Espaço que permite uma mera reflexão sobre uma nova esperança de vida. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/novas/quarto10.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Quarto 10 "diferenciado".</h4>
                    <p>Temos acomodações comuns porém, oferecemos um quarto diferenciado, com TV cabo, Frigobar a maior comodidade. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/novas/area_jogos.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Salão de Jogos</h4>
                    <p>Área de Lazer com Pebolim(Totó), Sinuca, Baralho,Dominó, Xadrez, entre outros. Objetivo de ocupar a mente com hábitos saudáves e sadios. Sempre fazemos campeonatos internos com intuito de motivar a comunhão entre os acolhidos. </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/novas/piscina01.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Piscina</h4>
                    <p>Possuímos piscina utilizada aos fins de semana pelos acolhidos e para atividades e dinâmicas educacionais.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/tv01.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">TV a Cabo</h4>
                    <p>Possuímos Tv a Cabo para os horários reservados ao lazer de nossos acolhidos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/novas/cantina05.jpeg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Cantina</h4>
                    <p>Possuímos Cantina com Produtos Variáveis e Preços Acessíveis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Cards Section -->
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