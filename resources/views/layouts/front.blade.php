<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Gihro</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		{{ Html::style('assets-front/vendor/bootstrap/css/bootstrap.min.css') }}
		{{ Html::style('assets-front/vendor/font-awesome/css/font-awesome.min.css') }}
		{{ Html::style('assets-front/vendor/simple-line-icons/css/simple-line-icons.min.css') }}
		{{ Html::style('assets-front/vendor/owl.carousel/assets/owl.carousel.min.css') }}
		{{ Html::style('assets-front/vendor/owl.carousel/assets/owl.theme.default.min.css') }}
		{{ Html::style('assets-front/vendor/magnific-popup/magnific-popup.min.css') }}

		<!-- Theme CSS -->
		{{ Html::style('assets-front/css/theme.min.css') }}
		{{ Html::style('assets-front/css/theme-elements.min.css') }}
		{{ Html::style('assets-front/css/theme-animate.min.css') }}

		<!-- Current Page CSS -->
		@yield('csss')

		<!-- Skin CSS -->
		{{ Html::style('assets-front/css/skins/default.min.css') }}

		<!-- Theme Custom CSS -->
		{{ Html::style('assets-front/css/theme-custom.min.css') }}
		{{ Html::style('assets-front/css/custom-mediaquery.css') }}

		<!-- Head Libs -->
		{{ Html::script('assets-front/vendor/modernizr/modernizr.min.js') }}

	</head>
	<body>
		<div class="body">
      <header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
  				<div class="header-body">
  					<div class="header-container container">
  						<div class="header-row">
  							<div class="header-column">
  								<div class="header-logo">
  									<a href="index.html">
  										<img alt="gihro" data-sticky-width="255" data-sticky-height="97" data-sticky-top="33" src="images/logo.png">
  									</a>
  								</div>
  							</div>
  							<div class="header-column">
  								<div class="header-row">
  									<div class="header-search hidden-xs">
  										<form id="searchForm" action="page-search-results.html" method="get">
  											<div class="input-group">
  												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
  												<span class="input-group-btn">
  													<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
  												</span>
  											</div>
  										</form>
  									</div>
  									<nav class="header-nav-top">
  										<ul class="nav nav-pills">
  											<li>
  												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
  											</li>
  										</ul>
  									</nav>
  								</div>
  								<div class="header-row">
  									<div class="header-nav">
  										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
  											<i class="fa fa-bars"></i>
  										</button>
  										<ul class="header-social-icons social-icons hidden-xs">
  											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
  											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
  											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
  										</ul>
  										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
  											<nav>
  												<ul class="nav nav-pills" id="mainNav">
  													<li><a href="{{ URL::to('/') }}">Inicio</a></li>
                            <li><a href="{{ URL::to('precios') }}">Precios</a></li>
                            <li><a href="overview.html">Blog</a></li>
                            <li><a href="{{ URL::to('contacto') }}">Contacto</a></li>
                            <li><a href="{{ URL::to('panel') }}">Acceso</a></li>
  												</ul>
  											</nav>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</header>
        @yield('content')
        <footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-md-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Manténgase informado de nuestras características del producto siempre en evolución y tecnología. Ingrese su dirección de e-mail y suscríbete a nuestro boletín.</p>

								<div class="alert alert-success hidden" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>

								<div class="alert alert-danger hidden" id="newsletterError"></div>

								<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-default" type="submit">OK!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-3">
              <h4>Menu</h4>
        			<ul style="margin: 0 0 0 -38px; list-style: none">
                <li><a href="">Inicio</a></li>
                <li><a href="">Precios</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Contacto</a></li>
              </ul>
						</div>
						<div class="col-md-4">
							<div class="contact-details">
								<h4>Contactanos</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-responsive" src="assets-front/img/logo-footer.png">
								</a>
							</div>
							<div class="col-md-7">
								<p>© Gihro 2016. All Rights Reserved.</p>
							</div>
							<div class="col-md-4">
								<nav id="sub-menu">
									<ul>
                    <li><a href="{{ URL::to('aviso-legal') }}">Aviso Legal</a></li>
										<li><a href="{{ URL::to('preguntas-frecuentes') }}">FAQ's</a></li>
										<li><a href="{{ URL::to('contacto') }}">Contacto</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
	</div>
  <!-- Vendor -->
	{{ Html::script('assets-front/vendor/jquery/jquery.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.appear/jquery.appear.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.easing/jquery.easing.min.js') }}
	{{ Html::script('assets-front/vendor/jquery-cookie/jquery-cookie.min.js') }}
	{{ Html::script('assets-front/vendor/bootstrap/js/bootstrap.min.js') }}
	{{ Html::script('assets-front/vendor/common/common.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.validation/jquery.validation.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.gmap/jquery.gmap.min.js') }}
	{{ Html::script('assets-front/vendor/jquery.lazyload/jquery.lazyload.min.js') }}
	{{ Html::script('assets-front/vendor/isotope/jquery.isotope.min.js') }}
	{{ Html::script('assets-front/vendor/owl.carousel/owl.carousel.min.js') }}
	{{ Html::script('assets-front/vendor/magnific-popup/jquery.magnific-popup.min.js') }}
	{{ Html::script('assets-front/vendor/vide/vide.min.js') }}

	<!-- Theme Base, Components and Settings -->
	{{ Html::script('assets-front/js/theme.min.js') }}

	<!-- Current Page Vendor and Views -->
	@yield('javascripts')

	<!-- Theme Custom -->
	{{ Html::script('assets-front/js/custom.js') }}

	<!-- Theme Initialization Files -->
	{{ Html::script('assets-front/js/theme.init.min.js') }}

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
