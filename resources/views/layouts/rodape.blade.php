<div class="footer-content">
      <div class="container">
      <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
           @include('layouts.crisalida_rodape')
          <div class="social-links d-flex  mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          
          <div class="col-lg-2 col-6 footer-links">
            @include('layouts.links')
          </div>

          <div class="col-lg-2 col-6 footer-links">
          @include('layouts.servicos_rodape')
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            @include('layouts.contato_rodape')
          </div>
        </div>
      </div>
    </div>

    @include('layouts.sub_footer')
