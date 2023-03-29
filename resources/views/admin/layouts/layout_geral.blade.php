<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.layouts.scripts_header',["titulo"=>'DashBoard - NiceAdmin Bootstrap Template'])
</head>

<body>

  @include('admin.layouts.header')
  @include('admin.layouts.aside')
  <main id="main" class="main">
  @yield('content')
  </main><!-- End #main -->
  @include('admin.layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('admin.layouts.scripts_footer')
  <div style="position:fixed;left:50%;top:50%;max-width:500px;margin: 0 auto;" id="alert_id_admin" class="alert alert-primary alert-dismissible fade" role="alert"> 
      <span id="alert_text">A simple primary alert—check it out!</span>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

</body>
</html>