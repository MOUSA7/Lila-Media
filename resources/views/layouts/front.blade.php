<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="الخدمات الاعلانية , تصميم, " />
    <meta name="description" content="شركة ليلي ميديا للخدمات الاعلانية " />
    <title>ليلي ميديا</title>
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap-grid.rtl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/bootstrap.rtl.css')}}">
    <link href="{{asset('assets/front/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/front/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="https://www.queness.com/resources/html/simple-portfolio-page/js/jquery.mixitup.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/front/css/lila-style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(){

            window.addEventListener('scroll', function() {

                if (window.scrollY > 200) {
                    document.getElementById('navbar_top').classList.add('fixed-top');
                    // add padding top to show content behind navbar
                    navbar_height = document.querySelector('.navbar').offsetHeight;
                    document.body.style.paddingTop = navbar_height + 'px';
                } else {
                    document.getElementById('navbar_top').classList.remove('fixed-top');
                    // remove padding top from body
                    document.body.style.paddingTop = '0';
                }
            });
        });
        // DOMContentLoaded  end
    </script>
    <script type="text/javascript">
        $(function () {

            var filterList = {

                init: function () {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixItUp({
                        selectors: {
                            target: '.portfolio',
                            filter: '.filter'
                        },
                        load: {
                            filter: ' .app, .card, .icon, .logo, .web'
                        }
                    });

                }

            };

            // Run the show!
            filterList.init();


        });
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="{{asset('assets/front/js/wow.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/front/css/animate.css')}}">
    <script>
        (function() {
            var Util,
                __bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

            Util = (function() {
                function Util() {}

                Util.prototype.extend = function(custom, defaults) {
                    var key, value;
                    for (key in custom) {
                        value = custom[key];
                        if (value != null) {
                            defaults[key] = value;
                        }
                    }
                    return defaults;
                };

                Util.prototype.isMobile = function(agent) {
                    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(agent);
                };

                return Util;

            })();

            this.WOW = (function() {
                WOW.prototype.defaults = {
                    boxClass: 'wow',
                    animateClass: 'animated',
                    offset: 0,
                    mobile: true
                };

                function WOW(options) {
                    if (options == null) {
                        options = {};
                    }
                    this.scrollCallback = __bind(this.scrollCallback, this);
                    this.scrollHandler = __bind(this.scrollHandler, this);
                    this.start = __bind(this.start, this);
                    this.scrolled = true;
                    this.config = this.util().extend(options, this.defaults);
                }

                WOW.prototype.init = function() {
                    var _ref;
                    this.element = window.document.documentElement;
                    if ((_ref = document.readyState) === "interactive" || _ref === "complete") {
                        return this.start();
                    } else {
                        return document.addEventListener('DOMContentLoaded', this.start);
                    }
                };

                WOW.prototype.start = function() {
                    var box, _i, _len, _ref;
                    this.boxes = this.element.getElementsByClassName(this.config.boxClass);
                    if (this.boxes.length) {
                        if (this.disabled()) {
                            return this.resetStyle();
                        } else {
                            _ref = this.boxes;
                            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                box = _ref[_i];
                                this.applyStyle(box, true);
                            }
                            window.addEventListener('scroll', this.scrollHandler, false);
                            window.addEventListener('resize', this.scrollHandler, false);
                            return this.interval = setInterval(this.scrollCallback, 50);
                        }
                    }
                };

                WOW.prototype.stop = function() {
                    window.removeEventListener('scroll', this.scrollHandler, false);
                    window.removeEventListener('resize', this.scrollHandler, false);
                    if (this.interval != null) {
                        return clearInterval(this.interval);
                    }
                };

                WOW.prototype.show = function(box) {
                    this.applyStyle(box);
                    return box.className = "" + box.className + " " + this.config.animateClass;
                };

                WOW.prototype.applyStyle = function(box, hidden) {
                    var delay, duration, iteration;
                    duration = box.getAttribute('data-wow-duration');
                    delay = box.getAttribute('data-wow-delay');
                    iteration = box.getAttribute('data-wow-iteration');
                    return box.setAttribute('style', this.customStyle(hidden, duration, delay, iteration));
                };

                WOW.prototype.resetStyle = function() {
                    var box, _i, _len, _ref, _results;
                    _ref = this.boxes;
                    _results = [];
                    for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                        box = _ref[_i];
                        _results.push(box.setAttribute('style', 'visibility: visible;'));
                    }
                    return _results;
                };

                WOW.prototype.customStyle = function(hidden, duration, delay, iteration) {
                    var style;
                    style = hidden ? "visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;" : "visibility: visible;";
                    if (duration) {
                        style += "-webkit-animation-duration: " + duration + "; -moz-animation-duration: " + duration + "; animation-duration: " + duration + ";";
                    }
                    if (delay) {
                        style += "-webkit-animation-delay: " + delay + "; -moz-animation-delay: " + delay + "; animation-delay: " + delay + ";";
                    }
                    if (iteration) {
                        style += "-webkit-animation-iteration-count: " + iteration + "; -moz-animation-iteration-count: " + iteration + "; animation-iteration-count: " + iteration + ";";
                    }
                    return style;
                };

                WOW.prototype.scrollHandler = function() {
                    return this.scrolled = true;
                };

                WOW.prototype.scrollCallback = function() {
                    var box;
                    if (this.scrolled) {
                        this.scrolled = false;
                        this.boxes = (function() {
                            var _i, _len, _ref, _results;
                            _ref = this.boxes;
                            _results = [];
                            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                box = _ref[_i];
                                if (!(box)) {
                                    continue;
                                }
                                if (this.isVisible(box)) {
                                    this.show(box);
                                    continue;
                                }
                                _results.push(box);
                            }
                            return _results;
                        }).call(this);
                        if (!this.boxes.length) {
                            return this.stop();
                        }
                    }
                };

                WOW.prototype.offsetTop = function(element) {
                    var top;
                    top = element.offsetTop;
                    while (element = element.offsetParent) {
                        top += element.offsetTop;
                    }
                    return top;
                };

                WOW.prototype.isVisible = function(box) {
                    var bottom, offset, top, viewBottom, viewTop;
                    offset = box.getAttribute('data-wow-offset') || this.config.offset;
                    viewTop = window.pageYOffset;
                    viewBottom = viewTop + this.element.clientHeight - offset;
                    top = this.offsetTop(box);
                    bottom = top + box.clientHeight;
                    return top <= viewBottom && bottom >= viewTop;
                };

                WOW.prototype.util = function() {
                    return this._util || (this._util = new Util());
                };

                WOW.prototype.disabled = function() {
                    return !this.config.mobile && this.util().isMobile(navigator.userAgent);
                };

                return WOW;

            })();

        }).call(this);


        wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100
            }
        );
        wow.init();

    </script>

</head>
<body>
<section class="main-header">
    <div class="inner-header  main-bg">
        <nav id="navbar_top" class="navbar-expand-lg navbar-dark wow fadeInDown animated">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="{{asset('assets/front/img/white-logo.png')}}"/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}"> الرئيسية </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about')}}"> عن الشركة </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('services')}}"> خدماتنا </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('projects')}}"> أعمالنا </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact')}}"> اتصل بنا </a></li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <button class="btn btn-primary navbar-btn btn-rounded waves-effect waves-light btn btn-secondary" value="" style="">اطلب خدمتك</button>
                            </a></li>

                    </ul>

                </div> <!-- navbar-collapse.// -->

            </div> <!-- container-fluid.// -->
        </nav>
       @yield('container')
    </div>
    <div class="curve-bg">
    </div>



</section>
@yield('content')
<footer>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 wow fadeInDown animated" data-wow-delay="0.2s">
                    <div class="f-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/front/img/footer-logo.png')}}" height="142" width="177"/>
                        </a>
                    </div>

                    <div class="social-link">
                        <a href="#">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInDown animated" data-wow-delay="0.4s">
                    <h5 class="text-white">القائمة الرئيسية</h5>
                    <ul>
                        <li>
                            <a href="#">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                عن الشركة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                خدماتنا
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                اعمالنا
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3 wow fadeInDown animated" data-wow-delay="0.6s">
                    <h5 class="text-white"> الدعم والتواصل</h5>
                    <ul>
                        <li>
                            <a href="#">
                                الاسئلة الشائعة
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                سياسة الخصوصية
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                اتصل بنا
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-3 wow fadeInDown animated" data-wow-delay="0.8s">
                    <h5 class="text-white"> الدعم والتواصل</h5>
                    <p  class="text-white">
                        <i class="bi bi-envelope"></i>
                        info@bcci.org.sa
                    </p>
                    <p  class="text-white">
                        <i class="bi bi-phone"></i>
                        0177255121
                    </p>
                    <p  class="text-white">
                        <i class="bi bi-geo-alt"></i>
                        الباحة طريق شهبة ص.ب 311
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <span>
            جميع الحقوق محفوظة لشركة ليلي ميديا @ 2021
        </span>
    </div>
</footer>
<script src="{{asset('assets/front/js/bootstrap.bundle.min.js')}}"></script>


</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

