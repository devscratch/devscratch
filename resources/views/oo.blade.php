@extends('layouts.auth')
@section('title', 'login')
@section('body')
  <body class="login-form page-login-image">
		<div class="main-login-form">
			<div class="content-login">
				<div class="login-page">
					<div class="logo-title">
						<!-- Template Logo -->
						<img alt="logo" src="../assets/images/logo.png">
					</div>
					<p class="sign-login"></p>
          @if($errors->has('email'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">
              <span>×</span>
              </button>
                Details yang anda masukan sepertinya tidak ada di database kami.
            </div>
         @elseif($errors->has('password'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">
              <span>×</span>
              </button>
                Details yang anda masukan sepertinya tidak ada di database kami.
            </div>
          @endif
					<!-- Start Login Form -->
					<form action="{{url('/login')}}" class="form-login" id="form1" method="post">
            {{ csrf_field() }}
            <div class="input-box">
							<div class="left-icon-login btn-info"><i class="icon icon_mail"></i></div>
							<div class="textbox-login"><input type="text" id='email' name='email' class="form-control" placeholder="Email" /></div>
						</div>
						<div class="input-box">
							<div class="left-icon-login btn-info"><i class="icon icon_lock"></i></div>
							<div class="textbox-login"><input type="password" name='password' class="form-control" placeholder="Password" /></div>
						</div>
						<div class="bottom-login">
							<div class="remember-text-login">
								<span class="checkbox-custom checkbox-primary">
								<input id="requiredCheckbox" name="remember_token" type="checkbox" />
								<label for="requiredCheckbox">Ingat saya</label>
								</span>
							</div>
							<div class="remember-text-login forget-password-login"><a href="{{url('/recover?utm_source=login_page&hash_id=' . md5(uniqid(rand(), true)))}}">Lupa password?</a></div>
						</div>
						<div class="form-group submit">
							<button class="btn btn-info btn-sign waves-effect waves-dark" type="submit">Masuk</button>
						</div>
						<h4 class="sign-login">Atau masuk dengan akun Social Media</h4>
						<div class="button-wrap sign-login">
							<a type="button" class="btn btn-icon social-facebook waves-effect waves-light" href="{{url('/auth/facebook?utm_source=login_page&hash_id=' . md5(uniqid(rand(),true)))}}"><i class="icon social_facebook"></i></a>
							<a type="button" class="btn btn-icon social-twitter waves-effect waves-light" href="{{url('/auth/twitter?utm_source=login_page&hash_id=' . md5(uniqid(rand(),true)))}}"><i class="icon social_twitter"></i></a>
							<a type="button" class="btn btn-icon icon-only social-github waves-effect waves-light" href="{{url('/auth/github?utm_source=login_page&hash_id=' . md5(uniqid(rand(),true)))}}"><i class="fa fa-github"></i></a>
						</div>
					</form>
					<hr />
					<div class="sign-up-text">Belum mempunyai akun? <a class="underline" href="{{url('/redister?utm_source=login_page&hash_id=' . md5(uniqid(rand(), true)))}}">Daftar Sekarang!</a>.</div>
					<!-- End Login Form -->
				</div>
			</div>
		</div>
@endsection
