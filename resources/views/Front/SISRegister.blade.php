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
                <h1 class="breadcrumb-title wow fadeInUp">REGISTER YOUR SOCIETY</h1>
               
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
                  <h3 class="text-white font-weight-bold mb-0 ml-2 wow fadeInUp">Create An Account</h3>
                </div>
      
                <div class="border rounded-bottom-sm border-top-0">
                      


                      
                  <div class="p-3">
                     
                    <form action="/SISRegister" method="POST" role="form" id="validate_form">

                        @csrf
                      <div class="form-group form-group-icon">
                          
                        <input type="text" class="form-control border border-info"  placeholder="School Name" name="SchoolName" >
                        <span class="text-danger">{{ $errors->first('SchoolName') }}</span>
                      </div>
      
                    
                        
                       <div class="form-group form-group-icon">
                       
                        <select name="District" class="form-control border border-info" id="day">
                            <option value="" disabled selected>Select District</option>
                                   <option value="Colombo">Colombo</option>
                                   <option value="Gampaha">Gampaha</option>
                                   <option value="Kalutara">Kalutara</option>
                                   <option value="Kandy">Kandy</option>
                                   <option value="Matale">Matale</option>
                                   <option value="Nuwara Eliya">Nuwara Eliya</option>
                                   <option value="Galle">Galle</option>
                                   <option value="Matara">Matara</option>
                                   <option value="Hambantota">Hambantota</option>
                                   <option value="Jaffna">Jaffna</option>
                                   <option value="Mannar">Mannar</option>
                                   <option value="Vavuniya">Vavuniya</option>
                                   <option value="Mullaitivu">Mullaitivu</option>
                                   <option value="Kilinochchi">Kilinochchi</option>
                                   <option value="Batticaloa">Batticaloa</option>
                                   <option value="Ampara">Ampara</option>
                                   <option value="Trincomalee">Trincomalee</option>
                                   <option value="Kurunegala">Kurunegala</option>
                                   <option value="Puttalam">Puttalam</option>
                                   <option value="Anuradhapura">Anuradhapura</option>
                                   <option value="Polonnaruwa">Polonnaruwa</option>
                                   <option value="Badulla">Badulla</option>
                                   <option value="Moneragala">Moneragala</option>
                                   <option value="Ratnapura">Ratnapura</option>
                                   <option value="Kegalle">Kegalle</option>
                               </select>
                        <span class="text-danger">{{ $errors->first('District') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                            <input type="text" class="form-control border border-info" placeholder="Education Zone" name="EducationZone" >
                            <span class="text-danger">{{ $errors->first('EducationZone') }}</span>
                          </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Address line 1" name="AddressL1" ><br>
                        <span class="text-danger">{{ $errors->first('AddressL1') }}</span>
                        <input type="text" class="form-control border border-info" placeholder="Address line 2" name="AddressL2">
                        <span class="text-danger">{{ $errors->first('AddressL2') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Contact Number"name = "TelNo" >
                        <span class="text-danger">{{ $errors->first('TelNo') }}</span>
                      </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Email" name="Email">
                        <span class="text-danger">{{ $errors->first('Email') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                            <input type="text" class="form-control border border-info" placeholder="School FaceBook Page ID" name="SchoolFBProfile" >
                            <span class="text-danger">{{ $errors->first('SchoolFBProfile') }}</span>
                          </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="President of Society" name="PresidentOfSociety">
                        <span class="text-danger">{{ $errors->first('PresidentOfSociety') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Secretry Of Society" name="SecretryOfSociety" >
                        <span class="text-danger">{{ $errors->first('SecretryOfSociety') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Treasurer Of Society" name="TreasurerOfSociety" >
                        <span class="text-danger">{{ $errors->first('TreasurerOfSociety') }}</span>
                      </div>
                      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Teacher In Charge" name="TeacherInCharge">
                        <span class="text-danger">{{ $errors->first('TeacherInCharge') }}</span>
                      </div>
                      
                      <div class="form-group form-group-icon">
                        <input type="password" class="form-control border border-info" placeholder="Password" name="password">
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                      </div>
                       
                      <div class="form-group form-group-icon">
                        <input type="password" class="form-control border border-info" placeholder="Confirm-Password" name="password_confirmation">
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
