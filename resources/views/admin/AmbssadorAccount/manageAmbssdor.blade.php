@extends('admin.layout.master')

@section('page')

Ambassadors Manage

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
                            <th>School</th>
                            <th>District</th>
                           
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($Ambassadors as $Ambassador)
                        <tr>
                            <td>{{$Ambassador->id}}</td>
                            <td>{{$Ambassador->FirstName}} {{$Ambassador->LastName}}</td>
                            <td>{{$Ambassador->Email}}</td>
                            <td>{{$Ambassador->School}}</td>
                            <td>{{$Ambassador->Linkin}}</td>
                            <td>{{$Ambassador->District}}</td>
                            <td>
                            @if($Ambassador->IsActive)
                                <span class="label label-success">Confirmed</span>
                                @else
                                <span class="label label-warning">Pending</span>
                                 @endif
                            </td>
                            <td>
                 @if ($Ambassador->IsActive)
                 {{ link_to_route('Ambassador.Pending','Pending', $Ambassador->id, ['class'=>'btn btn-warning btn-sm']) }}

                 
                 @else
                        {{ link_to_route('Ambassador.confirm','Confirm', $Ambassador->id, ['class'=>'btn btn-success btn-sm']) }}
                    @endif
                    {{ link_to_route('Ambassador.show','Details', $Ambassador->id, ['class'=>'btn btn-success btn-sm']) }}


               


                    
                              

                                
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