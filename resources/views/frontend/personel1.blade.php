<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{$user->name}}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/frontend/personel1/css/default.css">
    <link rel="stylesheet" href="/frontend/personel1/css/layout.css">
    <link rel="stylesheet" href="/frontend/personel1/css/media-queries.css">
    <link rel="stylesheet" href="/frontend/personel1/css/magnific-popup.css">
    <!-- Script
    ================================================== -->
    <script src="/frontend/personel1/js/modernizr.js"></script>

    <!-- Favicons
     ================================================== -->
    <link rel="shortcut icon" href="/frontend/personel1/favicon.png" >

</head>

<body>

<!-- Header
================================================== -->
<header id="home">

    <nav id="nav-wrap">

        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
        </ul> <!-- end #nav -->

    </nav> <!-- end #nav-wrap -->

    <div class="row banner">
        <div class="banner-text">
            <h1 class="responsive-headline">I'm {{$user->name}}.</h1>
            <h3>I'm a {{$user->name}} <span>{{$user->job}}</span>. Let's <a class="smoothscroll" href="#about">start scrolling</a>
                and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
                <li><a href="{{$user->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$user->github_url}}"><i class="fa fa-github"></i></a></li>
                <li><a href="{{$user->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{$user->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>

    <p class="scrolldown">
        <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
    </p>

</header> <!-- Header End -->


<!-- About Section
================================================== -->
<section id="about">

    <div class="row">

        <div class="three columns">
            <img class="profile-pic" style="width: 2000px; height: 250px" src="/images/users/{{$user->user_img}}" alt="hero" />
        </div>

        <div class="nine columns main-col">
            <h2>About Me</h2>
            <p>
                {{$user->about_yourself}}
            </p>
            <div class="row">
                <div class="columns contact-details">
                    <h2>Contact Details</h2>
                    <p class="address">
                        <span>{{$user->location}}</span><br>
                        <span>{{$user->phone}}</span><br>
                        <span>{{$user->mail}}</span>
                    </p>

                </div>

            </div> <!-- end row -->

        </div> <!-- end .main-col -->

    </div>

</section> <!-- About Section End-->

<section>
    <br><br><br>
    <div class="row skill">

        <div class="three columns header-col pt-10">
            <h1><span>Skills</span></h1>
        </div>
        <div class="nine columns main-col">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                voluptatem sequi nesciunt.

            {{-- FOR SKILLS --}}
            @php
                $skill_1 = explode(" ", $user->skill_1);
                $skill_2 = explode(" ", $user->skill_2);
                $skill_3 = explode(" ", $user->skill_3);
                $skill_4 = explode(" ", $user->skill_4);
                $skill_5 = explode(" ", $user->skill_5);
            @endphp
            {{-- FOR SKILLS --}}
            <div class="bars">
                <ul class="skills">
                    <li><span class="bar-expand" style="width: {{$skill_1[1]}}%"></span><em>{{$skill_1[0]}}</em></li>
                    <li><span class="bar-expand" style="width: {{$skill_2[1]}}%"></span><em>{{$skill_2[0]}}</em></li>
                    <li><span class="bar-expand" style="width: {{$skill_3[1]}}%"></span><em>{{$skill_3[0]}}</em></li>
                    <li><span class="bar-expand" style="width: {{$skill_4[1]}}%"></span><em>{{$skill_4[0]}}</em></li>
                    <li><span class="bar-expand" style="width: {{$skill_5[1]}}%"></span><em>{{$skill_5[0]}}</em></li>
                </ul>
            </div><!-- end skill-bars -->
        </div> <!-- main-col end -->
    </div>
</section>

<!-- Testimonials Section
================================================== -->
<section id="testimonials">

    <div class="text-container">

        <div class="row">

            <div class="two columns header-col">

                <h1><span>Client Testimonials</span></h1>
            </div>
            <div class="ten columns flex-container">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <blockquote>
                                <p>Your work is going to fill a large part of your life, and the only way to be truly satisfied is
                                    to do what you believe is great work. And the only way to do great work is to love what you do.
                                    If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.
                                </p>
                                <cite>Steve Jobs</cite>
                            </blockquote>
                        </li> <!-- slide ends -->
                        <li>
                            <blockquote>
                                <p>
                                    "Don't compare yourself with anyone in this world. If you do so, you are insulting yourself."
                                </p>
                                <cite>Bill Gates</cite>
                            </blockquote>
                        </li> <!-- slide ends -->
                    </ul>
                </div> <!-- div.flexslider ends -->
            </div> <!-- div.flex-container ends -->
        </div> <!-- row ends -->
    </div>  <!-- text-container ends -->
</section> <!-- Testimonials Section End-->

<!-- Contact Section
================================================== -->
<section id="contact">

    <div class="row section-head">

        <div class="two columns header-col">

            <h1><span>Get In Touch.</span></h1>

        </div>

        <div class="ten columns" style="color: white; font-size: 40px">
            <p>
                Send Me:
            </p>
        </div>

    </div>

    <div class="row">

        <div class="eight columns">

            <!-- form -->
            <form action="" id="contactForm" name="contactForm">
                <fieldset>

                    <div>
                        <label for="contactName">Name <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactName" name="contactName">
                    </div>

                    <div>
                        <label for="contactEmail">Email <span class="required">*</span></label>
                        <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                    </div>

                    <div>
                        <label for="contactSubject">Subject</label>
                        <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                    </div>

                    <div>
                        <label for="contactMessage">Message <span class="required">*</span></label>
                        <textarea cols="10" rows="10" id="contactMessage" name="contactMessage"></textarea>
                    </div>

                    <div>
                        <button class="submit">Submit</button>
                        <span id="image-loader">
                        <img alt="" src="/frontend/personel1/images/loader.gif">
                     </span>
                    </div>

                </fieldset>
            </form> <!-- Form End -->
        </div>
    </div>

</section> <!-- Contact Section End-->

<!-- footer
================================================== -->
<footer>

    <div class="row">

        <div class="twelve columns">

            <ul class="social-links">
                <li><a href="{{$user->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{$user->github_url}}"><i class="fa fa-github"></i></a></li>
                <li><a href="{{$user->linkedin_url}}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{$user->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>&copy; Copyright 2020</li>
                <li>by <a title="Styleshout" href="{{$user->instagram_url}}">{{$user->name}}</a></li>
            </ul>

        </div>

        <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

    </div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/frontend/personel1/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/frontend/personel1/js/jquery-migrate-1.2.1.min.js"></script>

<script src="/frontend/personel1/js/jquery.flexslider.js"></script>
<script src="/frontend/personel1/js/waypoints.js"></script>
<script src="/frontend/personel1/js/jquery.fittext.js"></script>
<script src="/frontend/personel1/js/magnific-popup.js"></script>
<script src="/frontend/personel1/js/init.js"></script>

</body>

</html>
