@extends('admin.layout.master')

@section('page')

SISmanage

@endsection

@section('content')
<div class="row">

                    <div class="col-md-12">
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
                                        <th>User</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dakota Rice</td>
                                        <td>Samsung Galaxy</td>
                                        <td>2</td>
                                        <td>7/433,USA</td>
                                        <td><span class="label label-success">Confirmed</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success ti-close"
                                                    title="Cancel Order"></button>

                                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                                    title="Details"></button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Dakota</td>
                                        <td>Macbook pro</td>
                                        <td>1</td>
                                        <td>12/33,UK</td>
                                        <td><span class="label label-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-success ti-check"
                                                    title="Confirm Order"></button>

                                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                                    title="Details"></button>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>

@endsection