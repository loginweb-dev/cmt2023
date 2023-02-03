<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	@yield('mimeta')

  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	@yield('meta')
  	<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  	<link rel="stylesheet" href="{{ asset('css/socialfloating.css') }}" />
	 <link rel="stylesheet" href="{{ asset('css/socialSharing.css') }}">
	<style>
#Demo1 a {
  display: block;
  font-size: 18px;
  padding: 5px;
}
	</style>
  @yield('css')
</head>

<body>
	
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <a href="/"><img src="https://cmt.gob.bo//storage/navbar.jpg" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span>Mi Concejo</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="/resena-historica">Reseña Historica</a></li>
              <li><a class="nav-link scrollto" href="/estructura-del-concejo">Estructura del Consejo</a></li>
              <li><a class="nav-link scrollto" href="/reglamento-general">Reglamento General</a></li>              
              <li><a class="nav-link scrollto" href="https://mail.zoho.com/zm">Correo Institucional</a></li>
              <li><a class="nav-link scrollto" href="/admin">Gestion Documental</a></li>
              <li><a class="nav-link scrollto" href="/teletrabajo">Sesion en Vivo</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/biblioteca-legislativa">Gaceta Oficial</a></li>
          <li><a class="nav-link scrollto " href="/convocatorias-publicas">Convocatorias</a></li>
          <li><a class="nav-link scrollto" href="/blog">Noticias </a> </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>


      <div class="header-social-links d-flex align-items-center">
       		 | <div id="Demo1" class="align-items-right justify-content-right"></div>
    <!--
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    -->
      </div>
    </div>

  </header>

  @yield('content')
  
  <footer id="footer">
    <div class="container">
      <div class="credits">
        Powered by <a href="#">LoginWeb @2022</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="{{ asset('js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>

  	<script src="{{ asset('js/jquery.socialfloating.js') }}"></script>
	<script src="{{ asset('js/socialSharing.js') }}"></script>

  <script>
	    $('#Demo1').socialSharingPlugin({
        url: window.location.href,
        title: $('meta[property="og:title"]').attr('content'),
        description: $('meta[property="og:description"]').attr('content'),
        img: $('meta[property="og:image"]').attr('content'),
        enable: ['copy', 'facebook', 'twitter', 'pinterest', 'linkedin']
    });
  </script>
    @yield('javascript')
</body>

</html>