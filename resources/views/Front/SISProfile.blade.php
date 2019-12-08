@extends('Front.layout.FrontMaster')

@section('content')
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>  



<div class="col-xl-6">
        <div class="media pricing-list bg-light mb-6">
          <div class="pricing-plan bg-danger">
              <img src="https://graph.facebook.com/{{ $user->SchoolFBProfile}}/picture" alt="">
            <h3 class="text-white text-truncate">{{ $user->SchoolName}}</h3>
            <p class="text-white">Contrary to popular belief, Lorem Ipsum is not simply random.</p>
            <div class="fb-page" 
  data-tabs=""
  data-href="https://www.facebook.com/{{ $user->SchoolFBProfile}}"
  data-width="380" 
  data-hide-cover="false"></div>
            <ul class="list-unstyled mb-0">
              <li class="d-flex justify-content-between align-items-baseline p-0 border-0">
                <a href="product-cart.html" class="btn btn-white text-muted text-uppercase">ADD the evant</a>
                <div class="pricing-price text-white">
                  <p></p>
                  <small class="d-block">Per Month</small>    
                </div>
              </li>
            </ul>
          </div>
         
          <div class="media-body">
            <div class="">
              <ul class="list-unstyled list-item-lg mb-0">
                <li class="d-flex align-items-baseline mb-3">
                  <i class="fa fa-birthday-cake mr-2 text-danger" aria-hidden="true"></i>
               <b> Education Zone : </b> <a>  {{ $user->EducationZone}} </a>
                </li>
              
                <li class="d-flex align-items-baseline mb-3">
                  <i class="fa fa-medkit mr-2 text-danger" aria-hidden="true"></i>
                  <b> District : </b> <a>  {{ $user->District}} </a>
                </li>
                <li class="d-flex align-items-baseline mb-3">
                  <i class="fa fa-paint-brush mr-2 text-danger" aria-hidden="true"></i>
                  <b> District : </b> <a>  {{ $user->Email}} </a>
                </li>
                <li class="d-flex align-items-baseline mb-0">
                  <i class="fa fa-taxi mr-2 text-danger" aria-hidden="true"></i>
                  <b> Address :  </b> <a>  {{ $user->AddressL1}} <br> {{ $user->AddressL2}} </a>
                </li>
              </ul>
            </div>
          </div>
          
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


      


 
  
@endsection