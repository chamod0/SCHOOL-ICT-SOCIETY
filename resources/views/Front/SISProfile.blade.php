@extends('Front.layout.FrontMaster')

@section('content')

<section class="py-9">

<div class="col-xl-14">
        <div class="media pricing-list bg-light mb-6">
        
          <div class="pricing-plan bg-danger">
              <div class="card-body text-center p-0">
              <img style="border-radius: 50%;" height="16%" width="16%"  src="https://graph.facebook.com/{{ $user->SchoolFBProfile}}/picture" alt="">
            <h3 class="text-white text-truncate">{{ $user->SchoolName}}</h3>
            <p class="text-white">Contrary to popular belief, Lorem Ipsum is not simply random.</p>
            <ul class="list-unstyled list-item-lg mb-0  ">
                <li class="d-flex align-items-baseline mb-3 text-white ">
                  <i class="fa fa-map mr-2 text-warning" aria-hidden="true"></i>
               <b> Education Zone &emsp;: </b> <a>  {{ $user->EducationZone}} </a>
                </li>
              
                <li class="d-flex align-items-baseline mb-3 text-white ">
                  <i class="fa fa-street-view mr-2 text-warning" aria-hidden="true"></i>
                  <b> District &emsp;: </b> <a>  {{ $user->District}} </a>
                </li>
                <li class="d-flex align-items-baseline mb-3 text-white ">
                  <i class="fa fa-envelope mr-2 text-warning" aria-hidden="true"></i>
                  <b> Email&emsp; : </b> <a>  {{ $user->Email}} </a>
                </li>
                <li class="d-flex align-items-baseline mb-3 text-white">
                    <i class="fa fa-phone mr-2 text-warning" aria-hidden="true"></i>
                    <b> Contact No  &emsp; :  </b> <a>  {{ $user->TelNo}}  </a>
                  </li>
                <li class="d-flex align-items-baseline mb-3 text-white">
                  <i class="fa fa-address-card mr-2 text-warning" aria-hidden="true"></i>
                  <b> Address&emsp; :  </b> <a>  {{ $user->AddressL1}} <br> {{ $user->AddressL2}} </a>
                </li>
                
              </ul>
            <ul class="list-unstyled mb-0">
              <li class="d-flex justify-content-between align-items-baseline p-0 border-0">
                <a href="product-cart.html" class="btn btn-white text-muted text-uppercase">ADD the evant</a>
                <div class="pricing-price text-white">
                  <p></p>
                  <small class="d-block">before {{ $user->created_at->diffForHumans() }} created at this account</small>    
                
                </div>
              </li>
            </ul>
          </div>
        </div>
         
        
          <div class="media-body">
              <div class="">
                <ul class="list-unstyled list-item-lg mb-0">
                  <li class="d-flex align-items-baseline mb-3">
                    <i class="fa fa-user mr-2 text-danger" aria-hidden="true"></i>
                 <b> President Of Society : </b> <a>  {{ $user->PresidentOfSociety}} </a>
                  </li>
                
                  <li class="d-flex align-items-baseline mb-3">
                    <i class="fa fa-user mr-2 text-danger" aria-hidden="true"></i>
                    <b> Secretry Of Society : </b> <a>  {{ $user->SecretryOfSociety}} </a>
                  </li>
                  <li class="d-flex align-items-baseline mb-3">
                    <i class="fa fa-user mr-2 text-danger" aria-hidden="true"></i>
                    <b> Treasurer Of Society : </b> <a>  {{ $user->TreasurerOfSociety}} </a>
                  </li>
                  <li class="d-flex align-items-baseline mb-3">
                    <i class="fa fa-user-circle-o mr-2 text-danger" aria-hidden="true"></i>
                    <b> Teacher In Charge :  </b> <a>  {{ $user->TeacherInCharge}} </a>
                  </li>
                  <li class="d-flex align-items-baseline mb-3">
                      <i class="fa fa-user-circle-o mr-2 text-danger" aria-hidden="true"></i>
                      <b> School FB Profile : <a>  <br> 
                        <div class="fb-page" 
                         data-tabs=""
                         data-href="https://www.facebook.com/{{ $user->SchoolFBProfile}}"
                         data-width="100" 
                         data-hide-cover="true"
                         data-show-facepile="false"
                         data-small-header="true"></div> </a> </b> 
                    </li>
              
                </ul>
                
              </div>
              
            </div>
            <div class="fb-page" 
            data-tabs="events"
            data-href="https://www.facebook.com/{{ $user->SchoolFBProfile}}"
            data-width="380" 
            data-hide-cover="true"></div>
            
      </div>
           
      
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                <th>ID</th>
                    <th>EvantLink</th>
                 
                    <th>Header</th>
                    <th>Disciption</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
                </thead>
                <tbody>
                             
                @foreach($evants as $event)
                    <tr>
                    <td>{{($event->id)}}</td>
                        <td>{{($event->EvantLink)}}</td>
                        <td>{{($event->Header)}}</td>
                       
                        <td>{{($event->Disciption)}}</td>
                        <td>{{($event->created_at)}}</td>
                        <td>{{($event->updated_at)}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
      </div>


      

    </section>
 
  
@endsection