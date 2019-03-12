@extends('akame.master')

@section('content')

<!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img" style="background-image: url(img/bg-img/online1.png);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">We Care About <br> Your Olshop</h2>
                                    <p data-animation="fadeInUp" data-delay="400ms">“Discover your own style. Don't try to repeat what has already been written - have the courage to do your own thing and don't be afraid to do something different.”</p>
                                    <a href="/signup" class="btn akame-btn" data-animation="fadeInUp" data-delay="700ms">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Area Start -->
    <section class="akame-about-area section-padding-80-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="section-heading mb-80">
                        <h2>Hair Salon</h2>
                        <p>The House of Hair Salon &amp; Spa</p>
                        <span>About Us</span>
                    </div>
                </div>

                <!-- About Us Thumbnail -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="about-us-thumbnail mb-80">
                        <img src="img/bg-img/15.jpg" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-4">
                    <div class="about-us-content mb-80 pl-4">
                        <h3>Beautiful Hair Comes From A Legendary.</h3>
                        <p>“Working in a salon, you look at trends all day long. You’re looking at color all the time,what new products are coming out. You’re a part of the fashion industry,especially if you’re working in a higher-end salon.”</p>
                        <a href="#" class="btn akame-btn active mt-30">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top mt-3"></div>
    </div>

    <!-- Our Service Area Start -->
    <section class="akame-service-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Our Services</h2>
                        <p>The House of Hair Salon &amp; Spa, incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <img src="img/core-img/s1.png" alt="">
                        <h5>DROPSHIPER</h5>
                        <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="400ms">
                        <img src="img/core-img/s3.png" alt="">
                        <h5>FB ADS</h5>
                        <p>Consectetur adipisicing elit, sed doe eiusmod.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/core-img/s4.png" alt="">
                        <h5>ORGANIC MARKETING</h5>
                        <p>Nemo enim ipsam voluptatem quia voluptas</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-service-area mb-80 wow fadeInUp" data-wow-delay="800ms">
                        <img src="img/core-img/s3.png" alt="">
                        <h5>LANDING PAGE</h5>
                        <p>Ut enim ad minim veniam, quis trud exercitation...</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Service Area End -->

        <!-- CTA Thumbnail -->
        <div class="cta-thumbnail bg-img" style="background-image: url(img/bg-img/cta.png);"></div>
    </section>
    <!-- Call To Action Area End -->

@endsection