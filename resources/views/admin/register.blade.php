@extends('admin.head')

@section('content')

<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin_register') }}">
               {{ csrf_field() }}
                <div class="panel panel-body login-form">
                    <div class="text-center">
                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                        <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
                    </div>

                    <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

                  <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">                     
                            <div class="form-group has-feedback has-feedback-left">
                                <input id="name" type="text" class="form-control" name="firstname" placeholder="firstname" value="{{ old('firstname') }}" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                   </div>

                   <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">                     
                            <div class="form-group has-feedback has-feedback-left">
                                <input id="name" type="text" class="form-control" name="lastname" placeholder="lastname" value="{{ old('lastname') }}" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                   </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                     
                            <div class="form-group has-feedback has-feedback-left">
                                <input id="email" type="text" class="form-control" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                   </div>


                   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                     
                            <div class="form-group has-feedback has-feedback-left">
                                <input id="password" type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-user-lock text-muted"></i>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                   </div>

                                       
                    <div class="form-group has-feedback has-feedback-left">
                        <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" value="{{ old('password') }}" required autofocus>
                        <div class="form-control-feedback">
                            <i class="icon-user-lock text-muted"></i>
                        </div>
                    
                    </div>
                
                    <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
                </div>
            </form>
            <!-- /advanced login -->


            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

	</div>
@endsection