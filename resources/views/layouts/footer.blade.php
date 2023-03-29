<footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          @include('layouts.crisalida_rodape')   
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
  </footer>