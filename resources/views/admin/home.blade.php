@extends('admin.layouts.master')

@section('content')
 <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                </div>
            </div>
        </div>
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ul>
        </div>
        
   </div>
<div class="content">


<!-- Dashboard content -->
<div class="row">
    <div class="col-lg-12">


        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="panel bg-teal-400">
                    <div class="panel-body">
                        <h3 class="no-margin">{{$admincount}}</h3>
                      Total Admins
                        
                    </div>

                    <div class="container-fluid">
                        <div id="members-online"></div>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">

                <!-- Current server load -->
                <div class="panel bg-blue-400">
                    <div class="panel-body">
                        <h3 class="no-margin">{{$questioncount}}</h3>
                     Total Questions
                       
                    </div>

                    <div id="server-load"></div>
                </div>
                <!-- /current server load -->

            </div>

        </div>
        <!-- /quick stats boxes -->


        
    </div>

    
</div>
<!-- /dashboard content -->


<!-- Footer -->
<div class="footer text-muted">
    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
</div>
<!-- /footer -->

</div>
@endsection