@extends('layouts.guest')
@section('content')
    <section class="slider-hero">
        <div class="overlay"></div>
        <div class="hero-slider">
            <div class="item">
                <div class="work">
                    <div class="img img2 d-flex align-items-center js-fullheight"
                        style="background-image:url(front/images/xbg_1.jpg.pagespeed.ic.GED4kbMP-V.jpg)">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6">
                                    <div class="text text-center">
                                        <span class="subheading">Save the World</span>
                                        <h1 class="mb-4">Make First Step</h1>
                                        <p class="mb-4">You can make first step by registering first to our system</p>
                                        <p><a href="{{ route('register') }}" class="btn btn-primary p-4 py-3">Get Started
                                                <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="work">
                    <div class="img d-flex align-items-center justify-content-center js-fullheight"
                        style="background-image: url(front/images/bg_2.jpg);">
                        <div class="container-xl">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-6">
                                    <div class="text text-center">
                                        <span class="subheading">Save the World</span>
                                        <h1 class="mb-4">Help Us to Solve Land Conflict</h1>
                                        <p class="mb-4">Land conflicts commonly become violent when linked to wider
                                            processes of political exclusion, social discrimination, economic
                                            marginalization, and a perception that peaceful action is no longer a viable
                                            strategy for change. .</p>
                                        <p><a href="{{ route('login') }}" class="btn btn-primary p-4 py-3">Get Started <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Services</span>
                    <h2 class="mb-2">Over <span>40K+</span> People Using our System</h2>
                </div>
            </div>
            <div class="row g-lg-2">
                <div class="col-lg d-flex align-items-stretch">
                    <div class="services" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon"><span class="flaticon-recycle"></span></div>
                        <div class="text">
                            <h2>Recyling</h2>
                            <p class="mb-0">Land recycling is the reuse of abandoned, vacant, or underused properties for redevelopment or repurposing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-flex align-items-stretch">
                    <div class="services" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon"><span class="flaticon-water"></span></div>
                        <div class="text">
                            <h2>Buy Land</h2>
                            <p class="mb-0">We have a range of affordable land that suits your needs. Easy Property Search. Buy or Rent Property..</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-flex align-items-stretch">
                    <div class="services" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon"><span class="flaticon-ecosystem"></span></div>
                        <div class="text">
                            <h2>Register Approval</h2>
                            <p class="mb-0">The sale agreement is drafted by the seller's lawyer and presented to the buyers advocate for approval.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-flex align-items-stretch">
                    <div class="services" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon"><span class="flaticon-solar-energy"></span></div>
                        <div class="text">
                            <h2>Keep Record</h2>
                            <p class="mb-0">Track all your land document and validity via our system.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-flex align-items-stretch">
                    <div class="services" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon"><span class="flaticon-save"></span></div>
                        <div class="text">
                            <h2>Save Money</h2>
                            <p class="mb-0">Look for the best price setand legit land. Avoid be conned!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-gallery ftco-section ftco-no-pb bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Project</span>
                    <h2 class="mb-4">Our Campaign</h2>
                </div>
            </div>
            <div class="row g-lg-0">
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="gallery-wrap d-lg-flex flex-lg-column-reverse">
                        <a href="front/images/gallery-1.jpg" class="img d-flex align-items-end justify-content-center glightbox"
                            style="background-image: url(front/images/gallery-1.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span></div>
                        </a>
                        <div class="text">
                            <span class="sub">Ecology</span>
                            <h2 class="mb-4">Ecological Friendly</h2>
                            <p>Far from the countries Vokalia and Consonantia.</p>
                            <div class="progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex raised-goal justify-content-between mb-3">
                                <span>Raised: <strong>$9800</strong></span>
                                <span class="goal">Goal: <strong>15000</strong></span>
                            </div>
                            <p class="mb-0"><a href="#" class="btn btn-primary">Donate Now!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="gallery-wrap">
                        <a href="front/images/gallery-1.jpg" class="img d-flex align-items-end justify-content-center glightbox"
                            style="background-image: url(front/images/gallery-2.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span></div>
                        </a>
                        <div class="text">
                            <span class="sub">Ecology</span>
                            <h2 class="mb-4">Planting more trees</h2>
                            <p>Let unite in making our planet green.</p>
                            <div class="progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex raised-goal justify-content-between mb-3">
                                <span>Raised: <strong>$9800</strong></span>
                                <span class="goal">Goal: <strong>15000</strong></span>
                            </div>
                            <p class="mb-0"><a href="#" class="btn btn-primary">Donate Now!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300"
                    data-aos-duration="1000">
                    <div class="gallery-wrap d-lg-flex flex-lg-column-reverse">
                        <a href="front/images/gallery-3.jpg" class="img d-flex align-items-end justify-content-center glightbox"
                            style="background-image: url(front/images/gallery-3.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span></div>
                        </a>
                        <div class="text">
                            <span class="sub">Water</span>
                            <h2 class="mb-4">Water Pollution</h2>
                            <p>Choose the best channels to dispose your sewage.</p>
                            <div class="progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex raised-goal justify-content-between mb-3">
                                <span>Raised: <strong>$9800</strong></span>
                                <span class="goal">Goal: <strong>15000</strong></span>
                            </div>
                            <p class="mb-0"><a href="#" class="btn btn-primary">Donate Now!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="gallery-wrap">
                        <a href="front/images/gallery-4.jpg" class="img d-flex align-items-end justify-content-center glightbox"
                            style="background-image: url(front/images/gallery-4.jpg);">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-search"></span></div>
                        </a>
                        <div class="text">
                            <span class="sub">Planting</span>
                            <h2 class="mb-4">Planting Trees</h2>
                            <p>Green enviroment, better life.</p>
                            <div class="progress-wrap">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="width:70%">
                                        <span>70%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex raised-goal justify-content-between mb-3">
                                <span>Raised: <strong>$9800</strong></span>
                                <span class="goal">Goal: <strong>15000</strong></span>
                            </div>
                            <p class="mb-0"><a href="#" class="btn btn-primary">Donate Now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-counter img" style="background-image: url(front/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 heading-section heading-section-white text-center mb-5" data-aos="fade-up"
                    data-aos-duration="1000">
                    <span class="subheading">Great Reviews for our services</span>
                    <h2 class="mb-0">Technical Statistics</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-heart"></span>
                        </div>
                        <h2 class="number"><small>$</small><span class="countup">60</span><small>M</small></h2>
                        <span class="caption">Fund Raised</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-ecosystem"></span>
                        </div>
                        <h2 class="number"><span class="countup">9200</span></h2>
                        <span class="caption">Completed Projects </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-donation"></span>
                        </div>
                        <h2 class="number"><span class="countup">5800</span></h2>
                        <span class="caption">Donation</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-charity"></span>
                        </div>
                        <h2 class="number"><span class="countup">2750</span></h2>
                        <span class="caption">Volunteer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Meet Our Volunteer</span>
                    <h2 class="mb-5">Our Volunteer</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(front/images/staff-1.jpg);">
                            </div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image:url(front/images/xstaff-2.jpg.pagespeed.ic.Y5dISEODMc.jpg)"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jeffrey Rockenson</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image:url(front/images/xstaff-3.jpg.pagespeed.ic._IfZcKYoMQ.jpg)"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch"
                                style="background-image:url(front/images/xstaff-4.jpg.pagespeed.ic.6AuFgYdSNm.jpg)"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#"
                                            class="d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-white">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="img img-2 w-100"
                        style="background-image:url(front/images/xabout.jpg.pagespeed.ic.i_WeYxyAmy.jpg)">
                    </div>
                </div>
                <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <div class="mt-0 my-lg-5 py-5">
                        <h2 class="mb-4">Do You Care Our Mother Earth Like We Do?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="fund-raised mt-lg-4 d-flex align-items-center">
                            <div class="icon">
                                <span class="flaticon-heart"></span>
                            </div>
                            <div class="text">
                                <h4>$920,000</h4>
                                <span>Funds raised by 1200 people</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
