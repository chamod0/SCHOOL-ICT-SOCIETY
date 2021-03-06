@extends('Front.layout.FrontMaster')

@section('content')

 <!-- ====================================
  ——— PRELOADER
  ===================================== -->
  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader">
        <span class="dot dot-1"></span>
        <span class="dot dot-2"></span>
        <span class="dot dot-3"></span>
        <span class="dot dot-4"></span>
      </div>
    </div>
  </div>
<!--====================================
——— BEGIN MAIN SLIDE LIST
===================================== -->
<section class="rev_slider_wrapper fullwidthbanner-container over" dir="ltr">

    <!-- the ID here will be used in the JavaScript below to initialize the slider -->
    <div id="rev_slider_1" class="rev_slider rev-slider-kidz-school" data-version="5.4.5" style="display:none">
  
          <ul>
              <!-- SLIDE 1  -->
              <li data-transition="fade">
                  <img src="assets/img/banner/slider-1/img-1.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS -->
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
              "delay":1600,"speed":1000,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['-75', '-75', '-65', '-45']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="auto"
            data-basealign="grid"
            data-responsive_offset="off"
            style="z-index: 1;">
              <span class="text-white">SCHOOL ICT SOCIETY</span> 
          </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','500','500','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
            
            Local groups of school students with a passion for technology working together to shape the school ICT landscape in Sri Lanka and worldwide.
          </div>
          
          <!-- LAYER NR. 3 -->
          <a href="/SISRegister"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
              "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
              {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['90', '80', '70', '55']"
            data-width="['auto']"
            data-height="['auto']"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            style="text-transform: uppercase; z-index: 1;">
             Join 
          </a>
  
              </li>
  
              <!-- SLIDE 2  -->
              <li data-transition="fade">
                  <img src="assets/img/banner/slider-1/img-2.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS-->
  
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
            "delay":1600,"speed":1000,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['-75', '-75', '-65', '-45']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="auto"
            data-basealign="grid"
            data-responsive_offset="off"
            style="z-index: 1;">
              Sell <span class="text-white">Kids Products</span>
          </div>
        
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','400','400','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="center"
            data-basealign="grid"
            data-responsive_offset="on"
            data-responsive="on"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              All ecommerce features are included with KIDZ, Build your site.
          </div>
        
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
            "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['90', '80', '70', '55']"
            data-width="['auto']"
            data-height="['auto']"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            style="text-transform: uppercase; z-index: 1;">
              Join
          </a>
  
              </li>
  
              <!-- SLIDE 3 -->
              <li data-transition="fade">
                  <img src="assets/img/banner/slider-1/img-3.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS -->
  
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
            "delay":1600,"speed":1200,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['-75', '-75', '-65', '-60']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="none"
            data-height="auto"
            data-basealign="grid"
            data-textAlign="['left','left','left','right']"
            data-type="text"
            data-responsive_offset="on"
            style="z-index: 1;">
              Impress Your <span class="text-white">Clients</span>
          </div>
       
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','400','400','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="['left', 'left', 'left', 'right']"
            data-basealign="grid"
            data-responsive_offset="on"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              Kidz is created for a better impression on your client's mind.
          </div>
          
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
            "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
  
            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['90', '80', '75', '75']"
            data-width="none"
            data-height="none"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-basealign="grid"
            data-textAlign="['left','left','left','right']"
            data-responsive_offset="on"
            data-type="text"
            style="text-transform: uppercase; z-index: 1;">
              Join
          </a>
          
              </li>
  
              
              
          </ul>
    </div>
  </section>
  
  <!-- ====================================
  ———	BOX SECTION
  ===================================== -->
  <section class="d-none d-sm-block section-top">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-sm-3">
                  <a href="#mentor">
                      <div class="card bg-warning card-hover scrolling">
                          <div class="card-body text-center p-0">
                              <div class="card-icon-border-large border-warning">
                                  <i class="fa fa-trophy" aria-hidden="true"></i>
                              </div>
                              <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">Become a SIS<br> Mentor</h2>
                              <a href="#mentor" class="btn-scroll-down d-block pb-4 pb-lg-5">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                          </div>
                      </div>
                  </a>
        </div>
  
        <div class="col-sm-3">
                  <a href="#Ambassador">
                      <div class="card bg-success card-hover scrolling">
                          <div class="card-body text-center p-0">
                              <div class="card-icon-border-large border-success">
                                  <i class="fa fa-rocket" aria-hidden="true"></i>
                              </div>
                              <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">Become a SIS Ambassador</h2>
                              <a href="#Ambassador" class="btn-scroll-down d-block pb-4 pb-lg-5">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                          </div>
                      </div>
                  </a>
        </div>
  
        <div class="col-sm-3">
                  <a href="#gallery">
                      <div class="card bg-danger card-hover scrolling">
                          <div class="card-body text-center p-0">
                              <div class="card-icon-border-large border-danger">
                                  <i class="fa fa-calendar-o" aria-hidden="true"></i>
                              </div>
                              <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">School ICT Society Events</h2>
                             
                <a href="#gallery" class="btn-scroll-down d-block pb-4 pb-lg-5">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
                          </div>
                      </div>
                  </a>
        </div>
  
        <div class="col-sm-3">
                  <a href="#blog">
                      <div class="card bg-info card-hover scrolling">
                          <div class="card-body text-center p-0">
                              <div class="card-icon-border-large border-info">
                                  <i class="fa fa-users" aria-hidden="true"></i>
                              </div>
                              <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">School ICT <br>Societies</h2>
                              <a href="#blog" class="btn-scroll-down d-block pb-4 pb-lg-5">
                                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                              </a>
                          </div>
                      </div>
                  </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ====================================
———	WHAT IS SIS
===================================== -->	  
<section class="py-0 py-md-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-xs-12 order-md-1">
          <div class="image mb-0 mb-md-0 wow fadeInUp">
            <img class="img-fluid rounded" src="assets/img/ICTA2123.png" width="700">
          </div>
        </div>
  
        <div class="col-sm-6 col-xs-12 wow fadeInUp">
          <div class="">
            <div class="section-title mb-4 ">
              
              <h2 class="text-danger pl-0">WHAT IS SCHOOL ICT SOCIETY?</h2>
            </div>
            <p class="text-dark font-size-15 mb-4">School ICT Society mission is to uplift the knowledge and enable benefits <br>of Digital Technologies to the school community.</p><p> A School ICT Society is a group of students with a passion for technology who <br>meet regularly to advance this mission by building school community.</p><p>The School ICT Society program intends to work in collaboration with relevant stakeholders to facilitate promoting digital technologies and education at all <br>levels of education and made younger generation more accessible to global<br> digital opportunities.</p><p>It will also assist to bridge the gaps in dissemination of knowledge and<br> contribute to minimize the digital divide among future generation.</p>
        <div>
        <a href="blog-grid.html" class="btn btn-danger text-uppercase">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ====================================
  ———	HOME FEATURE
  ===================================== -->
  <section class="pt-9 pb-3 py-md-4">
    <div class="container">
      <div class="section-title justify-content-center mb-4 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">FOCUS AREA</h2>
        <span class="shape shape-right bg-info"></span>
      </div>
  
      <div class="row wow fadeInUp">
              <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
                      <div class="media-icon-large bg-warning mr-xl-4">
                          <i class="fa fa-bullhorn" aria-hidden="true"></i>
                      </div>
  
            <div class="media-body">
              <h3 class="text-warning">RAISE AWARENESS</h3>
              <p>Raise awareness through exposure to new digital technologies among school community</p>
            </div>
          </div>
        </div>
  
              <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
                      <div class="media-icon-large bg-success mr-xl-4">
                          <i class="fa fa-laptop" aria-hidden="true"></i>
                      </div>
  
            <div class="media-body">
              <h3 class="text-success">DIGITAL LEARNING & EDUCATION</h3>
              <p>Promote Digital Technology usage in Learning and Education</p>
            </div>
          </div>
        </div>
  
              <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
                      <div class="media-icon-large bg-danger mr-xl-4">
                          <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                      </div>
            <div class="media-body">
              <h3 class="text-danger">RESEARCH & INNOVATION</h3>
              <p>Encourage Research and promote Innovation</p>
            </div>
          </div>
        </div>
  
              <!-- Media -->
        <div class="col-sm-6 col-lg-4 col-xs-12">
          <div class="media mb-6">
                      <div class="media-icon-large bg-info mr-xl-4">
                          <i class="fa fa-fire  free-camp" aria-hidden="true"></i>
                      </div>
            <div class="media-body">
              <h3 class="text-info">ENTREPRENEURSHIP</h3>
              <p>Promote Entrepreneurship and Inspire them to become innovative industry leaders</p>
            </div>
          </div>
        </div>
  
              <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
                      <div class="media-icon-large bg-purple mr-xl-4">
                          <i class="fa fa-heart" aria-hidden="true"></i>
                      </div>
            <div class="media-body">
              <h3 class="text-purple">SELF SUSTAINABLE COMMUNITY</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>
  
              <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-7">
                      <div class="media-icon-large bg-pink mr-xl-4">
                          <i class="fa fa-shield" aria-hidden="true"></i>
                      </div>
            <div class="media-body">
              <h3 class="text-pink">SELF SUSTAINABLE COMMUNITY</h3>
              <p>Strengthen School ICT Societies as a Self Sustainable Community</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  
  <!-- ====================================
  ———	CALL TO ACTION
  ===================================== -->
  <section class="py-0 bg-parallax " style=" background-image: url(assets/img/banner/slider-1/img-3.jpg);">
    
    <div style="background-color:rgba(0,0,0,0.6); ">
      <div class="container">
      <div class="wow fadeInUp">
        <div class="section-title justify-content-center">
            <a href="/SISRegister" class="btn btn-danger shadow-sm text-uppercase mt-4">
               <h2 class="text-white text-center">HOW CAN I BE A MEMBER?</h2>
              </a><br><br><br><br><br><br>
          
        </div>
        <div class="text-center">
            <p class="text-white font-size-18 mb-0">To get involved, simply apply to register your existing school club or start a new school ICT Society at your school!
                Check to see if your school has a ICT Society</p>
            <a href="/SISRegister" class="btn btn-danger shadow-sm text-uppercase mt-4">
              <i class="fa fa-phone mr-2" aria-hidden="true"></i>APPLY TO REGISTER A CLUB
            </a>
          </div>
          <div class="py-4"></div>
  </section>
  <section class="py-9" id="courses">

        <div class="container-fluid">
                <div class="section-title justify-content-center mb-2 mb-md-8 wow fadeInUp">
                        <span class="shape shape-left bg-danger"></span>
                        <h2 class="text-danger">List of Societies</h2>
                        
                        <span class="shape shape-right bg-danger"></span>
                      </div>
        <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-5" ">
                    <a href="/viwelistall">click</a>

                        <h3>Societies</h3>
                        <div id="details">
                            <h1 id="select"></h1>
                            <h5 id="distric"></h5>
                            <h4 id="province"></h4>
                          
                            <!--<h4 id="map_hover"></h4>-->
                        </div>
       
     </div>
                <div class="col-sm-9 col-md-6 col-lg-7 " ">
                        <div class="pull-right wow fadeInRight"> 
                          <div >
                        @include('Front.layout.map')
                      </div>
                    </div>
                    </div>
                
    
             
                </div>
            </div>

          </div>
    </section>
  <!-- ====================================
  ———	COURSES SECTION
  ===================================== -->
  
  
  <!-- ====================================
  ———	TEACHERS SECTION
  ===================================== -->
  <section class="pt-9 pb-2 py-md-10 bg-purple" id="mentor" style="background-image: url(assets/img/background/avator-bg.png);">
    <div class="container">
      <div class="section-title justify-content-center mb-2 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-danger"></span>
        <h2 class="text-white"> Mentors   </h2>
        <span class="shape shape-right bg-danger"></span>
      </div>

  
      <div class="team-slider owl-carousel owl-theme wow fadeInUp" dir="ltr">
       
          @foreach($mentor as $mentors)
        <div class="card card-hover card-transparent shadow-none wow">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/mentor/{{ $mentors->img}}" src="assets/img/mentor/{{ $mentors->img}}" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="{{ $mentors->Facebook}}" class="text-white">
                                      <i class="fa fa-facebook" aria-hidden="true"></i>
                                  </a>
                                
                </li>
                <li class="mr-2">
                  <a href="{{ $mentors->twitter}}" class="text-white">
                                      <i class="fa fa-twitter" aria-hidden="true"></i>
                                  </a>
                </li>
                <li class="mr-2">
                  <a href="{{ $mentors->Email}}" class="text-white">
                                      <i class="fa fa-google-plus" aria-hidden="true"></i>
                                  </a>
                </li>
                <li class="mr-2">
                  <a href="{{ $mentors->Linkin}}" class="text-white">
                                      <i class="fa fa-linkedin" aria-hidden="true"></i>
                                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body text-center">
            <a class="font-size-20 font-weight-medium d-block" href="{{ URL('/mentorProfile/'.$mentors->id)}}">{{ $mentors->Name}}</a>
            <span class="text-white">{{ $mentors->Job}}</span>
          </div>
        </div>
        
  
        @endforeach
       
        
       
       
  
        
      </div>
      <div class="text-center">
      <a href="/mentor" class="btn btn-danger shadow-sm text-uppercase mt-4">
          <i class="fa fa-users mr-2" aria-hidden="true"></i>Become a SIS Mentor
        </a>
      </div>
    </div>
  </section>
  
  <!-- ====================================
  ———	GALLERY
  ===================================== -->
  
  <section class="pt-9 pb-7" id="Ambassador">
    <div class="container">
       
      <div class="section-title justify-content-center mb-2 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-danger"></span>
        <h2 class="text-danger">Ambassador</h2>
        <span class="shape shape-right bg-danger"></span>
      </div>
  
      <div class="team-slider owl-carousel owl-theme wow fadeInUp" dir="ltr">
          @foreach($ambassador as $ambassadors)
          
        <div class="card card-hover card-transparent shadow-none">

            <div class="col-md-20 col-sm-15">
                <div class="box14 text-center">
                    <img class="img-fluid rounded-circle" src="assets/img/Ambassador/{{ $ambassadors->img}}" alt="">
                    
                    <div class="box-content ">
                      
                      <h3 class="title">{{ $ambassadors->FirstName}} {{ $ambassadors->LastName}} </h3>

                   
                     

                      <span class="post">{{ $ambassadors->School}}</span>
                     
                        <ul class="icon">
                         

                            <a class="icon-rounded-circle-small bg-warning mr-2" href="{{ $ambassadors->Facebook}}">
                                <i class="fa fa-facebook text-white" aria-hidden="true"></i>
                              </a>
                              <a class="icon-rounded-circle-small bg-success mr-2" href="{{ $ambassadors->twitter}}">
                                <i class="fa fa-twitter text-white" aria-hidden="true"></i>
                              </a>
                              <a class="icon-rounded-circle-small bg-danger mr-2" href="{{ $ambassadors->Email}}">
                                <i class="fa fa-google-plus text-white" aria-hidden="true"></i>
                              </a>
                              <a class="icon-rounded-circle-small bg-info mr-2" href="{{ $ambassadors->Linkin}}">
                                <i class="fa fa-linkedin text-white" aria-hidden="true"></i>
                              </a>
                              <a class="icon-rounded-circle-small bg-info mr-2" href="{{ URL('/AmbassadorProfile/'.$ambassadors->id)}}">
                                <i class="fa fa-chain text-white" aria-hidden="true"></i>
                              </a>
                        </ul>
                    </div>
                </div>
            </div>
          
            
        
        </div>
        @endforeach
        
      </div>
      <div class="text-center">
          <a href="/AmbassadorRegister" class="btn btn-danger shadow-sm text-uppercase mt-4">
              <i class="fa fa-users mr-2" aria-hidden="true"></i>Become a SIS Ambassador
            </a>
          </div>
    </div>
  </section>
  <!-- ====================================
  ———	COUNTER-UP SECTION
  ===================================== -->
  <section class="py-0 pb-0 bg-parallax" style="background-image: url(assets/img/background/countup-bg-img.jpg);">
  
    <div style="background-color:rgba(255, 57, 51,0.6); ">
      <div class="py-6"></div>
    <div class="container">
      <div class="sectionTitleSmall text-center mb-7 wow fadeInUp">
        <h2 class="font-weight-bold text-white">Some Fun Facts</h2>
        <p class="text-white font-size-15">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
      </div>
  
      <div class="row wow fadeInUp" id="counter">
        <div class="col-sm-3 col-xs-12">
          <div  class="text-center text-white mb-5">
                      <div class="counter-value" data-count="{{$eventtable->count()}}">0</div>
            <span class="d-inline-block bg-warning text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">Events Held</span>
          </div>
        </div>
  
        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
                      <div class="counter-value" data-count="{{$SISAccount->count()}}">0</div>
            <span class="d-inline-block bg-success text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">SISAccount </span>
          </div>
        </div>
  
        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
            <div class="counter-value" data-count="{{$ambassadors->count()}}">0</div>
            <span class="d-inline-block bg-danger text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">Ambassadors</span>
          </div>
        </div>
  
        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
                      <div class="counter-value" data-count="{{$mentors->count()}}">0</div>
            <span class="d-inline-block bg-info text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">mentors</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  
  <!-- ====================================
  ———	BLOG SECTION
  ===================================== -->
  <section class="pt-9 pb-7 py-md-10" id="gallery">
    <div class="container">
  
  
      
     
<div class="row">
        <div class="col-sm-9 col-md-6 col-lg-7" ">
       
            @if (\Session::has('success'))
            <div class="alert alert-success">
              <p>{{ \Session::get('success') }}</p>
            </div><br />
           @endif
         <div class="panel panel-default">
               <div class="panel-heading">
                   <h2>Event Calendar</h2>
               </div>
               <div class="panel-body" >
                  {!! $calendar->calendar() !!}
              </div>
          </div>
          
    
    
          {!! $calendar->script() !!}
  

</div>
        <div class="col-sm-5 col-md-6 col-lg-5 " ">
                <div class="pull-right wow fadeInRight"> 
                  <div >
                    <div class="table-wrapper-scroll-y my-custom-scrollbar ">

                      @foreach($eventtable as $eventables)
                        <div class="card">
                          <div class="position-relative">
                              <a href="blog-single-left-sidebar.html">
                                <div class="fb-page" 
                                data-tabs="events"
                                data-href="https://www.facebook.com/{{ $eventables->Link}}"
                                data-width="270" 
                                         data-hide-cover="true"
                                         data-show-facepile="false"
                                         data-small-header="true""></div>
                              </a>
                       
                        </div>
                
                        <div class="card-body border-top-5 px-6 border-danger">
                          <h3 class="card-title">
                           
                           <a class="text-danger text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">{{ $eventables->title }}</a>
                                          
                          </h3>
                          <ul class="list-unstyled d-flex flex-md-column flex-lg-row">
                        
                         
                              </ul>
                             <a class="btn btn-link text-hover-danger pl-0" href="blog-single-left-sidebar.html">
                           <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> Read More
                           </a>
                            </div>
                          </div>
                          
                              @endforeach
                    
                    </div>
              </div>
            </div>
            </div>
        

     
        </div>
    </div>

  </div>
    </div>
  </section>
  
  
    <!-- ====================================
  ———	COUNTER-UP SECTION
  ===================================== -->
  <section class="py-0 pb-0 bg-parallax" style="background-image: url(assets/img/background/event.png);">

  
    <div style="background-color:rgba(0, 0, 0 ,0.6); ">
      <div class="py-7"></div>
    <div class="container">
      <div class="sectionTitleSmall text-center mb-7 wow fadeInUp">
        <h2 class="font-weight-bold text-white">Event Calander</h2>
      </div>
  
     
    
    <div class="team-slider owl-carousel owl-theme wow fadeInUp" dir="ltr">

     @foreach($SISAccount as $SISAccounts)
        <div class="card">
          <div class="position-relative">
              <a href="blog-single-left-sidebar.html">
                <div class="fb-page" 
                data-tabs="events"
                data-href="https://www.facebook.com/{{ $SISAccounts->SchoolFBProfile}}"
                data-width="270" 
                         data-hide-cover="true"
                         data-show-facepile="false"
                         data-small-header="true""></div>
              </a>
     
        </div>

        <div class="card-body border-top-5 px-6 border-danger">
          <h3 class="card-title">
           
           <a class="text-danger text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">{{ $SISAccounts->SchoolName }}</a>
                          
          </h3>
         
          
            </div>
          </div>
          
              @endforeach
    
    </div>
    <div class="py-7"></div>
  </div>
 
  </section>
 <!-- ====================================
  ———	BLOG SECTION
  ===================================== -->
  <section class="pt-9 pb-7 py-md-10" id="gallery">
    <div class="section-title justify-content-center mb-2 mb-md-8 wow fadeInUp">
      <span class="shape shape-left bg-danger"></span>
      <h2 class="text-danger">NEWS</h2>
      <span class="shape shape-right bg-danger"></span>
    </div>
      <div class="container">
        <div class="team-slider owl-carousel owl-theme wow fadeInUp" dir="ltr">
        @foreach($SISAccount as $SISAccounts)
        <div class="card">
          <div class="position-relative">
              <a href="blog-single-left-sidebar.html">
                <div class="fb-page" 
                data-tabs="timeline"
                data-href="https://www.facebook.com/{{ $SISAccounts->SchoolFBProfile}}"
                data-width="280" 
                data-height="250"
                data-hide-cover="true"
                data-show-facepile="false"
                 data-small-header="true""></div>
              </a>
         
        </div>

        <div class="card-body border-top-5 px-2 border-danger">
          <h3 class="card-title">
           
           <a class="text-danger text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">{{ $SISAccounts->SchoolName }}</a>
                          
          </h3>
          <ul class="list-unstyled d-flex flex-md-column flex-lg-row">
        
         
              </ul>
           
            </div>
          </div>
          
              @endforeach
            </div>
          </div>
  </section>







  
  <!-- ====================================
  ———	CONTACT SECTION
  ===================================== -->
  <section class="bg-light py-7 py-md-10">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-sm-6 col-xs-12">
          <div class="section-title align-items-baseline mb-4">
            <h2 class="text-danger px-0 mb-0">Our Address</h2>
          </div>
          <p class="text-dark font-size-15">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <ul class="list-unstyled">
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-warning mr-2">
                <i class="fa fa-map-marker text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0">9/4/C Ring Road,Garden Street Dhaka,Bangladesh-1200</p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-success mr-2">
                <i class="fa fa-envelope text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="mailto:hello@example.com">hello@example.com</a></p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-info mr-2">
                <i class="fa fa-phone text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="tel:[00] 333 555 888">333 555 888</a></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-xs-12">
          <form>
            <div class="form-group form-group-icon">
              <i class="fa fa-user "></i>
              <input type="text" class="form-control border-warning" placeholder="First name" required>
            </div>
            <div class="form-group form-group-icon">
              <i class="fa fa-envelope "></i>
              <input type="email" class="form-control border-success" placeholder="Email address" required>
            </div>
            <div class="form-group form-group-icon">
              <i class="fa fa-comments "></i>
              <textarea class="form-control border-info" placeholder="Write message" rows="6"></textarea>
            </div>
              <button type="submit" class="btn btn-danger float-right text-uppercase">
                Send Message
              </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  

@endsection