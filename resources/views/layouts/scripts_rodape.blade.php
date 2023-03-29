  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("assets/vendor/glightbox/js/glightbox.min.js")}}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("assets/js/jquery-3.5.1.js")}}"></script>
  

  <!-- Template Main JS File -->
  <!-- Passando Parametros para o Script -->
  <!-- Ver Conteúdo do main.js -->
  <script src="{{asset("assets/js/main.js")}}" 
     link="{{route('home.geral',[ 'interface'=>'contact'])}}"
  >
  </script>
  <script 
    src="{{asset("assets/js/site.js")}}" link_gerencia = "{{route('admin.autentica')}}"
  >
  </script>
  