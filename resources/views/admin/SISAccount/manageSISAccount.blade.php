@extends('admin.layout.master')

@section('page')

SISmanage

@endsection

@section('content')
<div class="row">

                    <div class="col-md-12">
                    @include('admin.layout.message')
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Orders</h4>
                                <p class="category">List of all orders</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>SchoolName</th>
                                        <th>Email</th>
                                        <th>EducationZone</th>
                                        <th>District</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($SISAccouts as $SISAccout)
                                    <tr>
                                        <td>{{$SISAccout -> id}}</td>
                                        <td>{{$SISAccout -> SchoolName}}</td>
                                        <td>{{$SISAccout -> Email}}</td>
                                        <td>{{$SISAccout -> EducationZone}}</td>
                                        <td>{{$SISAccout -> District}}</td>
                                        <td>
                                        @if($SISAccout -> IsActive)
                                            <span class="label label-success">Confirmed</span>
                                            @else
                                            <span class="label label-warning">Pending</span>
                                             @endif
                                        </td>
                                        <td>
                             @if ($SISAccout->IsActive)
                             {{ link_to_route('SIS.Pending','Pending', $SISAccout->id, ['class'=>'btn btn-warning btn-sm']) }}

                             
                             @else
                                    {{ link_to_route('SIS.confirm','Confirm', $SISAccout->id, ['class'=>'btn btn-success btn-sm']) }}
                                @endif
                                {{ link_to_route('SIS.show','Details', $SISAccout->id, ['class'=>'btn btn-success btn-sm']) }}


                           


                                
                                          

                                            
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