@extends('admin.layout.master')

@section('page')

Mentorms Manage

@endsection

@section('content')
<div class="row">

        <div class="col-md-12">
        @include('admin.layout.message')
            <div class="card">
                <div class="header">
                    <h4 class="title">Manage Account</h4>
                    <p class="category">List of all Account</p>
                </div>
                <div class="content table-responsive table-full-width">
                        <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
                    </div>
                               <div class="table-responsive">
                                <h6 align="left">Total Data : <span id="total_records"></span></h6>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Job</th>
                            <th>District</th>
                           
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($mentors as $mentor)
                        <tr>
                            <td>{{$mentor->id}}</td>
                            <td>{{$mentor->Name}}</td>
                            <td>{{$mentor->Email}}</td>
                            <td>{{$mentor->Job}}</td>
                            <td>{{$mentor->Linkin}}</td>
                            <td>{{$mentor->District}}</td>
                            <td>
                            @if($mentor->IsActive)
                                <span class="label label-success">Confirmed</span>
                                @else
                                <span class="label label-warning">Pending</span>
                                 @endif
                            </td>
                            <td>
                 @if ($mentor->IsActive)
                 {{ link_to_route('Menteors.Pending','Pending', $mentor->id, ['class'=>'btn btn-warning btn-sm']) }}

                 
                 @else
                        {{ link_to_route('Menteors.confirm','Confirm', $mentor->id, ['class'=>'btn btn-success btn-sm']) }}
                    @endif
                    {{ link_to_route('Menteors.show','Details', $mentor->id, ['class'=>'btn btn-success btn-sm']) }}


               


                    
                              

                                
                            </td>
                        </tr>
                        @endforeach

                       

                        </tbody>
                    </table>

                </div>
            </div>
        </div>


    </div>
  
@endsection