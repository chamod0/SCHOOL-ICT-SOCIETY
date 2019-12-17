@extends('Front.layout.FrontMaster')

@section('content')
  
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>    

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
                <a href="javascript:void(0)" data-toggle="modal" data-target="#event-add" class="btn btn-white text-muted text-uppercase">ADD the event</a>
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
                          <img src=" href='https://www.facebook.com/events/2380304125543427/" alt="">
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
   
      
<!------------------------ Event Tabele ----------------------------------------------->
      <div class="table-responsive-sm table-cart">
      <table class="table mb-0">
        <thead>
          <tr>
            <th scope="col">Event ID</th>
            <th scope="col">Title</th>
            <th scope="col">Event Link</th>
            <th scope="col">Start_Day</th>
            <th scope="col">End_Daty</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($eventtable as $eventables)
          <tr>
            <td>{{ $eventables->id }}</td>
            <td>{{ $eventables->title }}</td>
            <td><a href="{{ $eventables->Link }}">{{ $eventables->Link }}</a></td>
            <td>{{ $eventables->start_date }}</td>
            <td>{{ $eventables->end_date }}</td>
            


            <td>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              
            </td>
          </tr>
          @endforeach
          

        </tbody>

      </table>
    </div>
    <div class="color-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col color-bar bg-warning"></div>
          <div class="col color-bar bg-danger"></div>
          <div class="col color-bar bg-success"></div>
          <div class="col color-bar bg-info"></div>
          <div class="col color-bar bg-purple"></div>
          <div class="col color-bar bg-pink"></div>
          <div class="col color-bar bg-warning d-none d-md-block"></div>
          <div class="col color-bar bg-danger d-none d-md-block"></div>
          <div class="col color-bar bg-success d-none d-md-block"></div>
          <div class="col color-bar bg-info d-none d-md-block"></div>
          <div class="col color-bar bg-purple d-none d-md-block"></div>
          <div class="col color-bar bg-pink d-none d-md-block"></div>
        </div>
      </div>
    </div>
     <!------------------------ Calamder -------------------------->
        <div class="content table-responsive table-full-width">
          <div class="container">
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
                <div class="modal fade" id="event-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="bg-warning rounded-top p-2">
                        <h3 class="text-white font-weight-bold mb-0 ml-2">Event Add</h3>
                      </div>
                
                      <div class="border rounded-bottom-md border-top-0">
                        
                        <form method="post" action="{{url('event/add')}}">
                          @csrf
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-8">
                            <label for="Title">Title:</label>
                            <input type="text" class="form-control" name="title">
                            <input type="hidden" class="form-control" name="SISID" value="{{ $user->id}}">
                          </div>
                          <div class="form-group col-md-8">
                            <label for="Title">Facebook Event link:</label>
                            <input type="text" class="form-control" name="Link">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-7">
                            <strong> Start Date : </strong>  
                           <input class="date form-control"  type="text" id="startdate" name="startdate"> 
                         </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-7">
                            <strong> End Date : </strong>  
                           <input class="date form-control"  type="text" id="enddate" name="enddate">   
                         </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="form-group col-md-7">
                            <button type="submit" class="btn btn-success">Add Event</button>
                          </div>
                        </div>
                      </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      
<!--Event Add -->

     

    </section>
    <script type="text/javascript">  
      $('#startdate').datepicker({ 
          autoclose: true,   
          format: 'yyyy-mm-dd'  
       });
       $('#enddate').datepicker({ 
          autoclose: true,   
          format: 'yyyy-mm-dd'
       }); 

       
  </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
  
@endsection