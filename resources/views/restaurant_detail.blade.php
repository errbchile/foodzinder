<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Foogra - Discover & Book the best restaurants at the best price">
	<meta name="author" content="Ansonika">
	<title>Mamma Pronto - Food Zinder</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />

	<!-- Favicons-->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" >
	<link rel="apple-touch-icon" type="image/x-icon" href="{{asset('plantilla/img/apple-touch-icon-57x57-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('plantilla/img/apple-touch-icon-72x72-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('plantilla/img/apple-touch-icon-114x114-precomposed.png')}}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('plantilla/img/apple-touch-icon-144x144-precomposed.png')}}">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{asset('plantilla/css/bootstrap_customized.min.css')}}" rel="stylesheet">
	<link href="{{asset('plantilla/css/style.css')}}" rel="stylesheet">

	
	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('plantilla/css/custom.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
	
	<!-- SPECIFIC CSS -->
	<link href="{{asset('plantilla/css/detail-page.css')}}" rel="stylesheet">
	<style>
		html {
			scroll-behavior: smooth;
		}
	</style>
</head>

<body>
	<header class="header_in clearfix is_sticky">
      <div id="logo">
         <a href="{{url('/')}}">
            <img src="{{asset('plantilla/img/logo.svg')}}" width="200" height="50" alt="">
         </a>
      </div>
      <div class="row justify-content-center text-center">
         <div class="col-xl-8 col-lg-10 col-md-8">						
            <form id="form_principal" method="post" action="{{ route('directorio') }}" class="form-busqueda">
               <input name="_method" type="hidden" value="get">
               <div class="row no-gutters custom-search-input">
                  <div class="col-lg-6">
                     <div class="form-group">
                        <input name="palabra_busqueda" class="form-control" type="text" placeholder="Tipo de cocina, nombre del restaurante...">
                        <i class="icon_search"></i>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="form-group">
                     <input name="ciudad" class="form-control no_border_r" type="text" placeholder="Ciudad">
                        <i class="icon_pin_alt"></i>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <input type="submit" value="Buscar">
                  </div>
               </div>
               <!-- /row -->
            </form>
			</div>
         <nav class="main-menu">
            <div id="header_menu">
               <a href="#0" class="open_close">
                  <i class="icon_close"></i><span>Menu</span>
               </a>
               <a href="{{ url('/') }}"><img src="{{asset('plantilla/img/logo.svg')}}" width="140" height="35" alt=""></a>
            </div>
            @guest
               <ul>
                  <li><a href="{{ route('login') }}" class="ico-login">Iniciar Sesión / Registrarse</a></li>
               </ul>
            @else
               @if(Auth::User()->profile === 1)
                  <div class="dropdown show">
                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Administrador
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item" href="{{ route('restaurant.create') }}">Registrar Restaurante</a>
                     <a class="dropdown-item" href="{{ route('directorio') }}">Listar Restaurantes</a>
                     <a class="dropdown-item" href="{{ route('users.index') }}">Listar Usuarios</a>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                     </div>
                  </div>
               @else
                  <div class="dropdown show">
                     <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                     </a>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item" href="{{ route('directorio') }}">Listar Restaurantes</a>
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                     </div>
                  </div>
               @endif

            @endguest
         </nav>
      </div>
   </header>
<!-- /header -->
	
	<main class="bg_gray pattern add_top_menu_90">

		<div class="hero_in detail_page background-image" data-background="url({{asset('plantilla/img/header-detail-page-min.jpg')}})">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container full-width">
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<h1>{{$restaurant->nombre}}</h1>
								{{$restaurant->direccion}} - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Ver en mapa</a>
							</div>
							<div class="col-xl-8 col-lg-7 col-md-6">
								<div class="buttons clearfix">
									<a id="agregar_a_favoritos" onclick="guardarEnLocalStorage()" data-restaurantid="{{ $restaurant->id }}" href="#0" class="btn_hero wishlist"><i class="icon_heart"></i>Agregar a favoritos</a>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /main_info -->
				</div>
			</div>
		</div>
		<!--/hero_in-->
		
		<div class="container margin_detail full-width">
		    <div class="row">
		        <div class="col-lg-12">
		            <div class="tabs_detail">
		                <ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a id="tab-A" href="#entrantes" class="nav-link active">Entrantes</a>
								</li>
								<li class="nav-item">
									<a id="tab-B" href="#sopas" class="nav-link">Sopas</a>
								</li>
								<li class="nav-item">
									<a id="tab-C" href="#fritos" class="nav-link">Fritos</a>
								</li>
								<li class="nav-item">
									<a id="tab-D" href="#carnes" class="nav-link">Carnes</a>
								</li>
								<li class="nav-item">
									<a id="tab-E" href="#pescado" class="nav-link">Pescado</a>
								</li>
								<li class="nav-item">
									<a id="tab-F" href="#pastas" class="nav-link">Pastas</a>
								</li>
								<li class="nav-item">
									<a id="tab-G" href="#postres" class="nav-link">Postres</a>
								</li>
								<li class="nav-item">
									<a id="tab-H" href="#bebidas" class="nav-link">Bebidas</a>
								</li>
		                </ul>

		                <div class="tab-content" role="tablist">
		                    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
		                        <div class="card-header" role="tab" id="heading-A">
		                            <h5>
		                                <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
		                                    Platos
		                                </a>
		                            </h5>
		                        </div>
		                        <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
		                            <div class="card-body info_content">
		                            	<div class="main_title" id="entrantes">
											<span><em></em></span>
											<h2>Entrantes</h2>
										</div>
										
											<div class="row">
												@if ($entrantes)
													@foreach ($entrantes as $entrante)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $entrante->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $entrante->nombre }}</h3>
																			<span>{{ $entrante->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}

											<div class="main_title add_top_30" id="sopas">
												<span><em></em></span>
												<h2>Sopas</h2>
											</div>
	
											<div class="row">
												@if ($sopas)
													@foreach ($sopas as $sopa)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $sopa->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $sopa->nombre }}</h3>
																			<span>{{ $sopa->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}
											
											<div class="main_title add_top_30" id="fritos">
												<span><em></em></span>
												<h2>Fritos</h2>
											</div>
	
											<div class="row">
												@if ($fritos)
													@foreach ($fritos as $frito)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $frito->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $frito->nombre }}</h3>
																			<span>{{ $frito->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}

											<div class="main_title add_top_30" id="carnes">
												<span><em></em></span>
												<h2>Carnes</h2>
											</div>
	
											<div class="row">
												@if ($carnes)
													@foreach ($carnes as $carne)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $carne->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $carne->nombre }}</h3>
																			<span>{{ $carne->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}

											<div class="main_title add_top_30" id="pescado">
												<span><em></em></span>
												<h2>Pescado</h2>
											</div>
	
											<div class="row">
												@if ($pescados)
													@foreach ($pescados as $pescado)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $pescado->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $pescado->nombre }}</h3>
																			<span>{{ $pescado->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}

											<div class="main_title add_top_30" id="pastas">
												<span><em></em></span>
												<h2>Pastas</h2>
											</div>
	
											<div class="row">
												@if ($pastas)
													@foreach ($pastas as $pasta)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $pasta->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $pasta->nombre }}</h3>
																			<span>{{ $pasta->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}
												
											<div class="main_title add_top_30" id="postres">
												<span><em></em></span>
												<h2>Postres</h2>
											</div>
	
											<div class="row">
												@if ($postres)
													@foreach ($postres as $postres)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $postres->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $postres->nombre }}</h3>
																			<span>{{ $postres->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}

											<div class="main_title add_top_30" id="bebidas">
												<span><em></em></span>
												<h2>Bebidas</h2>
											</div>
	
										
											<div class="row">
												@if ($bebidas)
													@foreach ($bebidas as $bebida)
														<div class="col-md-4">
															<div class="item">
																<div class="strip">
																	<a href="#" class="strip_info">
																		<img src="{{ $bebida->imagen }}" class="owl-lazy plate-100" alt="">
																		<div class="item_title_ind">
																			<h3>{{ $bebida->nombre }}</h3>
																			<span>{{ $bebida->precio }}€</span>
																		</div>
																	</a>
																</div>
															</div>
														</div>
													@endforeach
												@endif
											</div>{{-- end row --}}
										
											
										</div>
									</div>
								</div>
		                    <!-- /tab -->

		                   
		                </div>
		                <!-- /tab-content -->
		            </div>
		            <!-- /tabs_detail -->
		        </div>
		        <!-- /col -->

		        

		    </div>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 footer">
					<div class="follow_us">
						<ul>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/facebook_icon.svg')}}" alt="" class="lazy"></a></li>
							<li><a href="#0"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="{{asset('plantilla/img/instagram_icon.svg')}}" alt="" class="lazy"></a></li>
						</ul>
					</div>
					<ul class="additional_links">
						<li><a href="#0">Términos y condiciones</a></li>
						<li><a href="#0">Políticas de privacidad</a></li>
						<li><span>2020 © Foond Zinder</span></li>
					</ul>	
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 data-target="#collapse_3">Contáctanos</h3>
					<div class="collapse dont-collapse-sm contacts" id="collapse_3">
						<ul>
							<li><i class="icon_house_alt"></i>La Cocotera Coworking<br>San Rosendo N° 12<br>Tarifa, Cádiz - España</li>
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
						
					</div>
				</div>
			</div>
			<!-- /row-->
			<hr>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div><!-- Back to top button -->
	
	<div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	
	<!-- Sign In Modal -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="modal_header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
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
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center">
					<input type="submit" value="Log In" class="btn_1 full-width mb_5">
					Don’t have an account? <a href="account.html">Sign up</a>
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
    <script src="{{asset('plantilla/js/common_scripts.min.js')}}"></script>
    <script src="{{asset('plantilla/js/common_func.js')}}"></script>
    <script src="{{asset('plantilla/assets/validate.js')}}"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="{{asset('plantilla/js/sticky_sidebar.min.js')}}"></script>
    <script src="{{asset('plantilla/js/specific_detail.js')}}"></script>
	<script src="{{asset('plantilla/js/datepicker.min.js')}}"></script>
	<script src="{{asset('plantilla/js/datepicker_func_1.js')}}"></script>

	<script>
		let agregar_a_favoritos = document.querySelector('#agregar_a_favoritos');
		let restaurantId = agregar_a_favoritos.dataset.restaurantid;

		// buscamos el item en local storage:
		let favorito = localStorage.getItem(`restaurantid${restaurantId}`);
		if (!favorito) {
			// no existe en local storage
			localStorage.setItem(`restaurantid${restaurantId}`, 'unliked');
		} else {
			revisarLocalStorage();
		}

		function guardarEnLocalStorage(){
			if (agregar_a_favoritos.classList.contains('liked')) {
				localStorage.setItem(`restaurantid${restaurantId}`, 'unliked');
			} else {
				localStorage.setItem(`restaurantid${restaurantId}`, 'liked');
			}
		}

		function revisarLocalStorage(){
			if (favorito == 'liked') {
				agregar_a_favoritos.classList.add('liked');
			} else {
				agregar_a_favoritos.classList.remove('liked');
			}
		}

	</script>

</body>
</html>