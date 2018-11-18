<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('lms/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('lms/assets/css/minified/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('lms/assets/css/minified/core.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('lms/assets/css/minified/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('lms/assets/css/minified/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('lms/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lms/assets/js/plugins/forms/tags/tagsinput.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/ui/prism.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js')}}"></script>
	

	<script type="text/javascript" src="{{asset('lms/assets/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('lms/assets/js/pages/form_layouts.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/pages/login.js')}}"></script>
	<script type="text/javascript" src="{{asset('lms/assets/js/pages/form_tags_input.js')}}"></script>
   


       @yield('content')


  @include('admin.footer')