@extends('layouts.app')


@section('custom_links')

@endsection

@section('custom_css')

@endsection


@section('content')

    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>Descubre la mejor comida de Cádiz</h1>
                        <p>Los mejores restaurantes al mejor precio.</p>
                        <form method="post" action="directorio.html">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Qué estás buscando...">
                                        <i class="icon_search"></i>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control no_border_r" type="text" placeholder="Zona, sector, calle...">
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
                </div>
                <!-- /row -->
            </div>
        </div>
    </div>
    <!-- /hero_single -->

    <div class="bg_gray">
        <div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>¿Qué te antoja hoy?</h2>
                <p>Te ayudamos a elegir según tu gusto</p>
            </div>
            <!-- /main_title -->
            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item">
                    <a href="#0">
                        <span>95</span>
                        <i class="icon-food_icon_fish"></i>
                        <h3>Pescados</h3>
                        <small>Precio reg: €25</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>41</span>
                        <i class="icon-food_icon_chicken"></i>
                        <h3>Carnes</h3>
                        <small>Precio reg: €22</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>78</span>
                        <i class="icon-food_icon_vegetarian"></i>
                        <h3>Vegetariano</h3>
                        <small>Precio reg: €22</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_cake_2"></i>
                        <h3>Pastelería</h3>
                        <small>Precio reg: €15</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>98</span>
                        <i class="icon-food_icon_pizza"></i>
                        <h3>Italiano</h3>
                        <small>Precio reg: €18</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>87</span>
                        <i class="icon-food_icon_sushi"></i>
                        <h3>Sushi</h3>
                        <small>Precio reg: €30</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>96</span>
                        <i class="icon-food_icon_burgher"></i>
                        <h3>Comida Rápida</h3>
                        <small>Precio reg: €12</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_chinese"></i>
                        <h3>Chino</h3>
                        <small>Precio reg: €24</small>
                    </a>
                </div>
                <div class="item">
                    <a href="#0">
                        <span>65</span>
                        <i class="icon-food_icon_burrito"></i>
                        <h3>Mexicano</h3>
                        <small>Precio reg: €18</small>
                    </a>
                </div>
            </div>
            <!-- /carousel -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bg_gray -->

    <div class="container margin_60_40">
        <div class="main_title">
            <span><em></em></span>
            <h2>Tendencias y promociones</h2>
            <p>Aprovecha estas ofertas irresistbles.</p>
            <a href="#0">Ver todos</a>
        </div>

        <div class="owl-carousel owl-theme carousel_4">
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="{{ asset('img/lazy-placeholder.png') }}" data-src="{{ asset('plantilla/img/places/bienfrito-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Pescados</small>
                            <div class="item_title">
                                <h3>Bienfrito</h3>
                                <small>Calle San Francisco, 6</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-40%</span>
                        <img src="{{ asset('plantilla/img/lazy-placeholder.png') }}" data-src="{{ asset('plantilla/img/places/pandoro-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Pescados</small>
                            <div class="item_title">
                                <h3>Pandoro Cádiz</h3>
                                <small>Calle Zorrilla, 1</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>9.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="{{ asset('plantillaimg/lazy-placeholder.png') }}" data-src="{{ asset('img/places/el-fogon-de-mariana-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Carnes</small>
                            <div class="item_title">
                                <h3>El Fogon de Mariana Brasil</h3>
                                <small>Calle Brasil</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>7.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-25%</span>
                        <img src="{{ asset('plantilla/img/lazy-placeholder.png') }}" data-src="{{ asset('plantilla/img/places/osare-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Vegetariano</small>
                            <div class="item_title">
                                <h3>Osare<h3>
                                <small>Calle Rosario</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>9.5</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="{{ asset('img/lazy-placeholder.png') }}" data-src="{{ asset('img/places/ventorillo-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Pescados</small>
                            <div class="item_title">
                                <h3>Ventorrillo - El Chato</h3>
                                <small>Carretera de Cortadura</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>7.0</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-15%</span>
                        <img src="{{ asset('plantilla/img/lazy-placeholder.png') }}" data-src="{{ asset('plantilla/img/places/arrebol-min.jpg') }}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Carnes</small>
                            <div class="item_title">
                                <h3>Arrebol</h3>
                                <small>Calle Sta. Teresa de Jesús, 23</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_open">Abierto</span></li>
                        <li>
                            <div class="score"><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="strip">
                    <figure>
                        <span class="ribbon off">-30%</span>
                        <img src="{{asset('plantilla/img/lazy-placeholder.png')}}" data-src="{{ asset('plantilla/img/places/el-gato-jazz-min.jpg')}}" class="owl-lazy" alt="">
                        <a href="detail-restaurant.html" class="strip_info">
                            <small>Postres</small>
                            <div class="item_title">
                                <h3>El Gato Jazz Cádiz</h3>
                                <small>Calle Obispo Cerero, 1</small>
                            </div>
                        </a>
                    </figure>
                    <ul>
                        <li><span class="loc_closed">Cerrado</span></li>
                        <li>
                            <div class="score"><strong>8.9</strong></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /carousel -->

        <!-- /row -->
        <p class="text-center d-block d-md-block d-lg-none"><a href="grid-listing-filterscol.html" class="btn_1">Ver todos</a></p>
        <!-- /button visibile on tablet/mobile only -->
    </div>
    <!-- /container -->


    <div class="call_section lazy" data-bg="url(plantilla/img/bg_call_section.jpg)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow">
                @guest
                    <div class="box_1">
                        <h3>¿Eres dueño de un lugar?</h3>
                        <p>Únete gratis a nuestro directorio para aumentar la visibilidad de tu restaurante y alcanzar a más clientes que amarán tu restaurante.</p>
                        <a href="{{ route('register') }}" class="btn_1">Unirme ahora</a>
                    </div>
                @endguest
            </div>
        </div>
    </div>

   <!--/call_section-->


@endsection


@section('custom_js')

@endsection
