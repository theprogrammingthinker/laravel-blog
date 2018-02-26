<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.layouts.head')
</head>
<body>
	<body class="hold-transition skin-purple sidebar-mini">
	<div class="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')
		@section('main-content')
      @show
		@include('admin.layouts.footer')
	</div>
	@include('admin.layouts.footer_scripts')
</body>
</html>