<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.header_scripts',['titulo'=>'Sobre Nós'])
</head>

<body class="page-contact">

  <!-- ======= Header ======= -->
  @include("layouts.header")
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('assets/img/contact-header.jpg')}});">
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

          @include('layouts.form_contato')  


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
@include('admin.layouts.login')
</html>
<script>
  $(".loading").css("display","none"); 
  $(".sent-message").css("display","none");
  $('.envia_email').on('click',function(){
        const  form = document.getElementById("formcontact"); 
        if (!form.checkValidity()) {
          $("#formcontact").addClass("was-validated");
           return; 
        } 
        
        $("#formcontact").removeClass("was-validated");
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

  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

</script>  
<style>
.error-message {
    display: none;
    color: #fff;
    background: #df1529;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.sent-message {
    display: none;
    color: #fff;
    background: #059652;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #059652;
    border-top-color: #fff;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

</style>
