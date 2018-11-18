@extends('admin.layouts.master')

@section('content')

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User</span> - User Management</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i>User Management</a></li>
							<li class="active">Add User</li>
						</ul>
					</div>
				</div>

 <div class="content">
    <!-- Horizontal form options -->
    <div class="row">
        <div class="col-md-6">

        <!-- Basic layout-->
        <form action="{{url('/add-admin')}}" method="post" class="form-horizontal">
        {{csrf_field()}}
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">User Form</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Firstname:</label>
                        <div class="col-lg-9">
                            <input type="text" name="firstname" class="form-control" placeholder="Eugene Kopyov">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Lastname:</label>
                        <div class="col-lg-9">
                            <input type="text" name="lastname" class="form-control" placeholder="Eugene Kopyov">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email" placeholder="EugeneKopyov@yahoo.com">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Password:</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="password" placeholder="Your strong password">
                        </div>
                    </div>

                    
                
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /basic layout -->

    </div>
  </div>  

@stop