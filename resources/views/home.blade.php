<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ==============================================
	TITLE AND BASIC META TAGS
	=============================================== -->
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- ==============================================
	MOBILE METAS
	=============================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ==============================================
	CSS
	=============================================== -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/supersized.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/supersized.shutter.css" type="text/css" />
    <link rel="stylesheet" href="/css/elegant.css" type="text/css" />
    <link rel="stylesheet" href="/css/component.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/responsive.css" type="text/css" media="screen" />
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- ==============================================
	FONTS
	=============================================== -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <!-- ==============================================
	JS
	=============================================== -->
    <script type="text/javascript" src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/device.min.js"></script>

    <!-- ==============================================
	FAVICONS
	=============================================== -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/favicon/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/favicon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/favicon/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="/img/">
    <link rel="shortcut icon" href="/img/logoCubatao.png">

</head>

<body>
    @if(Session::has('exito'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('exito') }}
    </div>
    @endif
    <!-- ==============================================
	PRELOADER
	=============================================== -->
    <div id="preloader">
        <div id="loading-animation"></div>
    </div> <!-- End Preloader -->

    <!-- ==============================================
	BACKGROUND COLOR
	=============================================== -->
    <div class="back-color"></div>

    <!-- ==============================================
	HOME
	=============================================== -->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <img src="/img/logo-bmotion-white.png" style="width: 50%; padding-bottom: 3%" alt="">
                    {{--   <h1 class="animate"><a href="#" title="Rosa - Responsive Coming Soon Template">¡PROXIMAMENTE!</a>
                    </h1> --}}
                    <h2 style="font-size: 1.7rem !important;" class="animate"><a href="#" title="Rosa - Responsive Coming Soon Template">NOS ESTAMOS
                            REINVENTANDO PARA TI.</a></h2>
                    <h2 style="font-size: 1.7rem !important;" class="animate"><a href="#" title="Rosa - Responsive Coming Soon Template">PRONTO VOLVEREMOS A
                            ESTAR EN LINEA</a></h2>
                    {{--   <p class="intro animate">Nuestro sitio web esta construcción. Suscríbete y sé de los primeros en
                        disfrutar a CUBATAO.COM</p> --}}
                    {{-- <div class="timerContent animate">
                        <div class="timer">
                            <ul>
                                <li><span class="days"></span>
                                    <p class="daysText">Días</p>
                                </li>
                                <li><span class="hours"></span>
                                    <p class="hoursText">Horas</p>
                                </li>
                                <li><span class="minutes"></span>
                                    <p class="minutesText">Minutos</p>
                                </li>
                                <li><span class="seconds"></span>
                                    <p class="secondsText">Segundos</p>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <section class="menu animate">

                        <!-- ==============================================
						ABOUT US
						=============================================== -->
                        {{-- <div class="morph-button morph-button-overlay morph-button-fixed">
                            <a href="#" class="button">
                                <h3>Nosotros</h3><span>Quienes somos</span>
                            </a>
                            <div class="morph-content">
                                <div class="button-close">
                                    <span class="button-close-icon" aria-hidden="true" data-icon="&#x51;"></span>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="content-style-overlay">
                                                <h1>Nosotros</h1>
                                                <div class="about-us-content">
                                                    <div class="col-md-12">
                                                        <h3>Lorem ipsum dolor sit amet</h3>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                                            turpis lectus, vulputate sed convallis et, consequat nec
                                                            magna. Nunc nec odio sed enim sagittis egestas. Donec non
                                                            quam at metus lacinia accumsan.</p>
                                                        <h3>Aenean mattis ultrices eleifend</h3>
                                                        <p>Quisque tincidunt justo nec arcu luctus, eu ullamcorper
                                                            turpis gravida. Aliquam mattis tortor ut odio aliquam, et
                                                            auctor leo viverra. Pellentesque accumsan massa sed tortor
                                                            interdum lacinia. Duis vestibulum tincidunt eros at
                                                            sollicitudin. Donec auctor tempus metus eget elementum.
                                                            Suspendisse potenti. </p>
                                                        <ul class="info">
                                                            <li><span aria-hidden="true" data-icon="&#xe01d;"></span>106 Rue du Mail, Paris, Francia</li>
															<li><span aria-hidden="true" data-icon="&#xe00b;"></span>(000) 123 456</li>
                                                            <li><span aria-hidden="true"
                                                                    data-icon="&#xe0e3;"></span>www.bmotion.co</li>
                                                            <li><span aria-hidden="true" data-icon="&#xe010;"></span><a
                                                                    href="mailto:email@yourwebsite.com">info@bmotion.co</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
														<div class="member">
															<img class="img-responsive member-image" src="http://placehold.it/500x500" alt="Member image">
															<div class="member-info">
																<h3>John Doe</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed turpis lectus, vulputate et.</p>
																<ul>
																	<li><a href="#" title="Facebook profile"><span aria-hidden="true" data-icon="&#xe093;"></span></a></li>
																	<li><a href="#" title="Twitter profile"><span aria-hidden="true" data-icon="&#xe094;"></span></a></li>
																	<li><a href="#" title="Instagram profile"><span aria-hidden="true" data-icon="&#xe09a;"></span></a></li>
																</ul>
															</div>
														</div>
														<div class="member">
															<img class="img-responsive member-image" src="http://placehold.it/500x500" alt="Member image">
															<div class="member-info">
																<h3>John Doe</h3>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed turpis lectus, vulputate et.</p>
																<ul>
																	<li><a href="#" title="Facebook profile"><span aria-hidden="true" data-icon="&#xe093;"></span></a></li>
																	<li><a href="#" title="Twitter profile"><span aria-hidden="true" data-icon="&#xe094;"></span></a></li>
																	<li><a href="#" title="Dribble profile"><span aria-hidden="true" data-icon="&#xe09b;"></span></a></li>
																	<li><a href="#" title="Pinterest profile"><span aria-hidden="true" data-icon="&#xe095;"></span></a></li>
																</ul>
															</div>
														</div>
														<div class="tweets">
															<div class="tweets-image">
																<img src="img/tweets-back.png" alt="Tweets back" />
															</div>
															<ul id="twitter-feed" class="list-tweets"></ul>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- morph-button -->

                       {{--  <!-- ==============================================
						NEWSLETTER FORM
						=============================================== -->
                        <div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
                            <a href="#" class="button">
                                <h3>Newsletter</h3><span>Boletin informativo</span>
                            </a>
                            <div class="morph-content" style="height: 20rem !important;">
                                <div>
                                    <div class="content-style-form content-style-form-2">
                                        <div class="button-close">
                                            <span class="button-close-icon" aria-hidden="true"
                                                data-icon="&#x51;"></span>
                                        </div>
                                        <h2>Newsletter</h2>

                                        <form action="{{ route('newsletter') }}" method="POST">
                                            @csrf
                                            <h3>Email</h3>
                                            <p><input type="text" name="email" placeholder="Correo electrónico..." />
                                            </p>
                                            <p><button type="submit" class="btn-submit">ENVIAR</button></p>
                                        </form>
                                        <div class="success-message"></div>
						                    <div class="error-message"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
 --}}
                        <!-- ==============================================
						CONTACT FORM
						=============================================== -->
                        <div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
                            <a href="#" class="button">
                                <h3>Contacto</h3><span>Escribenos!</span>
                            </a>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-2">
                                        <div class="button-close">
                                            <span class="button-close-icon" aria-hidden="true"
                                                data-icon="&#x51;"></span>
                                        </div>
                                        <h2>Contacto</h2>
                                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3>Nombre <span style="color: #E04131">*</span></h3>
                        <p><input type="text" name="name" placeholder="Nombre" required /></p>
                        <h3>Télefono <span style="color: #E04131">*</span></h3>
                        <p><input type="text" name="phone" placeholder="Teléfono" required /></p>
                        <h3>Email <span style="color: #E04131">*</span></h3>
                        <p><input type="email" name="email" placeholder="Email" required /></p>
                        <h3>Mensaje (Opcional)</h3>
                        <p><textarea name="message" cols="35" rows="5" placeholder="Mensaje"></textarea></p>
                        <p><button type="submit" class="btn-submit">Enviar</button></p>
                        </form>
                        <div class="success-message-2"></div>
                        <div class="error-message-2"></div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{--  <ul class="footer-social animate">
                        <li><a href="https://www.facebook.com/cubataotiendas/" target="_blank" class="facebook" title="Facebook" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Facebook" aria-hidden="true" data-icon="&#xe093;"></a></li>
                         <li><a href="#" target="_blank" class="twitter" title="Twitter" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Twitter" aria-hidden="true" data-icon="&#xe094;"></a></li>
                         <li><a href="#" target="_blank" class="skype" title="Skype" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Skype" aria-hidden="true" data-icon="&#xe0a2;"></a></li>
                         <li><a href="#" target="_blank" class="linkedin" title="Linkedin" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Linkedin" aria-hidden="true" data-icon="&#xe09d;"></a></li>
                         <li><a href="#" target="_blank" class="pinterest" title="Pinterest" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Pinterest" aria-hidden="true" data-icon="&#xe095;"></a></li>
                        <li><a href="https://www.instagram.com/cubataotiendas/?igshid=1via5pcxldv12" target="_blank" class="instagram" title="Instagram" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Instagram" aria-hidden="true" data-icon="&#xe09a;"></a></li>
                         <li><a href="#" target="_blank" class="googleplus" title="Google Plus" data-gal="tooltip"
                                data-placement="bottom" data-original-title="Google Plus" aria-hidden="true"
                                data-icon="&#xe096;"></a></li>
                         <li><a href="#" target="_blank" class="dribbble" title="Dribbble" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Dribbble" aria-hidden="true" data-icon="&#xe09b;"></a></li>
                         <li><a href="#" target="_blank" class="vimeo" title="Vimeo" data-gal="tooltip" data-placement="bottom"
                                data-original-title="Vimeo" aria-hidden="true" data-icon="&#xe09c;"></a></li>
                    </ul> --}}

    </div>
    </div>

    </div>
    </section>

    <!-- BOOTSTRAP CORE JAVASCRIPT
    ================================================== -->
    <!-- PLACED AT THE END OF THE DOCUMENT SO THE PAGES LOAD FASTER -->
    <script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript" src="/js/supersized.shutter.min.js"></script>
    <script type="text/javascript" src="/js/jquery.countdown.js"></script>
    <script type="text/javascript" src="/js/classie.js"></script>
    <script type="text/javascript" src="/js/uiMorphingButton_fixed.js"></script>
    <script type="text/javascript" src="/js/twitterfeed.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/js/images.js"></script>

</body>

</html>
