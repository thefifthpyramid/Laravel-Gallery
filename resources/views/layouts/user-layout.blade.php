<!DOCTYPE html>
<html lang="en" class="no-js one-page-layout" data-mobile-classic-layout="false" data-classic-layout="false" data-prev-animation="16" data-next-animation="15" data-random-animation="false"><!-- InstanceBegin template="/Templates/layout.dwt" codeOutsideHTMLIsLocked="false" -->
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Empathy - Responsive HTML5 vCard Template">
    <meta name="keywords" content="vcard, html5, portfolio">
    <meta name="author" content="Pixelwars">

    <title>Empathy</title>

    <!-- FAV and TOUCH ICONS -->
    <link rel="shortcut icon" href="{{asset('Them/profile/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('Them/profile/images/ico/apple-touch-icon.png')}}"/>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/bootstrap.min.css')}}">

<!-- delete this tow link after complated all the icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/fonts/fontello/css/fontello.css')}}"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- delete this tow link after complated all the icons -->


    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/js/nprogress/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/js/jquery.magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/js/jquery.uniform/uniform.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/animations.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/align.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Them/profile/css/768.css')}}">

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('Them/css/mycss.css')}}">

    <!-- INITIAL SCRIPTS -->
    <script src="{{asset('Them/profile/js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('Them/profile/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('Them/profile/js/modernizr.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="{{asset('Them/profile/js/ie.js')}}"></script>
    <![endif]-->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
    <!-- InstanceEndEditable -->
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/map.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/controls.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/50/10/intl/fr_ALL/onion.js"></script>
</head>

<body>
<!-- PAGE -->
<div id="page" class="hfeed site">
    <!-- HEADER -->
    <header id="masthead" class="header" role="banner">
        <a class="menu-toggle toggle-link"></a>
        <h1 class="site-title mobile-title">{{Auth::user()->name}}</h1>
        <!-- header-wrap -->
        <div class="header-wrap">
            <img src="{{asset('Them/profile/images/site/avatar.jpg')}}" alt="avatar">
            <h1 class="site-title">{{Auth::user()->name}}</h1>
            <!-- NAV MENU -->
            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                <div class="nav-menu">
                    <ul>
                        <!-- InstanceBeginEditable name="Menu-Content" -->
                        <li>
                            <a href="#/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                        </li>
                        <li>
                            <a href="#/about"><i class="fa fa-user-circle-o" aria-hidden="true"></i>About Me</a>
                        </li>
                        <li>
                            <a href="#/resume"><i class="fa fa-address-card-o" aria-hidden="true"></i>Resume</a>
                        </li>
                        <li>
                            <a href="#/galleryImage"><i class="fa fa-camera-retro" aria-hidden="true"></i>Images</a>
                        </li>
                        <li>
                            <a href="#/blog"><i class="fa fa-folder-open-o" aria-hidden="true"></i>Blog</a>
                        </li>
                        <li>
                            <a href="#/contact"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
                        </li>
                        @if(Auth::user()->gallery <= '0')
                            <li>
                                <a href="#/myGallery"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Create gallery</a>
                            </li>
                        @else
                            <li>
                                <a href="#/EditMyGallery"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit gallery</a>
                            </li>
                            <li>
                                <a href="#/createPhotos"><i class="fa fa-picture-o" aria-hidden="true"></i>Create Photos</a>
                            </li>
                        @endif
                        <!-- InstanceEndEditable -->
                    </ul>
                </div>
            </nav>
            <!-- NAV MENU -->
            <!-- SEARCH -->
            <div class="header-search">
                <form role="search" method="get" id="search-form" action="#">
                    <input type="text" value="" name="s" id="search" placeholder="enter word">
                    <input type="submit" id="search-submit" title="Search" value="→">
                </form>
            </div>
            <!-- SEARCH -->

            <!-- header-bottom -->
            <div class="header-bottom">

                <!-- SOCIAL -->
                <ul class="social">
                    <li>
                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <!-- SOCIAL -->

                <!-- copy-text -->
                <div class="copy-text">
                    <p>&copy; 2015 Pixelwars</p>
                </div>
                <!-- copy-text -->

            </div>
            <!-- header-bottom -->
        </div>
        <!-- header-wrap -->
    </header>
    <!-- HEADER -->
<!-- .site-main -->
    <div id="main" class="site-main">

    <!-- Content -->
        @yield('content')
    <!-- Content -->

    </div>
    <!-- .site-main -->

</div>
<!-- PAGE -->
<!-- InstanceBeginEditable name="Body-End-Content" -->

<!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
<div class="p-overlay"></div>
<div class="p-overlay"></div>

<!-- ALERT : used for contact form mail delivery alert -->
<div class="site-alert animated"></div>
<!-- InstanceEndEditable -->

<!-- SCRIPTS -->
<script src="{{asset('Them/profile/js/jquery.address-1.5.min.js')}}"></script>
<script src="{{asset('Them/profile/js/nprogress/nprogress.js')}}"></script>
<script src="{{asset('Them/profile/js/fastclick.js')}}"></script>
<script src="{{asset('Them/profile/js/typist.js')}}"></script>
<script src="{{asset('Them/profile/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('Them/profile/js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('Them/profile/js/jquery.fitvids.js')}}"></script>
<script src="{{asset('Them/profile/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('Them/profile/js/jquery.uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('Them/profile/js/jquery.magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('Them/profile/js/socialstream.jquery.js')}}"></script>
<script src="{{asset('Them/profile/js/jarallax.min.js')}}"></script>
<script src="{{asset('Them/profile/js/jarallax-video.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE"></script>-->
<script src="{{asset('Them/profile/js/main.js')}}"></script>
<script src="{{asset('Them/profile/js/myjavascriptcode.js')}}"></script>
</body>
</html>

