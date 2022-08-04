@extends('landing.layout.master')

@section('content')

    <!-- Banner Section -->
    <section class="banner-section" id="home">
        <!-- Social Nav -->

        <div class="main-slider-carousel owl-carousel owl-theme owl-loaded owl-drag">
            <div class="slide"
                 style="background-image: url('{{ asset('landingAssets/images/main-slider/image-1.jpg') }}');">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">Counsel LAw Firm</div>
                            <h1>
                                Best LAw Firm <br/>
                                Since 1968
                            </h1>
                            <div class="text">Quis autem velo eum iure reprehenderit rui in ea voluatacera suam nihil
                                molestiae conseuatur vel illum.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" style="background-image: url(images/main-slider/image-1.jpg);">
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="content-column">
                        <div class="inner-column">
                            <div class="title">Counsel LAw Firm</div>
                            <h1>
                                Best LAw Firm <br/>
                                Since 1968
                            </h1>
                            <div class="text">Quis autem velo eum iure reprehenderit rui in ea voluatacera suam nihil
                                molestiae conseuatur vel illum.
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Section -->

    <!-- Services Section -->
    <section class="services-section" id="services">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file"></div>
                                <h4><a href="corporate_law.html">Corporate Law</a></h4>
                                <div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil
                                    molestiae conseuatur vel illum eius modi temora incidunt ut labore.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-file-1"></div>
                                <h4><a href="corporate_law.html">Real Estate Law</a></h4>
                                <div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil
                                    molestiae conseuatur vel illum eius modi temora incidunt ut labore.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInLeft animated" data-wow-delay="150ms" data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInLeft;">
                            <div class="content">
                                <div class="icon flaticon-umbrella-1"></div>
                                <h4><a href="corporate_law.html">Insurance Law</a></h4>
                                <div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil
                                    molestiae conseuatur vel illum eius modi temora incidunt ut labore.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Services Block -->
                    <div class="services-block col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box wow fadeInRight animated" data-wow-delay="150ms"
                             data-wow-duration="1500ms"
                             style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInRight;">
                            <div class="content">
                                <div class="icon flaticon-group"></div>
                                <h4><a href="corporate_law.html">Family Law</a></h4>
                                <div class="text">Quis autem velo eum iure reprehenderit rui inea votasuam nihil
                                    molestiae conseuatur vel illum eius modi temora incidunt ut labore.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Welcome Section -->
    <section class="welcome-section" id="about" style="background-image: url(images/background/pattern-1.png);">
        <div class="auto-container">
            <div class="inner-container">
                <div class="clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image titlt" data-tilt="" data-tilt-max="2">
                                <img src="images/resource/welcome.jpg" alt=""/>
                            </div>

                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <h2>Welcome to The Counsel LAw Firm</h2>
                                <div class="text">
                                    Nemo enim ipsam voluptatem quia voluptas sit asperaut odit aut fugit, quia voluptas
                                    sit asperaut sed quia consequuntur magni dolor eos qui ratione voluptatem sequi
                                    nesciunt aorro quisuest, rui dolorem ipsum nuia dolor.
                                </div>
                            </div>
                            <ul class="list-style-one">
                                <li>Velit esse quam nihil molestiae consequatur, velillu.</li>
                                <li>Qui dolorem eum fugiat quo voluptas nulla pariatur.</li>
                                <li>Aspernatur aut odit aut fugit commodo luis cursus.</li>
                                <li>Ratione voluptatem sequi nesciunt nerue porro.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <!-- Counter Section -->
    <section class="counter-section" id="counter">
        <div class="image-layer" style="background-image: url(images/background/1.jpg);"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title light centered">
                <h2>20 YEars OF experience in Legal cases field</h2>
                <div class="text">
                    Renrehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum <br/>
                    aui dolorem eum fugiat quo voluptas nulla pariatur
                </div>
            </div>

            <div class="fact-counter">
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-briefcase"></div>
                                <div class="count-outer count-box counted"><span class="count-text" data-speed="2500"
                                                                                 data-stop="250">250</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">Business Partners</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-balance"></div>
                                <div class="count-outer count-box counted"><span class="count-text" data-speed="3000"
                                                                                 data-stop="180">180</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">Cases Done</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-marketing"></div>
                                <div class="count-outer count-box counted"><span class="count-text" data-speed="3000"
                                                                                 data-stop="350">350</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">Happy Clients</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Column -->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner wow fadeInRight animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon flaticon-trophy-2"></div>
                                <div class="count-outer count-box counted"><span class="count-text" data-speed="3000"
                                                                                 data-stop="150">150</span><sup>+</sup>
                                </div>
                                <h6 class="counter-title">Awards Win</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Practice Section -->
    @if(isset($features) && $features->count())
    <section class="practice-section" id="practice" style="background-image: url(images/background/pattern-2.png);">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Our LEGAL PRACTICE Areas</h2>
            </div>
            <div class="inner-container">
                <div class="clearfix">
                    <!-- Practice Block -->
                    @foreach($features as $feature)
                        <div class="practice-block col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div>
                                    <img src="{{ image_url($feature->image , '70x70') }}" alt="">
                                </div>
                                <h5><a href="#">{{ $feature->name }}</a></h5>
                                <div class="text">{{ str_limit($feature->content , '10' , '...') }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- End Practice Section -->

    <!-- Fluid Section One -->
    <section class="fluid-section-one" id="fluid">
        <div class="side-icon"><img src="images/icons/fluid-icon.png" alt=""/></div>
        <div class="outer-container clearfix">
            <!-- Image Column -->
            <div class="image-column clearfix" style="background-image: url(images/resource/image-1.jpg);">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>
                            Frequently asked <br/>
                            questions
                        </h2>
                        <div class="text">Tonam rem aperiam, eaque ipsa quae ab illo inventoe veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo exercitationem ullam corporis.
                        </div>
                    </div>

                    <!-- Accordian Box -->

                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>
                            GEt A Free <br/>
                            Consultation
                        </h2>
                    </div>

                    <!-- Default Form -->
                    <div class="default-form">
                        <form method="post" action="contact.html">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required=""/>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" required=""/>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                        <span class="txt">Submit Now <i class="arrow flaticon-right"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Default Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- Fluid Section One -->

    <!-- Team Section -->
    <section class="team-section" id="team">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Our Professional Team</h2>
            </div>
            <div class="row clearfix">
                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="images/resource/team-1.jpg" alt=""/>
                        </div>
                        <div class="lower-box">
                            <h5><a href="corporate_law.html">Chris JAriko</a></h5>
                            <div class="designation">Founder and Ceo</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="150ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 150ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="images/resource/team-2.jpg" alt=""/>
                        </div>
                        <div class="lower-box">
                            <h5><a href="corporate_law.html">ALina Kevin</a></h5>
                            <div class="designation">Senior Attorney</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="images/resource/team-3.jpg" alt=""/>
                        </div>
                        <div class="lower-box">
                            <h5><a href="corporate_law.html">Senior Attorney</a></h5>
                            <div class="designation">Junior Attorney</div>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft animated" data-wow-delay="450ms" data-wow-duration="1500ms"
                         style="visibility: visible; animation-duration: 1500ms; animation-delay: 450ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="images/resource/team-4.jpg" alt=""/>
                        </div>
                        <div class="lower-box">
                            <h5><a href="corporate_law.html">Polard Andrew</a></h5>
                            <div class="designation">Financial Attorney</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Testimonail Section -->
    <section class="testimonial-section" id="testimonail"
             style="background-image: url(images/background/pattern-3.png);">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>What Our CLients Said</h2>
            </div>
            <div class="inner-container">
                <div class="single-item-carousel owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                    <div class="testimonial-block">
                        <div class="inner-box">
                            <div class="author-image">
                                <img src="images/resource/author-1.png" alt=""/>
                            </div>
                            <span class="quote-icon flaticon-quote-1"></span>
                            <div class="text">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                nihil rentoa molestiae conseruatur vela illum qui dolorem eum fugiat ruo voluetas nulla
                                ariatur minima veniam.
                            </div>
                            <div class="name">Kevin Peterson</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonail Section -->

    <!-- Clients Section -->
    <section class="clients-section" id="clients">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>TRUSTED COMPANIES</h2>
                <div class="text">
                    Nemo enim ipsam voluptatem quia voluptas sit asper aut odit aut fugit, sed quia consequuntur magni
                    doloreos <br/>
                    qui ratione voluptatem sequi nesciunt aorro ruisea
                </div>
            </div>
            <div class="inner-container">
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme owl-loaded owl-drag">
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/1.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/2.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/3.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/4.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/1.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/2.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/3.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/4.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/1.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/2.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/3.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/4.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/1.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/2.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/3.png" alt=""/></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="images/clients/4.png" alt=""/></a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Clients Section -->

@endsection
