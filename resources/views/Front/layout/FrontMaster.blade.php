<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.iamabdus.com/kidz/2.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 12:33:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- Site Tittle -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ICT SCHOOL Socaity</title>

  <!-- Plugins css Style -->

  {{ Html::style('assets/plugins/font-awesome/css/font-awesome.min.css')}}
  {{ Html::style('assets/plugins/no-ui-slider/nouislider.min.css')}}
  {{ Html::style('assets/plugins/owl-carousel/owl.carousel.min.css')}}
  {{ Html::style('assets/plugins/owl-carousel/owl.theme.default.min.css')}}
  {{ Html::style('assets/plugins/fancybox/jquery.fancybox.min.css')}}
  {{ Html::style('assets/plugins/isotope/isotope.min.css')}}
  {{ Html::style('assets/plugins/animate/animate.css')}}
  {{ Html::style('assets/plugins/select2/css/select2.min.css')}}
  {{ Html::style('assets/plugins/revolution/css/settings.css')}}
  {{ Html::style('assets/plugins/revolution/css/layers.css')}}
  {{ Html::style('assets/plugins/revolution/css/navigation.css')}}
  <!-- Fonts -->
  {{ Html::style('https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700')}}
  <!-- Custom css -->
  {{ Html::style('assets/css/kidz.css')}}
  
  <!-- Favicon -->
  {{ Html::style('assets/img/favicon.png')}}
  {{ Html::style('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css')}}



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="{{URL::asset('http://parsleyjs.org/dist/parsley.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="{{URL::asset('https://www.googletagmanager.com/gtag/js?id=UA-71155940-5')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
    <script type="3160fe0de5fefd8beef53e99-text/javascript">
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-71155940-5');
    </script>
    <script src="{{URL::asset('assets/jquery.min.js')}}"></script>
<script src="{{URL::asset('assets/map.js')}}"></script>
<style>
    
    #slmap{
        cursor: pointer;
    }
    #slmap path:hover{
        fill:#4caf50;
    }
</style>
<style>
    .box14{position:relative}
    .box15,.box17,.box18{box-shadow:0 0 5px #7e7d7d;text-align:center}
    .box14:before{content:"";width:100%;height:100%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;opacity:0;transition:all .35s ease 0s}
    .box14:hover:before{opacity:1}
    .box14 img{width:100%;height:auto}
    .box14 .box-content{width:90%;height:90%;position:absolute;top:5%;left:5%}
    .box14 .box-content:after,.box14 .box-content:before{content:"";position:absolute;top:0;left:0;bottom:0;right:0;opacity:0;transition:all .7s ease 0s}
    .box14 .box-content:before{border-bottom:1px solid rgba(255,255,255,.5);border-top:1px solid rgba(255,255,255,.5);transform:scale(0,1);transform-origin:0 0 0}
    .box14 .box-content:after{border-left:1px solid rgba(255,255,255,.5);border-right:1px solid rgba(255,255,255,.5);transform:scale(1,0);transform-origin:100% 0 0}
    .box14:hover .box-content:after,.box14:hover .box-content:before{opacity:1;transform:scale(1);transition-delay:.15s}
    .box14 .title{font-size:21px;font-weight:700;color:#fff;margin:15px 0;opacity:0;transform:translate3d(0,-50px,0);transition:transform .5s ease 0s}
    .box14:hover .title{opacity:1;transform:translate3d(0,0,0)}
    .box14 .post{font-size:14px;color:#fff;padding:10px;background:#d79719;opacity:0;border-radius:0 19px;transform:translate3d(0,-50px,0);transition:all .7s ease 0s}
    .box14 .icon,.box15 .icon{padding:0;list-style:none}
    .box14:hover .post{opacity:1;transform:translate3d(0,0,0);transition-delay:.15s}
    .box14 .icon{width:100%;margin:0;position:absolute;bottom:-10px;left:0;opacity:0;z-index:1;transition:all .7s ease 0s}
    .box14:hover .icon{bottom:20px;opacity:1;transition-delay:.15s}
    .box14 .icon li a{display:block;width:40px;height:40px;line-height:40px;border:1px solid #fff;border-radius:0 16px;font-size:14px;color:#fff;margin-right:5px;transition:all .4s ease 0s}
    .box14 .icon li a:hover{background:#d79719;border-color:#d79719}
    @media only screen and (max-width:990px){.box14{margin-bottom:30px}
    }
    </style>
</head>

<body id="body" class="up-scroll">


  
  <!-- ====================================
  ——— PRELOADER
  ===================================== -->

@include('Front.layout.nav')
  <div class="main-wrapper home">

@yield('content')
</div> <!-- element wrapper ends -->

<!-- ====================================
      ———	FOOTER
      ===================================== -->
<footer class="footer-bg-img">
        <!-- Footer Color Bar -->
        <div class="color-bar">
          <div class="container-fluid">
            <div class="row">
              <div class="col color-bar bg-warning"></div>
              <div class="col color-bar bg-danger"></div>
              <div class="col color-bar bg-success"></div>
              <div class="col color-bar bg-info"></div>
              <div class="col color-bar bg-purple"></div>
              <div class="col color-bar bg-pink"></div>
              <div class="col color-bar bg-warning d-none d-md-block"></div>
              <div class="col color-bar bg-danger d-none d-md-block"></div>
              <div class="col color-bar bg-success d-none d-md-block"></div>
              <div class="col color-bar bg-info d-none d-md-block"></div>
              <div class="col color-bar bg-purple d-none d-md-block"></div>
              <div class="col color-bar bg-pink d-none d-md-block"></div>
            </div>
          </div>
        </div>
      
        <div class="pt-8 pb-7  bg-repeat" style="background-image: url({{URL::asset('assets/img/background/footer-bg-img-1.png')}});">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-lg-3 col-xs-12">
                <a class="mb-6 d-block" href="index-2.html">
                  <img class="img-fluid d-inline-block w-50 lazyestload" data-src="{{URL::asset('assets/img/logo-footer.png')}}" src="{{URL::asset('assets/img/logo-footer.png')}}">
                </a>
                <p class="mb-6">Local groups of school students with a passion for technology working together to shape the school ICT landscape in Sri Lanka and worldwide.</p>
                
              </div>
      
              <div class="col-sm-6 col-lg-3 col-xs-12">
                <h4 class="section-title-sm font-weight-bold text-white mb-6">SCHOOL ICT SOCIETY</h4>
                <ul class="list-unstyled">
                  <li class="mb-4">
                    <a href="index-2.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>What is School ICT Society
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="about-us.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>How to Become a Member
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="index-v2.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>List of Societies
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="index-v3.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Register a Society
                    </a>
                  </li>
                </ul>
              </div>
      
              <div class="col-sm-6 col-lg-3 col-xs-12">
                <h4 class="section-title-sm font-weight-bold text-white mb-6">RECENT EVENTS</h4>
                <ul class="list-unstyled list-item-border-bottom">
                  <li class="mb-4 pb-4">
                    <div class="media">
                      <a class="mr-2" href="blog-single-left-sidebar.html">
                        <img class="rounded-lg w-100 border-warning border-2 d-block" data-src="{{URL::asset('assets/img/blog/blog-sm-img5.jpg')}}"
                          src="{{URL::asset('assets/img/blog/blog-sm-img5.jpg')}}" alt="blog-sm-img5.jpg">
                      </a>
                      <div class="media-body">
                        <h5 class="line-hight-16 mb-1">
                          <a class="font-base font-size-14" href="blog-single-left-sidebar.html">A Clean Website Gives More Experience To The
                            Visitors</a>
                        </h5>
                        <time class="text-white">July 7 - 2018</time>
                      </div>
                    </div>
                  </li>
      
                  <li class="mb-4 pb-4">
                    <div class="media">
                      <a class="mr-2" href="blog-single-left-sidebar.html">
                        <img class="rounded-lg w-100 border-success border-2 d-block" data-src="{{URL::asset('assets/img/blog/blog-sm-img-12.jpg')}}"
                          src="{{URL::asset('assets/img/blog/blog-sm-img-12.jpg')}}" alt="blog-sm-img-12.jpg">
                      </a>
                      <div class="media-body">
                        <h5 class="line-hight-16 mb-1">
                          <a class="font-base font-size-14" href="blog-single-left-sidebar.html">Duis aute irure dolor in reprehenderit
                            in voluptate.</a>
                        </h5>
                        <time class="text-white">Jun 7 - 2018</time>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
      
              <div class="col-sm-6 col-lg-3 col-xs-12">
                <h4 class="section-title-sm font-weight-bold text-white mb-6">RESOURCE POCKET</h4>
                <ul class="list-unstyled">
                  <li class="mb-4">
                    <a href="index-2.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Digital Education
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="about-us.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Technology
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="index-v2.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Innovation
                    </a>
                  </li>
                  <li class="mb-4">
                    <a href="index-v3.html">
                      <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Entrepreneurship
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      
        <!-- Copy Right -->
        <div class="copyright">
          <div class="container">
            <div class="row py-4 align-items-center">
              <div class="col-sm-12 col-xs-7 order-7 align-content-lg-center">
                <p class="copyright-text align-content-center text-center">
                  © All rights reserved Ministry Of Education | Powered by ICTA</p>
              </div>
      
              <div align="right" class="col-sm-8 col-xs-20">
                <img src="{{URL::asset('assets/img/logo.png')}}" width="90" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="{{URL::asset('assets/img/ICTA.png')}}" width="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="{{URL::asset('assets/img/BRANCH-LOGO-2.png')}}" width="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="{{URL::asset('assets/img/srilankaLogo.png')}}" width="30">
            </div>
          </div>
        </div>
      </footer>

<!-- Modal Login -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="bg-warning rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ml-2">Login</h3>
      </div>

      <div class="border rounded-bottom-md border-top-0">
        <div class="p-3">
          <form action="#" method="POST" role="form">
            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="User name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Password" required="">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-danger text-uppercase w-100">Log In</button>
            </div>

            <div class="form-group text-center text-secondary mb-0">
              <a class="text-danger" href="#">Forgot password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Create Account -->
<div class="modal fade" id="modal-createAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm rounded" role="document">
    <div class="modal-content">
      <div class="bg-warning rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ml-2">Create An Account</h3>
      </div>

      <div class="border rounded-bottom-md border-top-0">
        <div class="p-3">
          <form action="#" method="POST" role="form">
            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="Name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="User name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="Phone" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Password" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Re-Password" required="">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-danger text-uppercase w-100">Register</button>
            </div>

            <div class="form-group text-center text-secondary mb-0">
              <p class="mb-0">Allready have an account? <a class="text-danger" href="#">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Enroll -->
<div class="modal fade" id="modal-enrolAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm rounded" role="document">
    <div class="modal-content">
      <div class="bg-pink rounded-top p-2">
        <h3 class="text-white font-weight-bold mb-0 ml-2">Create An Account</h3>
      </div>

      <div class="border rounded-bottom-md border-top-0">
        <div class="p-3">
          <form action="#" method="POST" role="form">
            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="Name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="User name" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="text" class="form-control border" placeholder="Phone" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Password" required="">
            </div>

            <div class="form-group form-group-icon">
              <input type="password" class="form-control border" placeholder="Re-Password" required="">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-pink text-uppercase text-white w-100">Register</button>
            </div>

            <div class="form-group text-center text-secondary mb-0">
              <p class="mb-0">Allready have an account? <a class="text-pink" href="#">Log in</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Products -->
<div class="modal fade" id="modal-products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header border-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <img class="img-fluid d-block mx-auto" src="{{URL::asset('assets/img/products/products-preview01.jpg')}}" alt="preview01.jpg">
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="product-single">
              <h1>Barbie Racing Car</h1>

              <span class="pricing font-size-55">$50 <del>$60</del></span>

              <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>

              <div class="add-cart mb-0">
                <div class="count-input">
                  <input class="quantity btn-primary" type="text" value="1">
                  <a class="incr-btn incr-up" data-action="decrease" href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                  <a class="incr-btn incr-down" data-action="increase" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                </div>
                <button type="button" class="btn btn-danger text-uppercase" onclick="if (!window.__cfRLUnblockHandlers) return false; location.href='product-cart.html';" data-cf-modified-3160fe0de5fefd8beef53e99-="">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--scrolling-->
<div class="scrolling">
  <a href="#pageTop" class="back-to-top" id="back-to-top" style="opacity: 1;">
    <i class="fa fa-arrow-up" aria-hidden="true"></i>
  </a>
</div>

<!-- Javascript -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/fancybox/jquery.fancybox.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/isotope/isotope.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/syotimer/jquery.syotimer.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/no-ui-slider/nouislider.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/lazyestload/lazyestload.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/velocity/velocity.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/images-loaded/js/imagesloaded.pkgd.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>

<!-- Load revolution slider only on Local File Systems. The following part can be removed on Server -->
<!-- 
<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
-->

<script src="{{URL::asset('assets/plugins/wow/wow.min.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<script src="{{URL::asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>

<script src="{{URL::asset('assets/js/kidz.js')}}" type="3160fe0de5fefd8beef53e99-text/javascript"></script>
<link href="{{URL::asset('assets/options/optionswitch.css')}}" rel="stylesheet">
<script src="{{URL::asset('assets/options/optionswitcher.js" type="3160fe0de5fefd8beef53e99-text/javascript')}}"></script>
<script src="{{URL::asset('cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="3160fe0de5fefd8beef53e99-|49" defer=""></script></body>
<script async defer src="{{URL::asset('https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2')}}"></script>  
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<!-- Mirrored from themes.iamabdus.com/kidz/2.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 12:34:17 GMT -->
</html>

