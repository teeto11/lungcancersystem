@include('admin.layouts.script')


<!DOCTYPE html>
<html lang="en">

<body>

	<!-- Main navbar -->
	@include('admin.layouts.head')
	<!-- /main navbar -->

 @if (session('message'))
          <div class="alert outline alert-success fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>{{ session('message')}}</strong>
            </div>
	@endif
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('admin.layouts.sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				
				<!-- /page header -->


				<!-- Content area -->
		     	@yield('content')
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
