@extends('../layouts/user-layout')
@section('content')


        <!-- InstanceBeginEditable name="Page-Content" -->
        <!-- PAGE : HOME -->
        <section id="home" class="pt-page page-layout light-text home-section has-bg-img" style="background-image:url({{asset('Them/profile/images/site/home.png)')}}">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <h4>Welcome Back</h4>
                    <h3>{{ Auth::user()->name }}</h3>
                    <h6>لاتنسي ذكر الله:  <strong id="typist-element" data-typist="سبحان الله, لا اله الا الله والله اكبر, الحمد لله.">سبحان الله والحمد لله ولا اله الا الله والله اكبر</strong></h6>

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
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>about me
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
                                <img src="{{asset('them/profile/images/site/icon-04.png')}}" alt="image"/>
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
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>resume
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
        <section id="galleryImage" class="pt-page page-layout portfolio">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">
                        <i class="fa fa-camera-retro" aria-hidden="true"></i>All my photos
                    </h1>
                    <!-- page-title -->

                    <!--FILTERS-->
                    <ul id="filters" class="filters">
                        <li class="current">
                            <a href="#" data-filter="*">all</a>
                        </li>
                        @foreach(Auth::user()->photos as $Alldata)
                        <li>
                            <a href="#" data-filter=".{{$Alldata->id}}">{{$Alldata->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <!--FILTERS-->

                    <!-- PORTFOLIO -->
                    <div class="portfolio-items media-grid masonry" data-layout="masonry" data-item-width="340">

                        @foreach(Auth::user()->photos as $Alldata)
                            @php
                                $imgs = explode('|', $Alldata->photo);
                            @endphp
                            @foreach($imgs as $data)
                        <!-- portfolio-item -->
                        <div class="media-cell {{$Alldata->id}} hentry">

                            <div class="media-box">
                                <img src="{{asset('images')}}/{{$data}}" alt="portfolio-post">
                                <div class="mask"></div>
                                <a href="portfolio-item-01.html" class="ajax"></a>
                            </div>

                            <div class="media-cell-desc">
                                <h3>{{$Alldata->title}}</h3>
                                <p class="category">{{$Alldata->created_at}}</p>
                            </div>

                        </div>
                        <!-- portfolio-item -->
                        @endforeach
                        @endforeach



                    </div>
                    <!-- PORTFOLIO -->
                    <div class="tm-paging d-flex">
                        {{ $photo_data->links("pagination::bootstrap-4") }}
                    </div>
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
                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>from the blog
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
                        <i class="fa fa-phone" aria-hidden="true"></i>contact me
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

        <!-- PAGE : myGallery -->
        <section id="myGallery" class="pt-page page-layout contact light-text">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">Edit Gallery</h1>
                    <!-- page-title -->

                    <!-- .contact-form -->
                    <div class="contact-form">

                        <form id="contact-form" enctype="multipart/form-data" class="validate-form" method="post" action="{{url('user/store_gallery')}}">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="Title">Title</label>
                                <input type="text" name="title" class="form-control" id="Title" placeholder="Gallery Name">
                            </div>

                            <div class="form-group mb-2">
                                <label for="cover">cover</label>
                                <label class="custom-file-upload">
                                    <input accept="image/*" name="cover" type='file' id="AddImg" />
                                    <i class="fa fa-cloud-upload"></i> Custom Upload
                                    <img id="ShowImg" src="#" alt="your image" />
                                    <script>
                                        AddImg.onchange = evt => {
                                            const [file] = AddImg.files
                                            if (file) {
                                                ShowImg.src = URL.createObjectURL(file)
                                            }
                                        }
                                    </script>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" name="description" id="Description" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>

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
        <!-- PAGE : myGallery -->

        @if(Auth::user()->gallery)
        <!-- PAGE : Edit myGallery -->
        <section id="EditMyGallery" class="pt-page page-layout contact light-text">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">Edit Gallery</h1>
                    <h3 class="page-title">{{Auth::user()->gallery->title ?? ""}}</h3>
                    <!-- page-title -->

                    <!-- .contact-form -->
                    <div class="contact-form">

                        <form id="contact-form" enctype="multipart/form-data" class="validate-form" method="post" action="{{url('user/update_gallery')}}">
                            @csrf
                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" value="{{Auth::user()->gallery->title ?? ""}}" name="title" class="form-control" id="Title" placeholder="Gallery Name">
                            </div>

                            <div class="form-group">
                                <label for="cover">cover</label>
                                <label class="custom-file-upload">
                                    <input accept="image/*" name="cover" type='file' id="imgInp" />
                                    <i class="fa fa-cloud-upload"></i> Custom Upload
                                    <img id="blah" src="{{asset('images')}}/{{Auth::user()->gallery->cover}}" alt="your image" />
                                    <script>imgInp.onchange = evt => {
                                        const [file] = imgInp.files
                                        if (file) {
                                            blah.src = URL.createObjectURL(file)
                                        }
                                    }</script>
                                </label>

                            </div>
                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" name="description" id="Description" rows="3">{{Auth::user()->gallery->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">update my gallery</button>

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
        <!-- PAGE : Edit myGallery -->


        <!-- PAGE : create Photos -->
        <section id="createPhotos" class="pt-page page-layout contact light-text">
            <!-- .content -->
            <div class="content">
                <!-- .layout-medium -->
                <div class="layout-medium">

                    <!-- page-title -->
                    <h1 class="page-title">create Photos</h1>
                    <!-- page-title -->

                    <!-- .contact-form -->
                    <div class="contact-form">

                        <form id="contact-form" enctype="multipart/form-data" class="validate-form" method="post" action="{{url('user/storePhotos')}}">
                            @csrf

                            <div class="form-group">
                                <label for="Title">Title</label>
                                <input type="text" name="title" class="form-control" id="Title" placeholder="Gallery Name">
                            </div>

                            <div class="form-group">
                                <label for="Description">Description</label>
                                <textarea class="form-control" name="description" id="Description" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="cover">Photo/s</label>
                                <label class="custom-file-upload">
                                    <input accept="image/*" name="images[]" type='file' id="imgInp" multiple/>
                                    <i class="fa fa-cloud-upload"></i> Custom Upload
                                    <img id="blah" src="#" alt="your image" />
                                    <script>imgInp.onchange = evt => {
                                            const [file] = imgInp.files
                                            if (file) {
                                                blah.src = URL.createObjectURL(file)
                                            }
                                        }</script>
                                </label>

                            </div>

                            <button type="submit" class="btn btn-primary">update my gallery</button>

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
        <!-- PAGE : create Photos -->


        <!-- InstanceEndEditable -->

        @endif
@endsection
