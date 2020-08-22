<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
    <meta name="author" content="Ansonika">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">




    <title>Food Zinder - Restaurantes de Cádiz y España en un solo lugar</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="{{ asset('image/x-icon') }}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('plantilla/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('plantilla/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('plantilla/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('plantilla/css/bootstrap_customized.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plantilla/css/style.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ asset('plantilla/css/home.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM LINKS -->
    @yield('custom_links')

    <!-- YOUR CUSTOM CSS -->
    @yield('custom_css')

</head>

<body>
				
	<header class="header clearfix element_to_stick">
      <div class="container">
         <div id="logo">
            <a href="index.html">
               <img src="{{ asset('plantilla/img/logo.svg') }}" width="140" height="35" alt="" class="logo_normal">
               <img src="{{ asset('plantilla/img/logo_sticky.svg') }}" width="140" height="35" alt="" class="logo_sticky">
            </a>
         </div>
         <ul id="top_menu">
            <li><a href="#sign-in-dialog" id="sign-in" class="login">Inicia Sesión</a></li>
         </ul>   
         <!-- /top_menu -->
         <a href="#0" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
         </a>
         <nav class="main-menu">
            <div id="header_menu">
               <a href="#0" class="open_close">
                  <i class="icon_close"></i><span>Menu</span>
               </a>
               <a href="index.html"><img src="{{ asset('plantilla/img/logo.svg') }}" width="140" height="35" alt=""></a>
            </div>
            <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="directorio.html">Directorio</a></li>
                  <li><a href="submit-restaurant.html">Agregar Restaurant</a></li>
            </ul>
         </nav>
      </div>
	</header>
	<!-- /header -->
	
	<main>
      @yield('content')
	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_1">Enlaces Rápidos</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_1">
						<ul>
							<li><a href="#0">Acerca de</a></li>
							<li><a href="submit-restaurant.html">Agregar restaurante</a></li>
							<li><a href="#0">Ayuda</a></li>
							<li><a href="account.html">Mi Cuenta</a></li>
							<li><a href="#0">Contáctanos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_2">Categorías</h3>
					<div class="collapse dont-collapse-sm links" id="collapse_2">
						<ul>
							<li><a href="directorio.html">Tendencias</a></li>
							<li><a href="directorio.html">Mejor valorados</a></li>
							<li><a href="directorio.html">Mejores precios</a></li>
							<li><a href="directorio.html">Más recientes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_3">Contáctanos</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>Plaza de Mina<br>Cádiz -España</li>
							<li><i class="icon_mobile"></i>+34 604-23-1481</li>
							<li><i class="icon_mail_alt"></i><a href="#0">info@foodzinder.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
						<h3 data-target="#collapse_4">Suscribirme al boletín</h3>
					<div class="collapse dont-collapse-sm" id="collapse_4">
						<div id="newsletter">
							<div id="message-newsletter"></div>
							<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Tu email">
									<button type="submit" id="submit-newsletter"><i class="arrow_carrot-right"></i></button>
								</div>
							</form>
						</div>
						<div class="follow_us">
							<h5>Follow Us</h5>
							<ul>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/twitter_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
								<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/youtube_icon.svg')}}" alt="" class="lazy"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
			<div class="row add_bottom_25">
				<div class="col-lg-6">
					<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/cards_all.svg')}}" alt="" width="198" height="30" class="lazy">
				</div>
				<div class="col-lg-6">
					<ul class="additional_links">
						<li><a href="#0">Términos y condiciones</a></li>
						<li><a href="#0">Políticas de privacidad</a></li>
						<li><span>2020 © Foond Zinder</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Inicia Sesión</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Continuar con Facebook</a>
				<a href="#0" class="social_bt google">Continuar con Google</a>
				<div class="divider"><span>O</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Recuérdame
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Olvidaste tu contraseña?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Iniciar Sesión" class="btn_1 full-width mb_5">
					¿Aún no tienes cuenta? <a href="account.html">Regístrate gratis</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{ asset('plantilla/js/common_scripts.min.js') }}"></script>
    <script src="{{ asset('plantilla/js/common_func.js') }}"></script>
    <script src="{{ asset('plantilla/assets/validate.js') }}"></script>
    @yield('custom_js')
</body>
</html>