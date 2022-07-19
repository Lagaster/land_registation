<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/ecogreen/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 06:18:29 GMT -->

<head>
    <title>Land Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet"
        href="/front/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bdatepicker.min.css%2bstyle.css%2cMcc.PdVG_IRYQb.css.pagespeed.cf.vrCNyNefWk.css" />
    <script nonce="807f13bb-f9fc-45cc-94fd-54e6685183e7">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON
                        .stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body>
    {{-- <div class="top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md col-xl-4 d-flex align-items-center mb-4 mb-md-0">
                    <a class="navbar-brand align-items-center" href="index-2.html">
                        Land<small>Register</small>
                        <span>Environment Safe</span>
                    </a>
                </div>
                <div class="col-md d-flex align-items-center mb-2 mb-md-0">
                    <div class="con d-flex">
                        <div class="icon"><span class="ion-ios-paper-plane"></span></div>
                        <div class="text">
                            <span>Email:</span>
                            <strong>@<a href="#"
                                    class="__cf_email__"
                                    data-cfemail="375e59515877525a565e5b1954585a">[email&#160;protected]</a></strong>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-center mb-2 mb-md-0">
                    <div class="con d-flex">
                        <div class="icon"><span class="fa fa-phone"></span></div>
                        <div class="text">
                            <span>Call Us</span>
                            <strong>+2 392 3929 210</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex align-items-center mb-2 mb-md-0">
                    <div class="con d-flex">
                        <div class="icon"><span class="ion-ios-map"></span></div>
                        <div class="text">
                            <span>Location</span>
                            <strong>San Francisco, California, USA</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <nav class="navbar navbar-expand-lg  ftco-navbar-light">
        <div class="container-xl aside-stretch">
            <a href="{{ route('login') }}" class="btn-custom order-lg-last"><span class="flaticon-heart me-2"></span>Login Now!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active ps-xl-0" href="{{ route('landing-page') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about-page') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact-us-page') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
   @yield('content')

    <section class="ftco-intro-2 img" style="background-image: url(front/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-8 d-flex align-items-center">
                    <div>
                        <span class="subheading">Newsletter</span>
                        <h1 class="mb-md-0 mb-4">Subscribe for Newsletter</h1>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-white py-md-3 py-3 px-md-5 px-4">Subscribe
                            now!</a></p>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer img" style="background-image:url(front/images/xbg_1.jpg.pagespeed.ic.GED4kbMP-V.jpg)">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row mb-5 justify-content-between">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand align-items-center" href="index-2.html">
                                Land<small>Registration</small>
                                <span>Land is Life</span>
                            </a>
                        </h2>
                        <p>Making your lifes better than yesterdays.
                        </p>
                        <ul class="ftco-footer-social mt-4">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <div class="d-md-flex">
                            <ul class="list-unstyled w-100">
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Recycling</a></li>
                                <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Water
                                        Refine</a></li>
                                <li><a href="#"><span
                                            class="ion ion-ios-arrow-round-forward me-2"></span>Ecosystem</a></li>
                                <li><a href="#"><span class="ion ion-ios-arrow-round-forward me-2"></span>Solar
                                        Enerfy</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Posts</h2>

                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img img rounded" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <div class="meta">
                                    <div><a href="#"><span class="fa fa-calendar"></span> Feb. 22, 2021</a>
                                    </div>
                                    <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Ecological System Responsible for Green
                                        Energy</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Thika Town center</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+245 700 000 000</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="462f282029063f29333422292b272f286825292b">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="font-size: 14px;">Copyright &copy;
                            <script data-cfasync="false"
                                src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="/front/js/bootstrap.bundle.min.js"></script>
    <script src="/front/js/tiny-slider.js"></script>
    <script src="/front/js/glightbox.min.js%2baos.js.pagespeed.jc.oqGo1u1mfc.js"></script>
    <script>
        eval(mod_pagespeed_CV39MKu3HF);
    </script>
    <script>
        eval(mod_pagespeed_vhdXjl1IDh);
    </script>
    <script src="/front/js/datepicker.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.I-jg4TjNhh.js"></script>
    <script>
        eval(mod_pagespeed_xUnvSmUu81);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script>
        eval(mod_pagespeed_HYqj6uqHhr);
    </script>
    <script>
        eval(mod_pagespeed_xnPccsuHg1);
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"72d156fb79319cc4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/ecogreen/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2022 06:19:29 GMT -->

</html>
