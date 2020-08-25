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

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            <a href="{{ url('/') }}">
                    <img src="{{asset('plantilla/img/logo.svg')}}" width="140" height="35" alt="" class="logo_normal">
                    <img src="{{asset('plantilla/img/logo_sticky.svg')}}" width="140" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu" class="drop_user">
                <li>
                    @guest
                        <ul id="top_menu">
									<li><a href="{{ route('login') }}" class="login">Login</a></li>
                            {{-- <li><a href="#sign-in-dialog" id="sign-in" class="login">Inicia Sesión</a></li> --}}
                        </ul> 
                    @else
                        <div class="dropdown user clearfix">
                            <a href="#" data-toggle="dropdown">
                                <figure><img src="{{asset('plantilla/img/avatar1.jpg')}}" alt=""></figure>{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-menu-content">
                                    <ul>
                                        <li><a href="#0"><i class="icon_cog"></i>Mi Perfil</a></li>
                                        {{-- <li><a href="#0"><i class="icon_document"></i>Bookings</a></li> --}}
                                        <li><a href="#0"><i class="icon_heart"></i>Favoritos</a></li>
													 <li>
															<a class="dropdown-item" href="{{ route('logout') }}"
																onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
																<i class="icon_key"></i>Cerrar Sesión
															</a>
															<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																@csrf
															</form>
													</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endguest
                    <!-- /dropdown -->
                </li>
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
                    <a href="{{url('/')}}"><img src="{{asset('plantilla/img/logo.svg')}}" width="140" height="35" alt=""></a>
                </div>
                <ul>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Inicio</a>
                        <ul>
                            <li><a href="{{asset('plantilla/index.html')}}">Default</a></li>
                            <li><a href="{{asset('plantilla/index-2.html')}}">Video Background</a></li>
                            <li><a href="{{asset('plantilla/index-3.html')}}">Slider</a></li>
                            <li><a href="{{asset('plantilla/index-5.html')}}">Address Autocomplete</a></li>
                            <li><a href="{{asset('plantilla/index-6.html')}}">Search Version 2</a></li>
                            <li><a href="{{asset('plantilla/index-7.html')}}">Delivery/Takeaway version</a></li>
                            <li><a href="{{asset('plantilla/modal-advertise.html')}}">Modal Advertise</a></li>
                            <li><a href="{{asset('plantilla/modal-newsletter.html')}}">Modal Newsletter</a></li>
                            <li><a href="{{asset('plantilla/index-4.html')}}">GDPR Cookie Bar EU Law</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#0" class="show-submenu">Directorio</a>
                        <ul>
                            <li class="third-level"><a href="#0">List pages</a>
                                <ul>
                                    <li><a href="grid-listing-filterscol.html">List default</a></li>
                                    <li><a href="grid-listing-filterscol-map.html">List with map</a></li>
                                    <li><a href="listing-map.html">List side map</a></li>
                                    <li><a href="grid-listing-filterscol-full-width.html">List full width</a></li>
                                    <li><a href="grid-listing-filterscol-full-masonry.html">List Masonry Filter</a></li>
                                    <li><a href="grid-listing-filterscol-delivery.html">List Delivery/Takeaway</a></li>
                                </ul>
                            </li>
                            <li class="third-level"><a href="#0">Detail pages</a>
                                <ul>
                                    <li><a href="detail-restaurant.html">Detail page 1</a></li>
                                    <li><a href="detail-restaurant-2.html">Detail page 2</a></li>
                                    <li><a href="detail-restaurant-3.html">Mobile Fixed Booking</a></li>
                                    <li><a href="detail-restaurant-delivery.html">Delivery/Takeaway</a></li>
                                    <li><a href="detail-restaurant-4.html">Detail Menu Thumbs</a></li>
                                    <li><a href="detail-restaurant-5.html">Detail Contact Form</a></li>
                                    <li><a href="detail-restaurant-6.html">Detail Instagram Feed</a></li>
                                </ul>
                            </li>
                            <li class="third-level"><a href="#0">OpenStreetMap</a>
                                <ul>
                                    <li><a href="grid-listing-filterscol-map-openstreetmap.html">List with map</a></li>
                                    <li><a href="listing-map-openstreetmap.html">List side map</a></li>
                                    <li><a href="grid-listing-filterscol-full-width-openstreetmap.html">List full width</a></li>
                                    <li><a href="grid-listing-filterscol-full-masonry-openstreetmap.html">List Masonry Filter</a></li>
                                </ul>
                            </li>
                            <li><a href="submit-restaurant.html">Submit Restaurant</a></li>
                            <li><a href="submit-rider.html">Submit Rider</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="booking.html">Booking</a></li>
                            <li><a href="confirm.html">Confirm Booking</a></li>
                            <li><a href="confirm-delivery.html">Confirm Order</a></li>
                            <li><a href="booking-delivery-2.html">Order Delivery/Takeaway</a></li>
                            <li><a href="booking-delivery.html">Order Delivery/Takeaway 2</a></li>
                            <li><a href="admin_section/index.html" target="_blank">Admin Section</a></li>
                        </ul>
                    </li>
                    <li><a href="{{asset('plantilla/submit-restaurant.html')}}">Agregar Restaurant</a></li>
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
							<li><a href="{{asset('plantilla/submit-restaurant.html')}}">Agregar restaurante</a></li>
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
							<li><a href="{{asset('plantilla/directorio.html')}}">Tendencias</a></li>
							<li><a href="{{asset('plantilla/directorio.html')}}">Mejor valorados</a></li>
							<li><a href="{{asset('plantilla/directorio.html')}}">Mejores precios</a></li>
							<li><a href="{{asset('plantilla/directorio.html')}}">Más recientes</a></li>
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
							<form method="post" action="{{asset('plantilla/assets/newsletter.php')}}" name="newsletter_form" id="newsletter_form">
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
						<li><span>{{ date('Y') }} © Foond Zinder</span></li>
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
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Continuar con Facebook</a>
				<a href="#0" class="social_bt google">Continuar con Google</a>
				<div class="divider"><span>O</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email" required>
					<i class="icon_mail_alt"></i>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
			  		@enderror
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" value="" required>
					<i class="icon_lock_alt"></i>
					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
			  		@enderror
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Recuérdame
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a></div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn_1 full-width mb_5"> Iniciar Sesión</button>
					{{-- <input type="submit" value="Iniciar Sesión" class="btn_1 full-width mb_5"> --}}
					¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center">
						<a href="{{ route('password.request') }}">
							<input type="submit" value="Reset Password" class="btn_1">
						</a>
					</div>
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