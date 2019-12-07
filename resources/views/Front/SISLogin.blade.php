@extends('Front.layout.FrontMaster')

@section('content')
<div class="main-wrapper sign-up-or-login">


        <!-- ====================================
        ———	BREADCRUMB
        ===================================== -->
        <section class="breadcrumb-bg" style="background-image: url(assets/img/background/page-title-bg-img.jpg); ">
          <div class="container">
            <div class="breadcrumb-holder">
              <div>
                <h1 class="breadcrumb-title">Loin SOCIETY</h1>
               
              </div>
            </div>
          </div>
        </section>
      
      <!-- ====================================
      ———	SIGN-UP OR LOG-IN
      ===================================== -->
      <section class="py-8 py-md-10">
        <div class="container">
          <div class="row">
            <div align="center" class="col-sm-12 offset-lg-3 col-lg-7">
              <div class="mb-4 mb-sm-0">
                <div class="bg-warning rounded-top p-2">
                  <h3 class="text-white font-weight-bold mb-0 ml-2">Login An Account</h3>
                </div>
      
                <div class="border rounded-bottom-sm border-top-0">
                      
                    @if ( $errors->any() )

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif

                @if ( session()->has('msg') )

                    <div class="alert alert-success">{{ session()->get('msg') }}</div>

                @endif


                      
                  <div class="p-3">
                     
                    <form action="/SISLogin" method="POST" role="form" id="validate_form">
                        @csrf                     
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Email" name="Email">                    
                      </div>                  
                      <div class="form-group form-group-icon">
                        <input type="password" class="form-control border" placeholder="Confirm-Password" name="password">                      
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-danger text-uppercase w-100">Register</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
      
      
          </div>
        </div>
      </section>
      
      </div>

@endsection