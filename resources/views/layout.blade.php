<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oficina SOS Mecânica</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- IMPORTANDO BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  

</head>

<body>

<!-- ======= Header ======= -->

  <nav id="header" class="nav fixed-top navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Oficina SOS Mecânica</a></h1>
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contatos</a></li>
          <a href="{{ route('pessoas.create') }}" type="button" class="login btn btn-success">Cadastrar pessoas</a>
          <a href="{{ route('pessoas.index') }}" type="button" class="login btn btn-success">Listar Pessoas</a>
        </ul>
    </div>
  </nav>

  @yield('content')
  
  <footer id="footer">
    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Oficina SOS Mecânica</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Template base<a href="https://bootstrapmade.com/"> BootstrapMade</a>
      </div>
   </footer>

    </div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><img src="{{ asset('svg/arrow-up.svg') }}"  alt="Logo" /></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>