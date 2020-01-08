@extends('Front.layout.FrontMaster')

@section('content')


<section class="py-8 py-md-10">
        <div class="container">
          <div class="row">
            <div align="center" class="col-sm-12 offset-lg-3 col-lg-7">
              <div class="mb-4 mb-sm-0">
                <div class="bg-danger rounded-top p-2">
                  <h3 class="text-white font-weight-bold mb-0 ml-2">Create Mentor Account</h3>
                </div>
      
                <div class="border rounded-bottom-sm border-top-0">
                      


                      
                  <div class="p-3">
                     
                    <form action="/mentor" method="POST" role="form" enctype="multipart/form-data">

                        @csrf
                        
                      <div class="form-group form-group-icon">
                        <label class="pull-left" for="q1">1).Why ..............................................................</label> <br>
                        <textarea class="form-control border-info" name="question1" id="" cols="80" rows="5" placeholder="question1"></textarea>
                          
                        <span class="text-danger">{{ $errors->first('question1') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                            <label class="pull-left" for="q2">2).Why ..............................................................</label> <br>
                     <textarea class="form-control border-info" name="question2" id="" cols="80" rows="5" placeholder="question2"></textarea>

                     <span class="text-danger">{{ $errors->first('question2') }}</span>
                       </div>
                      <div class="form-group form-group-icon">
                      <label class="pull-left" for="q3">3).Why ..............................................................</label> <br>
                      <textarea class="form-control border-info" name="question3" id="" cols="80" rows="5" placeholder="question3"></textarea>
                                  
                      <span class="text-danger">{{ $errors->first('question3') }}</span>
                      </div>
                      <div class="form-group form-group-icon">
                          <input type="text" class="form-control border border-info" placeholder="Name" name="Name" >
                            <span class="text-danger">{{ $errors->first('Name') }}</span>
                          </div>
                      
                      <div class="form-group form-group-icon">                       
                        <select class="form-control border border-info"  name="Gender" id="">
                          <option class="form-control border" value="Male">Male</option>
                          <option class="form-control border" value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group form-group-icon">
                          <input type="text" class="form-control border border-info" placeholder="Email" name="Email" >
                            <span class="text-danger">{{ $errors->first('Email') }}</span>
                          </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Address line 1" name="AddressL1" ><br>
                        <span class="text-danger">{{ $errors->first('AddressL1') }}</span>
                        <input type="text" class="form-control border border-info" placeholder="Address line 2" name="AddressL2">
                        <span class="text-danger">{{ $errors->first('AddressL2') }}</span>
                      </div>
                        
                      <div class="form-group form-group-icon">
                        <input type= "date" class="form-control border border-info rounded-sm" placeholder="Date of Birth" name = "Dob" >
                        <span class="text-danger">{{ $errors->first('Dob') }}</span>
                      </div>
      
                      <div class="form-group form-group-icon">
                        <input type="text" class="form-control border border-info" placeholder="Job" name="Job">
                        <span class="text-danger">{{ $errors->first('Job') }}</span>
                      </div>
                      <div class="row">
                        <div class="form-group form-group-icon col-lg-6">
                             
                                <input type="text" class="form-control  border border-info rounded-sm"  placeholder="Tel No" id="country" name="Tel">
                               <span class="text-danger">{{ $errors->first('Tel') }}</span>
                              </div>
                        <div class="form-group form-group-icon col-lg-6">
                             
                                <input type="text" class="form-control border border-info rounded-sm" id="country" placeholder="Linkin" name="Linkin">
                                  <span class="text-danger">{{ $errors->first('Linkin') }}</span>
                              </div>
                        <div class="form-group form-group-icon col-lg-6">
                             
                                <input type="text" class="form-control border border-info rounded-sm" id="country" placeholder="Facebook" name="Facebook">
                                <span class="text-danger">{{ $errors->first('Facebook') }}</span>
                              </div>
                              <div class="form-group form-group-icon col-lg-6">
                                    
                                    <input type="text" class="form-control border border-info rounded-sm" id="country"placeholder="twitter"  name="twitter">
                                    <span class="text-danger">{{ $errors->first('twitter') }}</span>
                                  </div>
                        
                      </div>
                      <div class="form-group form-group-icon">
                        <label class="pull-left" for="q2">About You</label> <br>
                 <textarea class="form-control border border-info" name="About" id="" cols="80" rows="5" placeholder=""></textarea>

                 <span class="text-danger">{{ $errors->first('About') }}</span>
                   </div>

                        <div class="form-group form-group-icon">
                            <label for="country">Image</label>
                          <input type="file" id="file-input" multiple  class="form-control border border-info rounded-sm" id="country" name="img">
                          <span class="text-danger">{{ $errors->first('img') }}</span>
                          <div id="thumb-output"></div>
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
      
@endsection