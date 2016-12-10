@extends('layouts.recover')
@section('title', 'Lupa Password')
@section('body')
  <body class="page-forgot page-forgot-image1">
		<div class="main-forgot-pass1">
			<div class="content-forgot">
				<div class="forgot-page1 text-center">
					<h3 class="forgot-heading">Reset Password</h3>
					<p>Enter your email address and we'll send you link to reset your password. </p>
					<!-- Start Forgot password Form -->
					<form action="#" class="forgot-form" method="post" id="form1">
						<div class="input-box">
							<div class="textbox-forgot1">
								<input type="text" id='email' name='email' class="form-control right-textbox1" placeholder="Email" />
							</div>
							<div class="submit btn-forgot2">
								<button class="btn btn-info btn-sign waves-effect waves-light" type="submit">GO</button>
							</div>
						</div>
					</form>
					<!-- End Forgot password Form -->
					<p>Already have an account? <a href="login.html" class="forgot-signin"> Sign In </a></p>
				</div>
			</div>
		</div>
@endsection
