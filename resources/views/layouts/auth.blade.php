<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="bootstrap material admin template">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>@yield('title') - devscratch.com</title>
		<!-- Favicons -->
		<link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../assets/favicon/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="../assets/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="../assets/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/favicon/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="../assets/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="../assets/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="../assets/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/favicon/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon-180x180.png" />
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300%7CRaleway:400,300%7CRoboto:400,700,300%7CLato' rel='stylesheet' type='text/css' />
		<!-- Icon CSS -->
		<link rel="stylesheet" href="{{URL::asset('../assets/css/global/iconstyle.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('../assets/fonts/material-design/material-design.min.css')}}" />
		<!-- Global plugin CSS -->
		<link rel="stylesheet" href="{{URL::asset('../assets/css/global/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('../assets/css/switchery/switchery.min.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('../assets/css/global/waves.min.css')}}" />
		<!--  Global Template CSS -->
		<link rel="stylesheet" href="{{URL::asset('../assets/css/global/style.css')}}" />
		<link id="site-color" rel="stylesheet" href="{{URL::asset('../assets/css/colors/cyan.css')}}" />
		<link rel="stylesheet" href="{{URL::asset('../assets/css/global/site.min.css')}}" />
		<!-- Page CSS -->
		<link href="{{URL::asset('../assets/css/login-page/form.css')}}" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{URL::asset('../assets/css/validation/validation.css')}}" type="text/css" />
		<link rel="stylesheet" href="../assets/fonts/font-awasome/font-awesome.min.css">
		
	</head>

  @yield('body')

  <!-- Global Plugin JavaScript -->
  <script src="{{URL::asset('../assets/js/global/jquery.min.js')}}"></script>
  <script src="{{URL::asset('../assets/js/global/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('../assets/js/global/waves.min.js')}}"></script>
  <!-- Global Template JavaScript -->
  <script src="{{URL::asset('../assets/js/global/site.min.js')}}"></script>
  <!-- Page Template JavaScript -->
  <script src='{{URL::asset('../assets/js/validation/jquery.validate.min.js')}}'></script>
  <script src='{{URL::asset('../assets/js/validation/validation.js')}}'></script>
</body>
</html>
