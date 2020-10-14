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
                                        <td>{{ link_to_route('SIS.show',$SISAccout -> SchoolName, $SISAccout->id) }}</td>
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
                <script>
                        $(document).ready(function(){
                        
                         fetch_customer_data();
                        
                         function fetch_customer_data(query = '')
                         {
                          $.ajax({
                           url:"{{ route('live_search.action') }}",
                           method:'GET',
                           data:{query:query},
                           dataType:'json',
                           success:function(data)
                           {
                            $('tbody').html(data.table_data);
                            $('#total_records').text(data.total_data);
                           }
                          })
                         }
                        
                         $(document).on('keyup', '#search', function(){
                          var query = $(this).val();
                          fetch_customer_data(query);
                         });
                        });
                        </script>
@endsection