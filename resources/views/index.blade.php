<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Pixellab - Creative Agency HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <div class="pre-shadow"></div>
                <div class="pre-box"></div>
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== offcanvas-panel ======-->
        <div class="offcanvas-panel">
            <div class="panel-overlay"></div>
            <div class="offcanvas-panel-inner">
                <div class="panel-logo">
                    <a href="index.html"><img src="{{ asset('/uploads/logo/') }}/{{ $logos->logo_image }}" alt="Qempo"></a>
                </div>
                <div class="about-us">
                    <h5 class="panel-widget-title">About Us</h5>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore ipsam alias quae cupiditate quas, neque eum magni impedit asperiores.
                    </p>
                </div>
                <div class="contact-us">
                    <h5 class="panel-widget-title">Contact Us</h5>
                    <ul>
                        <li>
                            <i class="fal fa-map-marker-alt"></i>
                            121 King St, Melbourne VIC 3000, Australia.
                        </li>
                        <li>
                            <i class="fal fa-envelope-open"></i>
                            <a href="mailto:hello@barky.com"> hello@barky.com</a>
                            <a href="mailto:info@barky.com">info@barky.com</a>
                        </li>
                        <li>
                            <i class="fal fa-phone"></i>
                            <a href="tel:(312)-895-9800">(312) 895-9800</a>
                            <a href="tel:(312)-895-9888">(312) 895-9888</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="panel-close"><i class="fal fa-times"></i></a>
            </div>
        </div><!--====== offcanvas-panel ======-->
        <!--====== Start Header Section ======-->
        <header class="theme-header transparent-header">
            <!-- header Navigation -->
            <div class="header-navigation navigation-style-v1">
                <div class="nav-overlay"></div>
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="site-branding">
                            <a href="index.html" class="brand-logo"><img src="{{ asset('/uploads/logo/') }}/{{ $logos->logo_image }}" alt="Site Logo"></a>
                        </div>
                        <div class="nav-menu">
                            <!-- Navbar Close -->
                            <div class="navbar-close"><i class="far fa-times"></i></div>
                            <!-- Nav Search -->
                            <div class="nav-search">
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item has-children"><a href="#" class="active nav-link">Demos</a>
                                        <ul class="sub-menu">
                                            <li class="has-children"><a href="#">Multipage</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Creative Agency</a></li>
                                                    <li><a href="index-2.html">Digital Agency</a></li>
                                                    <li><a href="index-3.html">Design Studio</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children"><a href="#">Onepage</a>
                                                <ul class="sub-menu">
                                                    <li><a href="onepage-index-1.html">Creative Agency</a></li>
                                                    <li><a href="onepage-index-2.html">Digital Agency</a></li>
                                                    <li><a href="onepage-index-3.html">Design Studio</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#" class="nav-link">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="services.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#" class="nav-link">Portfolio</a>
                                        <ul class="sub-menu">
                                            <li><a href="projects.html">Our Portfolio</a></li>
                                            <li><a href="project-details.html">Portfolio Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#" class="nav-link">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children"><a href="#" class="nav-link">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blogs.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="contact.html" class="nav-link">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right-nav">
                            <ul>
                                <li class="bar-item"><a href="#"><img src="assets/images/dot.png" alt="dot"></a></li>
                                <li class="navbar-toggle-btn">
                                    <div class="navbar-toggler">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-banner-v1 position-relative">
            <div class="bg-one"></div>
            <div class="bg-two"></div>
            <div class="hero-img hero-img-one scene"><span data-depth=".5"><img src="{{ asset('/uploads/hero/') }}/{{ $heroimages->left_image }}" class="wow fadeInLeft" alt="hero image"></span></div>
            <div class="hero-img hero-img-two scene"><span data-depth=".2"><img src="{{ asset('/uploads/hero/') }}/{{ $heroimages->right_image }}" class="wow fadeInLeft" alt="hero image"></span></div>
            <div class="hero-img hero-img-three scene"><span data-depth=".3"><img src="assets/images/shape/circle-logo-1.png" class="wow fadeInLeft" alt="hero image"></span></div>
            <div class="shape shape-one scene"><span data-depth="1"><img src="assets/images/shape/shape-1.png" alt="shape"></span></div>
            <div class="shape shape-two scene"><span data-depth="2"><img src="assets/images/shape/shape-2.png" alt="shape"></span></div>
            <div class="shape shape-three scene"><span data-depth="3"><img src="assets/images/shape/shape-3.png" alt="shape"></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-12">
                        <div class="hero-content">
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">{{ $heros->heading }}</h1>
                            <p class="wow fadeInDown" data-wow-delay="1s">{{ $heros->desc }}</p>
                            <a href="{{ $heros->btn_link }}" class="main-btn arrow-btn wow fadeInUp" data-wow-delay=".5s">{{ $heros->btn_text }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start About Section ======-->
        <section class="about-area about-area-v1 position-relative pt-130">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-holder-box mb-50">
                            <div class="img-holder wow fadeInLeft">
                                <img src="assets/images/about/1.jpg" alt="Image">
                            </div>
                            <div class="shape shape-one"><span class="animate-float-y"><img src="assets/images/shape/circle-logo-2.png" class="circle-logo" alt="circle logo"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-wrapper mb-50 wow fadeInRight">
                            <div class="section-title mb-15">
                                <span class="sub-title st-one">About Us</span>
                                <h2>We’re Creative
                                    Agency Since 1993</h2>
                            </div>
                            <h4>Professional Design Agency to provide solutions</h4>
                            <p>On the other hand denounce with righteous and dislike men
                                who beguile and demoralizes by the charms of pleasure thes moment, so blinded by desire that they cannot</p>
                            <ul class="list-style-one mb-35">
                                <li>Digital Creative Agency</li>
                                <li>Professional Problem Solutions</li>
                                <li>Web Design & Development</li>
                            </ul>
                            <a href="about.html" class="main-btn bordered-btn btn-blue arrow-btn">Learn More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End About Section ======-->
        <!--====== Start Service Section ======-->
        <section class="service-area pt-90 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <span class="sub-title st-one">Services</span>
                            <h2>Creative Design Solutions</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">

                    @foreach($service_titles as $service_title)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-item service-style-one mb-40 wow fadeInDown" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="{{ $service_title->icon }}"></i>{{-- <i class="flaticon-strategy"></i> --}}
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="service-details.html">{{ $service_title->title }}</a></h3>
                                <ul class="list-style-two">

                                    @foreach($services as $service)
                                        @if($service_title->id == $service->service_title)
                                            <li>{{ $service->service }}</li>
                                        @endif
                                    @endforeach

                                </ul>
                                <a href="service-details.html" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--====== End Service Section ======-->
        <!--====== Start Portfolio Section ======-->
        <section class="portfolio-area portfolio-area-v1 light-gray-bg pt-130 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title mb-45 wow fadeInUp">
                            <span class="sub-title st-one">Latest Work</span>
                            <h2>Professional Experience</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolio-filter-button mb-50 wow fadeInLeft">
                            <ul class="filter-btn mb-20">
                                <li data-filter="*" class="active">Show All</li>

                                @foreach($tabs as $tab)
                                <li data-filter=".{{ $tab->class }}">{{ $tab->name }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row portfolio-grid">

                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column {{ $portfolio->class }}">
                        <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".1s">
                            <div class="img-holder">
                                <img src="{{ asset('/uploads/portfolio') }}/{{ $portfolio->image }}" alt="Img">
                                <a href="{{ asset('/uploads/portfolio') }}/{{ $portfolio->image }}" class="portfolio-hover img-popup">
                                    <div class="hover-content">
                                        <i class="far fa-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="text">
                                <h3 class="title"><a href="project-details.html">{{ $portfolio->title }}</a></h3>
                                <a href="projects.html" class="cat-link">{{ $portfolio->sub_title }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section><!--====== End Portfolio Section ======-->
        <!--====== Start CTA Section ======-->
        <section class="cta-area cta-area-v1 pt-130">
            <div class="container-1450">
                <div class="cta-wrapper dark-blue-bg">
                    <div class="cta-img wow fadeInDown "><img src="assets/images/cta/1.jpg" alt=""></div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-12">
                            <div class="text-wrapper wow fadeInUp">
                                <div class="section-title section-title-white mb-55">
                                    <span class="sub-title st-one">Let’s Work</span>
                                    <h2>Experience & innovative <span class="fill-text">solutions</span>for <span class="fill-text">creative</span> design & development <span class="fill-text">agency</span></h2>
                                </div>
                                <a href="contact.html" class="main-btn bordered-btn btn-white arrow-btn">Let's Work Together</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End CTA Section ======-->
        <!--====== Start Counter Section ======-->
        <section class="counter-area counter-area-v1 pt-240 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <span class="sub-title st-one">Agency Statistics</span>
                            <h2>Why People’s Like Us</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <i class="flaticon-start-up"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>256</span>+</h2>
                                <p>Project Complate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="flaticon-creativity"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>783</span>+</h2>
                                <p>Project Complate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon">
                                <i class="flaticon-medal"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>97</span>+</h2>
                                <p>Awards Winning</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="counter-item mb-40 wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="flaticon-technical-support"></i>
                            </div>
                            <div class="text">
                                <h2 class="number"><span>35</span>+</h2>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Counter Section ======-->
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-area testimonial-area-v1 dark-blue-bg pattern-bg pt-130 pb-80">
            <div class="shape-img wow fadeInRight animate-float-y"><span><img src="assets/images/testimonial/2.jpg" alt=""></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title section-title-white mb-50 wow fadeInLeft">
                            <span class="sub-title st-one">Testimonials</span>
                            <h2>What Our Client’s About Us</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="img-holder mb-50 wow fadeInLeft">
                            <img src="assets/images/testimonial/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="testimonial-slider-one mb-50 wow fadeInRight">
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Sit amet consectetur adipiscing
                                        elit sed do eiusmod temporincde
                                        idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey
                                        sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior  Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Sit amet consectetur adipiscing
                                        elit sed do eiusmod temporincde
                                        idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey
                                        sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior  Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Sit amet consectetur adipiscing
                                        elit sed do eiusmod temporincde
                                        idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey
                                        sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior  Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testimonial-content">
                                    <i class="flaticon-quotation"></i>
                                    <h3>Sit amet consectetur adipiscing
                                        elit sed do eiusmod temporincde
                                        idunt ut labore et dolore magnas aliqua. Quis ipsum suspendissey
                                        sltrices gravida. Risus commodo verra maecenas lacusvel. </h3>
                                    <div class="author-title">
                                        <h4>Dustin A. McPherson</h4>
                                        <p class="position">Senior  Manager</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Testimonial Section ======-->
        <!--====== Start Team Section ======-->
        <section class="team-area team-area-v1 pt-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55 wow fadeInUp">
                            <span class="sub-title st-one">Meet Our Team</span>
                            <h2>Experience Team Members</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-item mb-40 wow fadeInUp" data-wow-delay=".2s">
                            <div class="img-holder">
                                <img src="{{ asset('/uploads/team') }}/{{ $team->image }}" alt="Team Image">
                                <div class="team-hover">
                                    <ul class="social-link">

                                        @foreach($accounts as $account)
                                            @if($team->id == $account->team_id)
                                                <li><a href="{{ $account->link }}"><i class="{{ $account->icon }}"></i></a></li>
                                            @endif
                                        @endforeach()

                                    </ul>
                                </div>
                            </div>
                            <div class="text text-center">
                                <h4 class="title"><a href="team-details.html">{{ $team->name }}</a></h4>
                                <p class="position">{{ $team->designation }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!--====== End Team Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-area contact-area-v1 pt-70 pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="text-wrapper mb-50 wow fadeInLeft">
                            <h2>Have Any on <span class="fill-text">Project</span>
                                Mind! <span class="fill-text">Contact</span> Us</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudan
                                tium, totam rem aperiam, eaque ipsa quae abillo <span>inventore veritatis</span> et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="information-style-one mb-40">
                                        <div class="icon">
                                            <span><i class="far fa-envelope-open"></i>Email Us</span>
                                        </div>
                                        <div class="info">
                                            <h4><a href="mailto:support@gmail.com">support@gmail.com</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="information-style-one mb-40">
                                        <div class="icon">
                                            <span><i class="far fa-phone"></i>Phone Us</span>
                                        </div>
                                        <div class="info">
                                            <h4><a href="tel:+0123456789">+012 (345) 67 89</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <form action="{{ url('/contact/insert') }}" method="POST"> @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Full Name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn arrow-btn">Send Us Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img-holder mb-50 wow fadeInRight">
                            <div class="shape shape-icon-one scene"><span data-depth="1"><img src="assets/images/shape/shape-4.png" alt=""></span></div>
                            <div class="shape shape-icon-two"><span></span></div>
                            <img src="assets/images/contact/2.jpg" alt="Contact Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Contact Section ======-->
        <!--====== Start Blog Section ======-->
        <section class="blog-area blog-area-v1 light-gray-bg pt-130 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-55 wow fadeInUp" data-wow-delay=".2s">
                            <span class="sub-title st-one">Articles News</span>
                            <h2>Latest News & Blogs</h2>
                            <p>Professional Design Agency to provide solutions</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".25s">
                            <div class="entry-content">
                                <a href="#" class="cat-btn">Design</a>
                                <h3 class="title"><a href="blog-details.html">Everything You Want To Know About</a></h3>
                                <p>Sit amet consectete adipising elit
                                    wedo eiusmod temeidiunt laboret dolore magna ways</p>
                                <a href="blog-details.html" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".30s">
                            <div class="entry-content">
                                <a href="#" class="cat-btn">Design</a>
                                <h3 class="title"><a href="blog-details.html">Designing Better Links For Websites And Emails</a></h3>
                                <p>Sit amet consectete adipising elit
                                    wedo eiusmod temeidiunt laboret dolore magna ways</p>
                                <a href="blog-details.html" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item mb-40 wow fadeInUp" data-wow-delay=".35s">
                            <div class="entry-content">
                                <a href="#" class="cat-btn">Design</a>
                                <h3 class="title"><a href="blog-details.html">Everything You Want To Know About</a></h3>
                                <p>Sit amet consectete adipising elit
                                    wedo eiusmod temeidiunt laboret dolore magna ways</p>
                                <a href="blog-details.html" class="btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button-box text-center wow fadeInUp">
                            <a href="blogs.html" class="main-btn arrow-btn">View More News</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Blog Section ======-->
        <!--====== Start Footer ======-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top pt-75 pb-40">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="footer-logo mb-40 wow fadeInLeft">
                                <img src="assets/images/logo/logo.jpg" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-wrapper mb-40 wow fadeInRight">
                                <h3>Modern Solutionsd For
                                    <span class="blue-dark">Creative Agency</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-widget pt-70 pb-40">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".15s">
                                <h4 class="widget-title">Services</h4>
                                <ul class="widget-nav">
                                    <li><a href="services.html">UX/UI Design</a></li>
                                    <li><a href="services.html">Web Development</a></li>
                                    <li><a href="services.html">SEO Optimization</a></li>
                                    <li><a href="services.html">Product Design</a></li>
                                    <li><a href="services.html">Logo Design</a></li>
                                    <li><a href="services.html">Brand Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="widget footer-nav-widget mb-40 wow fadeInUp" data-wow-delay=".20s">
                                <h4 class="widget-title">Links</h4>
                                <ul class="widget-nav">
                                    <li><a href="services.html">About Agency</a></li>
                                    <li><a href="services.html">Latest News & Blog</a></li>
                                    <li><a href="services.html">Meet The Team</a></li>
                                    <li><a href="services.html">Popular Services</a></li>
                                    <li><a href="services.html">Testimonials</a></li>
                                    <li><a href="services.html">Need a Career?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12">
                            <div class="widget social-widget mb-40 wow fadeInUp" data-wow-delay=".25s">
                                <h4 class="widget-title">Follow</h4>
                                <ul class="social-nav">
                                    <li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i>Behance</a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fab fa-medium-m"></i>Medium</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="widget newsletter-widget mb-40 wow fadeInUp" data-wow-delay=".30s">
                                <div class="newsletter-content">
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                    <p>Natus errorsit voluptatem accusa dolore
                                        mque quae <a href="#">abillo inventore verita</a> achitec
                                        beatae vitae dicta sunt explicabo.</p>
                                    <form>
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                            <button class="main-btn">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="copyright-text">
                                <p>&copy; 2022. All rights reserved design by Webtend</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-nav float-lg-right">
                                <ul>
                                    <li><a href="service-details.html">Setting & Privacy </a></li>
                                    <li><a href="service-details.html">Faqs</a></li>
                                    <li><a href="service-details.html">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="far fa-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/vendor/popper/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/vendor/slick/slick.min.js"></script>
        <!--====== Magnific js ======-->
        <script src="assets/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/vendor/isotope.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/vendor/imagesloaded.min.js"></script>
        <!--====== Counterup js ======-->
        <script src="assets/vendor/jquery.counterup.min.js"></script>
        <!--====== Waypoints js ======-->
        <script src="assets/vendor/jquery.waypoints.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
        <!--====== WOW js ======-->
        <script src="assets/vendor/wow.min.js"></script>
        <!--====== Parallax js ======-->
        <script src="assets/vendor/parallax.min.js"></script>
        <!-- ===== Sweet Alert2 JS ===== -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!--====== Main js ======-->
        <script src="assets/js/theme.js"></script>
    </body>
</html>

@if (session('success'))
    <script>
        Swal.fire(
            'Congratulations!',
            '{{ session('success') }}',
            'success'
            )
    </script>
@endif
