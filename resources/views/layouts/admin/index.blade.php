<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
	@include('layouts.admin.snippets.header')
	@include('layouts.admin.snippets.sidebar')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div>
		
		<div class="panel panel-container">
			@yield('content')
		</div>
	</div>	<!--/.main-->
	
	<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/js/custom.js')}}"></script>

		
</body>
</html>