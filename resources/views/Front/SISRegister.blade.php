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
                <h1 class="breadcrumb-title">REGISTER YOUR SOCIETY</h1>
               
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
                  <h3 class="text-white font-weight-bold mb-0 ml-2">Create An Account</h3>
                </div>
      
                <div class="border rounded-bottom-sm border-top-0">
                      


                      
                  <div class="p-3">
                     
                    <form action="/SISRegister" method="POST" role="form" id="validate_form">

                        @csrf
                      <div class="form-group form-group-icon">
                          
                        <input type="text" class="form-control border-warning" placeholder="School Name" name="SchoolName" >
                        <span class="text-danger">{{ $errors->first('SchoolName') }}</span>
                      </div>
      
                    
                        
                       <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="District"name='District' >
                        <span class="text-danger">{{ $errors->first('District') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                            <input type="text" class="form-control border" placeholder="Education Zone" name="EducationZone" >
                            <span class="text-danger">{{ $errors->first('EducationZone') }}</span>
                          </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Address line 1" name="AddressL1" >
                        <span class="text-danger">{{ $errors->first('AddressL1') }}</span>
                        <input type="text" class="form-control border" placeholder="Address line 2" name="AddressL2">
                        <span class="text-danger">{{ $errors->first('AddressL2') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Contact Number"name = "TelNo" >
                        <span class="text-danger">{{ $errors->first('TelNo') }}</span>
                      </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Email" name="Email">
                        <span class="text-danger">{{ $errors->first('Email') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                            <input type="text" class="form-control border" placeholder="School FaceBook Page ID" name="SchoolFBProfile" >
                            <span class="text-danger">{{ $errors->first('SchoolFBProfile') }}</span>
                          </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="President of Society" name="PresidentOfSociety">
                        <span class="text-danger">{{ $errors->first('PresidentOfSociety') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Secretry Of Society" name="SecretryOfSociety" >
                        <span class="text-danger">{{ $errors->first('SecretryOfSociety') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Treasurer Of Society" name="TreasurerOfSociety" >
                        <span class="text-danger">{{ $errors->first('TreasurerOfSociety') }}</span>
                      </div>
                      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border" placeholder="Teacher In Charge" name="TeacherInCharge">
                        <span class="text-danger">{{ $errors->first('TeacherInCharge') }}</span>
                      </div>
                      
                      <div class="form-group form-group-icon">
                        <input type="password" class="form-control border" placeholder="Password" name="password">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                      </div>
                       
                      <div class="form-group form-group-icon">
                        <input type="password" class="form-control border" placeholder="Confirm-Password" name="password_confirmation">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
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
