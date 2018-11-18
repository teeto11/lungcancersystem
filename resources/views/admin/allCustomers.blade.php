@extends('adminLayout.layouts.master')

@section('content')


   <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">All Customers</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>



            <table class="table table-bordered table-hover datatable-highlight">
                <thead>

                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Loan Type</th>
                        <th>Interest Rate</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>

                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->firstname}}</td>
                        <td><a href="{{url('customer-profile/'.$admin->id)}}">{{$admin->lastname}}</a></td>
                        <td>{{$admin->role}}</td>
                        <td>{{$admin->email}}</td>
                        <td>car loan </td>
                        <td> 10% </td>
                        <td><span class="label label-success">Approved</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
                                        <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                        <li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                      </tr>  
                   @endforeach
                </tbody>
            </table>
        </div>
@stop