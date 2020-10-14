@extends('Front.layout.FrontMaster')

@section('content')










<section class="pt-7 pb-9 pt-md-10">
        <div class="container">
          <div class="row">
      
      
                @foreach($list as $accounts)
      
           



            <div class="col-md-6 col-lg-4 col-xs-12">

                    <div class="card card-product border-danger card-hover ">
                      <a class="img-link" href="javascript:void(0)" data-toggle="modal" data-target="#modal-products">
                            <div class="fb-page" 
                            data-tabs=""
                            data-href="https://www.facebook.com/{{ $accounts->SchoolFBProfile}}"
                            data-width="351" 
                            data-height="450"
                            data-hide-cover="false"
                            data-show-facepile="false"
                            data-small-header="false"></div> 
                        <button class="btn btn-quickview shadow-none" data-toggle="modal" data-target="#modal-products">
                          <i class="fa fa-eye mr-2" aria-hidden="true"></i>
                          quick view
                        </button>
                      </a>
                      <div class="card-body bg-danger px-2 py-6">
                        <h5 class="mb-1">
                          <a class="text-capitalize d-block text-truncate" href="product-single.html"> {{ $accounts->SchoolName}}</a>
                        </h5>
                        
                        <a> District : {{ $accounts->District}}</a><br>
                        <a> Education Zone: {{ $accounts->EducationZone}}</a>
                       
                      </div>
                    </div>
                  </div>
      
            @endforeach
      
            
      
            
          </div>
        </div>
      
        <div class="mt-6">
              <!-- ====================================
      ———	PAGINATION
      ===================================== -->
      <section class="py-5">
        <div class="container">
          <nav aria-label="Page navigation example">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center align-items-center">
                <li class="page-item"><a class="page-link" href="#">
                  <i class="fa fa-arrow-left mr-1" aria-hidden="true"></i>
                  Prev
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">15</a></li>
                <li class="page-item"><a class="page-link" href="#">
                  Next <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
                </a>
                </li>
              </ul>
            </nav>      
          </nav>
        </div>
      </section>
      
          </div>
      </section>


@endsection