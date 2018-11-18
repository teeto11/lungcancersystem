@extends('admin.layouts.master')

@section('content')


   <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">All Admins</h5>
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
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>

                </thead>
                <tbody>
                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->firstname}}</td>
                        <td><a href="#">{{$admin->lastname}}</a></td>
                        <td>{{$admin->email}}</td>
                        <td><span class="label label-success">Active</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="{{url('/delete-admin/'.$admin->id)}}"><i class="icon-file-pdf"></i>Delete Admin</a></li>
                                        
                                </li>
                            </ul>
                        </td>
                      </tr>  
                   @endforeach
                </tbody>
            </table>
        </div>
@stop