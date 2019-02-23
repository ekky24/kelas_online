@extends('akame.master')

@section('content')

<!-- Blog Details Area Start -->
    <section class="akame-blog-details-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="post-thumbnail mb-50">
                        <img src="/img/bg-img/42.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10 col-md-10 col-lg-9">
                    <div class="blog-details-text">
                        <p><span>S</span> <span>tress has nowadays become a part of people’s lives. To relieve this stress, people have greater than ever expectations from personal care services they get. If you are a Salon &amp; Spa owner and think that your customer is</span></p>
                        
                        <p>{!! $detail_kelas->konten !!}</p>

                        <p>coming to your place only for a haircut, skin treatment, or just a manicure, you are wrong. People now consider their visit to the Salon &amp; Spa as not just a beautification process but a spiritual getaway. You don’t know which customer entered your Salon &amp; Spa to get a pedicure and their only intent was to uplift their soul and feel good about themselves.</p>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                        <p>How your staff greets them, ambience of the waiting room, how well you understand customer requirements, and then precisely delivering what they wanted, everything is an experience.</p>

                        <p>It’s time that you build your Salon &amp; Spa like a getaway for your customers whenever they feel stressed in life. Go an extra mile to make your customers feel great about themselves. Give your opinions on what is good for them and what’s not, but be a good listener. </p>
                    </div>
                </div>
            </div>
            <center><a href="#" class="btn akame-btn active" data-animation="fadeInUp" data-delay="700ms">Download</a></center>
        </div>
    </section>
    <!-- Blog Details Area End -->

@endsection