@extends('Front.layout.FrontMaster')

@section('content')
<section class="py-8 py-md-10">
        <div class="container">
          <div class="row">
            <div class="col-sm-18 offset-lg-3 col-lg-8">
              <div class="mb-4 mb-sm-0">
            
      
                <div class="card bg-transparent shadow-none">
						<div class="card-header card-header-lg bg-info text-white p-6 rounded-top">
              <h4 class="font-weight-bold mb-0">Ambassador</h4>
          	</div>
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
      
          @if ( session()->has('msg') )
              <div class="alert alert-success">{{ session()->get('msg') }}</div>
          @endif
      
            <div class="card-body border border-top-0 rounded-bottom-sm p-7">
                    <form action="/AmbassadorRegister" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
              <div class="row">
                    
                <div class="form-group form-group-icon col-lg-6">
                  <label for="first-name">First Name</label>
                  <input type="text" class="form-control border-info rounded-sm" id="first-name" name="FirstName" >
                </div>

                <div class="form-group form-group-icon col-lg-6">
                  <label for="last-name">Last Name</label>
                  <input type="text" class="form-control border-info rounded-sm" id="last-name" name="LastName" >
                </div>
              </div>
              <div class="row">
                    <div class="form-group form-group-icon col-lg-12">
                      <label for="first-name">School Name</label>
                      <input type="text" class="form-control border-info rounded-sm" id="first-name" name="School" >
                    </div>
    
                   
                  </div>

              <div class="row">
                <div class="form-group form-group-icon col-lg-6">
                  <label for="address-1">Address 1</label>
                  <input type="text" class="form-control border-info rounded-sm" id="address-1" name="AddressL1">
                </div>

                <div class="form-group form-group-icon col-lg-6">
                  <label for="address-2">Address 2</label>
                  <input type="text" class="form-control border-info rounded-sm" id="address-2" name="AddressL2">
                </div>
              </div>

              <div class="row">
                <div class="form-group form-group-icon col-lg-6">
                  <label for="city">District</label>
                  <select name="District" class="form-control border-info" id="day" name="District">
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
                </div>
                <div class="form-group form-group-icon col-lg-6">
                        <label for="country">Education Zone</label>
                        <input type="text" class="form-control border-info rounded-sm" id="country" name="EducationZone">
                      </div>
                
              </div>

              <div class="row">
                <div class="form-group form-group-icon col-lg-6">
                  <label for="state">Gender</label>
                  <select class="form-control border-info"  name="Gender" id="">
                        <option class="form-control border" value="Male">Male</option>
                        <option class="form-control border" value="Female">Female</option>
                      </select>
                </div>
                <div class="form-group form-group-icon col-lg-6">
                        <label for="country">Date of birth</label>
                        <input type="date" class="form-control border-info rounded-sm" id="country" name="Dob">
                      </div>
                
              </div>

              <div class="form-group mb-4">
                <label class="" for="text-aria">description of you</label>
                <textarea name="description" class="form-control border-info rounded-sm" rows="7" cols="95" id="text-aria" name="description"></textarea>
              </div>
              <div class="row">
                    <div class="form-group form-group-icon col-lg-6">
                            <label for="country">Email</label>
                            <input type="text" class="form-control border-info rounded-sm" id="country" name="Email">
                          </div>
                    <div class="form-group form-group-icon col-lg-6">
                            <label for="country">Linkin</label>
                            <input type="text" class="form-control border-info rounded-sm" id="country" name="Linkin">
                          </div>
                    <div class="form-group form-group-icon col-lg-6">
                            <label for="country">Facebook</label>
                            <input type="text" class="form-control border-info rounded-sm" id="country" name="Facebook">
                          </div>
                          <div class="form-group form-group-icon col-lg-6">
                                <label for="country">twitter</label>
                                <input type="text" class="form-control border-info rounded-sm" id="country" name="twitter">
                              </div>
                    
                  </div>
                  <div class="row">
                        <div class="form-group form-group-icon col-lg-12">
                          <label for="country">Image</label>
                      <input type="file" id="file-input" multiple  class="form-control border-info rounded-sm" id="country" name="img">
                     
                      <div id="thumb-output"></div>
                   </div>
                         </div>



							<div class="checkbox col-12">
		            <label>
		              <input type="checkbox"> I have read and accept the <a class="text-danger" href="#">terms and conditions</a>
		            </label>
		          </div>
            </div>
          </div>
          <div class="form-group">
                <button type="submit" class="btn btn-danger text-uppercase w-100">Register</button>
              </div>
              </div>
            </div>
        </form>
      
          </div>
        </div>
      </section>
      
@endsection