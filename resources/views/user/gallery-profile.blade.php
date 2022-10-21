@extends('../layouts/user-layout')
@section('content')
<!-- PAGE -->
<div id="page" class="hfeed site">
    <!-- HEADER -->
    <header id="masthead" class="header" role="banner">
        <a class="menu-toggle toggle-link"></a>
        <h1 class="site-title mobile-title">JACK ALLEN</h1>
        <!-- header-wrap -->
        <div class="header-wrap">
            <img src="{{asset('Them/profile/images/site/avatar.jpg')}}" alt="avatar">
            <h1 class="site-title">JACK ALLEN</h1>
            <!-- NAV MENU -->
            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                <div class="nav-menu">
                    <ul>
                        <!-- InstanceBeginEditable name="Menu-Content" -->
                        <li>
                            <a href="#/home">
                                <i class="pe-7s-home"></i>Home</a>
                        </li>
                        <li>
                            <a href="#/about">
                                <i class="pe-7s-user"></i>About Me</a>
                        </li>
                        <li>
                            <a href="#/resume">
                                <i class="pe-7s-id"></i>Resume</a>
                        </li>
                        <li>
                            <a href="#/portfolio">
                                <i class="pe-7s-glasses"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="#/blog">
                                <i class="pe-7s-notebook"></i>Blog</a>
                        </li>
                        <li>
                            <a href="#/contact">
                                <i class="pe-7s-call"></i>Contact</a>
                        </li>
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
                        <a class="facebook" href="#"></a>
                    </li>
                    <li>
                        <a class="twitter" href="#"></a>
                    </li>
                    <li>
                        <a class="linkedin" href="#"></a>
                    </li>
                    <li>
                        <a class="instagram" href="#"></a>
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

        <!-- InstanceBeginEditable name="Page-Content" -->
        <!-- PAGE : HOME -->
        <section id="home" class="pt-page page-layout light-text home-section has-bg-img" style="background-image:url({{asset('Them/profile/images/site/home.png)')}}">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <h4>Hi, I am</h4>
                    <h2>Jack Allen</h2>
                    <h4>I am <strong id="typist-element" data-typist="a blogger., a wordpress lover., an adventurer.">a writer.</strong></h4>

                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : HOME -->
        <!-- PAGE : ABOUT -->
        <section id="about" class="pt-page page-layout">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="pe-7s-user"></i>about me
                    </h1>
                    <!-- page-title -->

                    <!-- SERVICES -->
                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>services</i>
                        </h2>
                    </div>
                    <!-- section-title -->

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-sm-6 col-md-3">

                            <!-- service -->
                            <div class="service">
                                <!--<i class="pe-7s-glasses"></i>-->
                                <img src="{{asset('Them/profile/images/site/icon-01.png')}}" alt="image"/>
                                <h4>Copywriter</h4>
                                <p>I design super cool websites. It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <!-- service -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-sm-6 col-md-3">

                            <!-- service -->
                            <div class="service">
                                <!--<i class="pe-7s-joy"></i>-->
                                <img src="{{asset('Them/profile/images/site/icon-02.png')}}" alt="image"/>
                                <h4>Game Dev</h4>
                                <p>I can design beautiful type faces for both digital and print media. It is a long established fact that a reader will be distracted.</p>
                            </div>
                            <!-- service -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-sm-6 col-md-3">

                            <!-- service -->
                            <div class="service">
                                <!--<i class="pe-7s-rocket"></i>-->
                                <img src="{{asset('Them/profile/images/site/icon-03.png')}}" alt="image"/>
                                <h4>Management</h4>
                                <p>I write about web design. It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <!-- service -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-sm-6 col-md-3">

                            <!-- service -->
                            <div class="service">
                                <!--<i class="pe-7s-scissors"></i>-->
                                <img src="images/site/icon-04.png" alt="image"/>
                                <h4>Problem Solver</h4>
                                <p>I have strong project management skills. It is a long established fact that a reader will be distracted by the readable content.</p>
                            </div>
                            <!-- service -->

                        </div>
                        <!-- col -->

                    </div>
                    <!-- row -->
                    <!-- SERVICES -->

                    <!-- PROCESS -->

                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>work procces</i>
                        </h2>
                    </div>
                    <!-- section-title -->


                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-chat"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                <h4>DISCOVER</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-light"></i>
                                <h4>IDEA</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-vector"></i>
                                <h4>DESIGN</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-network"></i>
                                <h4>DEVELOP</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-browser"></i>
                                <h4>TEST</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-sm-2">

                            <!-- process -->
                            <div class="process">
                                <i class="pe-7s-rocket"></i>
                                <h4>LAUNCH</h4>
                            </div>
                            <!-- process -->

                        </div>
                        <!-- col -->

                    </div>
                    <!-- row -->
                    <!-- PROCESS -->





                    <!-- CLIENTS -->

                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>clients</i>
                        </h2>
                    </div>
                    <!-- section-title -->

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-01.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-02.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-03.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-04.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-05.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-4 col-md-2">

                            <!-- client -->
                            <div class="client">
                                <a href="#">
                                    <img src="{{asset('them/profile/images/clients/client-06.png')}}" alt="client">
                                </a>
                            </div>
                            <!-- client -->

                        </div>
                        <!-- col -->

                    </div>
                    <!-- row -->
                    <!-- CLIENTS -->



                    <!-- FUN FACT -->

                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>fun fact</i>
                        </h2>
                    </div>
                    <!-- section-title -->

                    <!-- row -->
                    <div class="row">

                        <!-- col -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-map-2"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                <h4>24 Countries Visited</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-news-paper"></i>
                                <h4>72 Articles Published</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-coffee"></i>
                                <h4>20.000 Cups Of Coffee</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-medal"></i>
                                <h4>12 Awards Won</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- col -->

                    </div>
                    <!-- row -->
                    <!-- FUN FACT -->







                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>other pages</i>
                        </h2>
                    </div>
                    <!-- section-title -->

                    <p class="center">
                        <a class="button" href="404.html">404</a>
                        <a class="button" href="blog.html">Blog</a>
                        <a class="button" href="blog-single.html">Blog Single</a>
                        <a class="button" href="form-elements.html">Form Elements</a>
                        <a class="button" href="grid.html">Grid</a>
                        <a class="button" href="shortcodes.html">Shortcodes</a>
                        <a class="button" href="typography.html">Typography</a>
                    </p>



                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : ABOUT -->





        <!-- PAGE : RESUME -->
        <section id="resume" class="pt-page page-layout">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">


                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="pe-7s-id"></i>resume
                    </h1>
                    <!-- page-title -->


                    <!-- row -->
                    <div class="row">


                        <!-- col -->
                        <div class="col-sm-7">


                            <div class="event">
                                <h2>WORK HISTORY</h2>
                                <p>
                                    <i class="pe-7s-ribbon"></i>
                                    <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                </p>
                            </div>

                            <div class="event">
                                <h3>Dec 2013 - Current</h3>
                                <h4>Front End Web Developer</h4>
                                <h5>Pixelwars Inc.</h5>
                                <p>I currently work for Pixelwars creative studio. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>


                            <div class="event">
                                <h3>Jun 2012 - Dec 2013</h3>
                                <h4>Web Developer</h4>
                                <h5>Google Inc.</h5>
                                <p>I worked as a Web Developer at Google for 3 years. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>

                            <div class="event">
                                <h3>2006</h3>
                                <h4>Exclusive Author</h4>
                                <h5>Envato Inc.</h5>
                                <p>I am an Elite Author at Envato. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>

                            <div class="event">
                                <h2>EDUCATION</h2>
                                <p>
                                    <i class="pe-7s-study"></i>
                                    <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                </p>
                            </div>

                            <div class="event">
                                <h3>2002</h3>
                                <h4>Atom Science</h4>
                                <h5>Stanford University</h5>
                                <p>I studied atomic stuff at Stanford University. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>


                            <div class="event">
                                <h3>2010</h3>
                                <h4>Software Engineering</h4>
                                <h5>Harvard University</h5>
                                <p>I got my Master Degree at Harvard University. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>

                            <div class="event">
                                <h3>2006</h3>
                                <h4>Computer Science</h4>
                                <h5>MIT</h5>
                                <p>I studied Computer Science at MIT. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
                            </div>


                            <p><a href="#" class="button"><i class="pe-7s-download"></i>Download CV</a></p>

                        </div>
                        <!-- col -->

                        <!-- col -->
                        <div class="col-sm-5">

                            <!-- section-title -->
                            <div class="section-title center">
                                <h2>
                                    <i>coding skills</i>
                                </h2>
                            </div>
                            <!-- section-title -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>HTML5</h4>
                                <div class="bar" data-percent="80">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>CSS3</h4>
                                <div class="bar" data-percent="100">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>jQuery</h4>
                                <div class="bar" data-percent="80">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>Wordpress</h4>
                                <div class="bar" data-percent="60">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- section-title -->
                            <div class="section-title center">
                                <h2>
                                    <i>design skills</i>
                                </h2>
                            </div>
                            <!-- section-title -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>Fireworks</h4>
                                <div class="bar" data-percent="90">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>Photoshop</h4>
                                <div class="bar" data-percent="70">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- .skill-unit -->
                            <div class="skill-unit">
                                <h4>Illustrator</h4>
                                <div class="bar" data-percent="50">
                                    <div class="progress"></div>
                                </div>
                            </div>
                            <!-- .skill-unit -->

                            <!-- section-title -->
                            <div class="section-title center">
                                <h2>
                                    <i>TESTIMONIALS</i>
                                </h2>
                            </div>
                            <!-- section-title -->

                            <!-- Testimonial -->
                            <div class="testo">
                                <img src="images/site/testo-01.jpg" alt="someone">
                                <h4>Vincent Wood</h4>
                                <h5>CEO / Gravity Inc.</h5>
                                <p>He is a great and hardworking guy. I am so proud of i have him as my asistant. He helped me so much. Also i am so proud of i have him as my asistant. He helped me so much.</p>

                            </div>
                            <!-- Testimonial -->

                            <!-- Testimonial -->
                            <div class="testo">
                                <img src="images/site/testo-02.jpg" alt="someone">
                                <h4>Gary Morgan</h4>
                                <h5>Chemist / Freelancer</h5>
                                <p>He was a great co-worker and a friend. I would't be where i am without his support.</p>

                            </div>
                            <!-- Testimonial -->

                            <!-- Testimonial -->
                            <div class="testo">
                                <img src="images/site/testo-03.jpg" alt="someone">

                                <h4>Jason Wilson</h4>
                                <h5>Lab Geek / Miami Metro</h5>
                                <p>He is ok. I don't really know him. He looks nice.</p>

                            </div>
                            <!-- Testimonial -->

                        </div>
                        <!-- col -->

                    </div>
                    <!-- row -->

                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : RESUME -->

        <!-- PAGE : PORTFOLIO -->
        <section id="portfolio" class="pt-page page-layout portfolio">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="pe-7s-glasses"></i>my works
                    </h1>
                    <!-- page-title -->

                    <!--FILTERS-->
                    <ul id="filters" class="filters">
                        <li class="current">
                            <a href="#" data-filter="*">all</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".media">Media</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".illustration">Illustration</a>
                        </li>
                        <li>
                            <a href="#" data-filter=".video">Video</a>
                        </li>
                    </ul>
                    <!--FILTERS-->

                    <!-- PORTFOLIO -->
                    <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">

                        <!-- portfolio-item -->
                        <div class="media-cell illustration hentry">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/01.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="portfolio-item-01.html" class="ajax"></a>
                            </div>

                            <div class="media-cell-desc">
                                <h3>Bookcard</h3>
                                <p class="category">a vcard theme</p>
                            </div>

                        </div>
                        <!-- portfolio-item -->


                        <!-- portfolio-item -->
                        <div class="media-cell media hentry">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/02.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="portfolio-item-02.html" class="ajax"></a>
                            </div>

                            <div class="media-cell-desc">
                                <h3>On The Desert</h3>
                                <p class="category">an illustration work</p>
                            </div>

                        </div>
                        <!-- portfolio-item -->


                        <!-- portfolio-item - lightbox video -->
                        <div class="media-cell illustration video hentry">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/03.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <!-- lightbox - video -->
                                <a href="https://vimeo.com/67658001" title="Lightbox Title" class="lightbox mfp-iframe"></a>
                                <!-- lightbox - video -->
                            </div>

                            <div class="media-cell-desc">
                                <h3>Sleepy Games</h3>
                                <p class="category">lightbox video</p>
                            </div>

                        </div>
                        <!-- portfolio-item - lightbox video -->


                        <!-- portfolio-item - lightbox image -->
                        <div class="media-cell media image hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/04.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <!-- lightbox - image -->
                                <a href="{{asset('Them/images/portfolio/lightbox-01.jpg')}}" title="an illustration by Vasili Tkach" class="lightbox"></a>
                                <!-- lightbox - image -->
                            </div>
                            <div class="media-cell-desc">
                                <h3>World War X</h3>
                                <p class="category">ligthbox image</p>
                            </div>
                        </div>
                        <!-- portfolio-item - lightbox image -->


                        <!-- portfolio-item - lightbox soundcloud -->
                        <div class="media-cell illustration audio hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/05.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <!-- lightbox - soundcloud : url copied from share/embed code -->
                                <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" title="Soundcloud embed" class="lightbox mfp-iframe"></a>

                                <!-- lightbox - soundcloud -->
                            </div>
                            <div class="media-cell-desc">
                                <h3>Read</h3>
                                <p class="category">for bloggers</p>
                            </div>
                        </div>
                        <!-- portfolio-item - lightbox soundcloud -->


                        <!-- portfolio-item - lightbox gallery -->
                        <div class="media-cell media image hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/06.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <!-- lightbox - gallery -->
                                <a href="images/portfolio/lightbox-02.jpg" class="lightbox" title="This is title"></a>
                                <a href="images/portfolio/lightbox-03.jpg" class="lightbox"></a>
                                <a href="images/portfolio/lightbox-04.jpg" class="lightbox" title="Dog have dreams"></a>
                                <!-- lightbox - gallery -->
                            </div>
                            <div class="media-cell-desc">
                                <h3>Wizard Adventure</h3>
                                <p class="category">lightbox gallery</p>
                            </div>
                        </div>
                        <!-- portfolio-item - lightbox gallery -->


                        <!-- portfolio-item - custom url -->
                        <div class="media-cell illustration url hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/07.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="http://themeforest.net/user/pixelwars" target="_blank"></a>
                            </div>
                            <div class="media-cell-desc">
                                <h3>Shinny Robot</h3>
                                <p class="category">an illustration work</p>
                            </div>
                        </div>
                        <!-- portfolio-item - custom url -->


                        <!-- portfolio-item -->
                        <div class="media-cell media hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/08.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="portfolio-item-03.html" class="ajax"></a>
                            </div>
                            <div class="media-cell-desc">
                                <h3>Virus Protection</h3>
                                <p class="category">an illustration work</p>
                            </div>
                        </div>
                        <!-- portfolio-item -->


                        <!-- portfolio-item -->
                        <div class="media-cell media hentry">
                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/portfolio/09.jpg')}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="portfolio-item-02.html" class="ajax"></a>
                            </div>
                            <div class="media-cell-desc">
                                <h3>Photographer</h3>
                                <p class="category">for photographers</p>
                            </div>
                        </div>
                        <!-- portfolio-item -->




                    </div>
                    <!-- PORTFOLIO -->



                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : PORTFOLIO -->







        <!-- PAGE : BLOG -->
        <section id="blog" class="pt-page page-layout">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">


                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="pe-7s-notebook"></i>from the blog
                    </h1>
                    <!-- page-title -->


                    <!--<div class="entry-content">
                        <p>You don't know how to do any of those. What are their names? I've been there. My folks were always on me to groom myself and wear underpants.</p>
                    </div>-->


                    <!-- LATEST POSTS -->
                    <div class="latest-posts media-grid masonry" data-layout="masonry" data-item-width="340">

                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/01.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">18</span>oct</span>
                                <h3>
                                    <a href="blog-single.html">20 Best Practices For Designing Better UIs</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/02.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">11</span>oct</span>
                                <h3>
                                    <a href="blog-single.html">40 Inspirational Magazine Designs That You Should See</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/03.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">27</span>sep</span>
                                <h3>
                                    <a href="blog-single.html">Creating a New Typeface For Your Next Project</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/04.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">14</span>jun</span>
                                <h3>
                                    <a href="blog-single.html">Sketching a Monster Made by Stone From Scratch</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/blog/05.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">05</span>jun</span>
                                <h3>
                                    <a href="blog-single.html">Designing a Physics Based iOS Game From Scratch</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('them/profile/images/blog/06.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">03</span>may</span>
                                <h3>
                                    <a href="blog-single.html">Get Ready And Pack Your Bag For a Real Trip</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/07.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">03</span>may</span>
                                <h3>
                                    <a href="blog-single.html">Get Ready And Pack Your Bag For a Real Trip</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/08.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">03</span>may</span>
                                <h3>
                                    <a href="blog-single.html">Get Ready And Pack Your Bag For a Real Trip</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                        <!-- post -->
                        <article class="hentry media-cell">

                            <div class="media-box">
                                <img src="{{asset('Them/profile/images/blog/09.jpg')}}" alt="post-image">
                                <div class="mask"></div>
                                <a href="blog-single.html"></a>
                            </div>

                            <header class="media-cell-desc">
                                    <span title="2013" class="date">
                                        <span class="day">03</span>may</span>
                                <h3>
                                    <a href="blog-single.html">Get Ready And Pack Your Bag For a Real Trip</a>
                                </h3>
                            </header>

                        </article>
                        <!-- post -->


                    </div>
                    <!-- LATEST POSTS -->


                    <p class="launch">
                        <a class="button" href="blog.html">SEE ALL POSTS</a>
                    </p>


                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : BLOG -->





        <!-- PAGE : CONTACT -->
        <section id="contact" class="pt-page page-layout contact light-text">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">


                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="pe-7s-call"></i>contact me
                    </h1>
                    <!-- page-title -->





                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>Let's Socialize</i>
                        </h2>
                    </div>
                    <!-- section-title -->

                    <!-- SOCIAL -->
                    <ul class="social">
                        <li><a class="facebook" href="#"></a></li>
                        <li><a class="twitter" href="#"></a></li>
                        <li><a class="linkedin" href="#"></a></li>
                        <li><a class="google-plus" href="#"></a></li>
                        <li><a class="pinterest" href="#"></a></li>
                        <li><a class="instagram" href="#"></a></li>
                        <li><a class="vine" href="#"></a></li>
                        <li><a class="vimeo" href="#"></a></li>
                    </ul>
                    <!-- SOCIAL -->





                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>Reach Me</i>
                        </h2>
                    </div>
                    <!-- section-title -->



                    <!-- row -->
                    <div class="row">

                        <!-- column 3/12 -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-map-marker"></i>
                                <!--<img src="images/site/icon-03.png" alt="image"/>-->
                                <h4>based in Los Angeles, USA</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- column 3/12 -->

                        <!-- column 3/12 -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-call"></i>
                                <h4>Tel : +123 456 78900</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- column 3/12 -->

                        <!-- column 3/12 -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-mail"></i>
                                <h4>johndoe [at] gmail.com</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- column 3/12 -->

                        <!-- column 3/12 -->
                        <div class="col-xs-6 col-sm-3">

                            <!-- fun-fact -->
                            <div class="fun-fact">
                                <i class="pe-7s-check"></i>
                                <h4>Freelance Available</h4>
                            </div>
                            <!-- fun-fact -->

                        </div>
                        <!-- column 3/12 -->

                    </div>
                    <!-- row -->


                    <!-- section-title -->
                    <div class="section-title center">
                        <h2>
                            <i>Drop Me A Line</i>
                        </h2>
                    </div>
                    <!-- section-title -->


                    <!-- .contact-form -->
                    <div class="contact-form">

                        <form id="contact-form" class="validate-form" method="post" action="send-mail.php">

                            <!-- enter mail subject here -->
                            <input type="hidden" name="subject" id="subject" value="You have a new message from Photographer!">

                            <p>
                                <label for="name">NAME</label>
                                <input type="text" name="name" id="name" class="required">
                            </p>

                            <p>
                                <label for="email">EMAIL</label>
                                <input type="text" name="email" id="email" class="required email">
                            </p>

                            <p class="antispam">Leave this empty if you are a human :
                                <br /><input name="url" />
                            </p>

                            <p>
                                <label for="message">MESSAGE</label>
                                <textarea name="message" id="message" class="required"></textarea>
                            </p>

                            <p>
                                <button class="submit button">Send</button>
                            </p>

                        </form>

                    </div>
                    <!-- .contact-form -->


                    <!-- GOOGLE MAP -->
                    <div class="map">
                        <div data-latitude="-25.363882" data-longitude="131.044922" data-zoom="5" data-marker-image="{{asset('Them/site/marker.png')}}" id="map-canvas" class="map-canvas"></div>
                    </div>
                    <!-- GOOGLE MAP -->


                </div>
                <!-- .layout-medium -->
            </div>
            <!-- .content -->
        </section>
        <!-- PAGE : CONTACT -->

        <!-- InstanceEndEditable -->

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

@endsection
