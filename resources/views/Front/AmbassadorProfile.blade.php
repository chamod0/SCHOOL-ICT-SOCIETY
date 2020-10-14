@extends('Front.layout.FrontMaster')

@section('content')



<section class="breadcrumb-bg" style="background-image: url(assets/img/background/page-title-bg-img.jpg); ">
    <div class="container">
      <div class="breadcrumb-holder">
        <div>
          
         
        </div>
      </div>
    </div>
  </section>



<section class="d-none d-sm-block section-top">
    <div class="container">
      <div class="row wow fadeInUp">

  
        <div class="col-sm-12 center">
                 
                      <div class="card bg-success card-hover scrolling">
                          <div class="card-body text-center p-0">
                              

                              <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">{{ $ambassador->FirstName}} {{ $ambassador->LastName}} </h2>



                              
                              
                          </div>
                          <div class="card-img text-center">
                            <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                              <li class="mr-2">
                                <a href="{{ $ambassador->Facebook}}" class="text-white">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                              
                              </li>
                              <li class="mr-2">
                                <a href="{{ $ambassador->twitter}}" class="text-white">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                              </li>
                              <li class="mr-2">
                                <a href="{{ $ambassador->Email}}" class="text-white">
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                                </a>
                              </li>
                              <li class="mr-2">
                                <a href="{{ $ambassador->Linkin}}" class="text-white">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                
        </div>
  
     
  
 
      </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-12">
            <div class="image mb-5 mb-md-0">
              <img class="w-100 rounded" src="{{ URL('assets/img/mentor/'.$ambassador->img)}}" alt="team-1.jpg">
            </div>
          </div>
    
          <div class="col-sm-8 col-xs-12">
            <h2 class="text-danger font-weight-bold text-capitalize pl-0 mb-5">about me</h2>
    
            <p class="text-muted mb-5">{{ $ambassador->About}}</p>
    
    
           
    
            <h2 class="text-danger font-weight-medium mb-3 ">Mentor Information</h2>
    
         
            <div class="text-white rounded bg-success text-uppercase font-weight-medium px-6 py-3 mb-3">Contact details</div>
    
         
            <a > Tel No : {{ $ambassador->Tel}}</a><br>
            <a > Email : {{ $ambassador->Email}}</a>
            <div class="mb-7">
                <a class="icon-rounded-circle-small bg-warning mr-2" href="javascript:void(0)">
                  <i class="fa fa-facebook text-white" aria-hidden="true"></i>
                </a>
                <a class="icon-rounded-circle-small bg-success mr-2" href="javascript:void(0)">
                  <i class="fa fa-twitter text-white" aria-hidden="true"></i>
                </a>
                
                <a class="icon-rounded-circle-small bg-info mr-2" href="javascript:void(0)">
                  <i class="fa fa-linkedin text-white" aria-hidden="true"></i>
                </a>
               
              </div>
         
    
          </div>
        </div>
      </div>
  </section>















@endsection