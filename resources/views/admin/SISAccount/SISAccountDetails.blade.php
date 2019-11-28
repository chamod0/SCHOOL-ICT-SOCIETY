@extends('admin.layout.master')

@section('page')

SISmanage

@endsection

@section('content')

    <div class="row">

    
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                    <h4 class="title">SIS Account Details</h4>
                    <p class="category">Account Details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <td>{{ $accdetails->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $accdetails->SchoolName }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $accdetails->Email}}</td>
                        </tr>
                        <tr>
                            <th>EducationZone</th>
                            <td>{{ $accdetails->EducationZone}}</td>
                        </tr>
                        <tr>
                            <th>District</th>
                            <td>{{ $accdetails->District}}</td>
                        </tr>
                        <tr>
                            <th>Contact number</th>
                            <td></td>
                            

                           </tr>
                        <tr>
                            <th>Address</th>
                            <td></td>
                        </tr>
                        
                        

                        </thead>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="header">
                   
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        
                        <tr>
                            <th>President Of Society</th>
                            <td>{{ $accdetails->PresidentOfSociety}}</td>
                            

                           </tr>
                        <tr>
                            <th>SecretryOfSociety</th>
                            <td>{{ $accdetails->SecretryOfSociety}}</td>
                        </tr>
                        <tr>
                            <th>TreasurerOfSociety</th>
                            <td>{{ $accdetails->TreasurerOfSociety}}</td>
                        </tr>
                        <tr>
                            <th>TeacherInCharge</th>
                            <td>{{ $accdetails->TeacherInCharge}}</td>
                        </tr>
                        <tr>
                            <th>Facebook Page Link</th>
                            <td> <a href="{{ $accdetails->SchoolFBProfile}}">Facebook page link</a> </td>
                        </tr>
                        <tr>
                            <th>TeacherInCharge</th>
                            <td>{{ $accdetails->TeacherInCharge}}</td>
                        </tr>
                        <tr>
                            <th>Registed_at</th>
                            <td>{{ $accdetails->Date}}</td>
                        </tr>
                              <tr>
                            <th>updated_at</th>
                            <td>{{ $accdetails->updated_at}}</td>
                        </tr>

                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Account Details</h4>
                    <p class="category">Account details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                                     
                       
                            <tr>
                       
                                <td>{{ dd($evants)}}</td>
                                <td></td>
                                <td></td>
                                
                            </tr>
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Account Details</h4>
                    <p class="category">Account details</p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    @if ($accdetails->IsAcrive)
                                        <span class="label label-success">Confirmed</span>
                                    @else
                                        <span class="label label-warning">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($accdetails->IsAcrive)
                                    {{ link_to_route('SIS.pending','Pending', $accdetails->id, ['class'=>'btn btn-warning btn-sm']) }}
                                @else
                                    {{ link_to_route('SIS.confirm','Confirm', $accdetails->id, ['class'=>'btn btn-success btn-sm']) }}
                                @endif  </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    <a href="{{ url('/admin/orders') }}" class="btn btn-success">Back to Orders</a>
    
@endsection