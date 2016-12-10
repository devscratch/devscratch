@extends('layouts.auth')
@section('title', 'Mendaftar')
@section('body')


  <body class="login-form login-form-second page-login-second">
		<div class="login-page-second register-page">
			<div class="main-login-form">
				<div class="content-login">
					<div class="login-page login-page-inner">
						<div class="logo-title left-align-login">
						</div>
						<!-- Start Register Form -->

            @if(count($errors) > 1)
              <div class="alert alert-danger">
                <p>Tolong perbaiki error dibawah ini.</p>
                @foreach ($errors->all() as $error)
                  <ul>
                    <li>{{$error}}</li>
                  </ul>
                @endforeach
              </div>
            @elseif($errors->has('name'))
              <div class="alert alert-danger">
                {{$errors->first('name')}}
              </div>
            @elseif($errors->has('email'))
              <div class="alert alert-danger">
                {{$errors->first('email')}}
              </div>
            @elseif($errors->has('password'))
              <div class="alert alert-danger">
                {{$errors->first('password')}}
              </div>
            @elseif($errors->has('password_confirmation'))
              <div class="alert alert-danger">
                {{$errors->first('password_confirmation')}}
              </div>
            @elseif($errors->has('agreements'))
              <div class="alert alert-danger">
                {{$errors->first('agreements')}}
              </div>
            @endif

						<form action="{{url('/register')}}" class="form-login" id="form1" method="post">
              {{ csrf_field() }}
              <div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_profile"></i></div>
								<div class="textbox-login"><input type="text" class="form-control" id='username' name='name' placeholder="Full Name" value="{{old('name')}}"/></div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_mail"></i></div>
								<div class="textbox-login"><input type="text" class="form-control" id='email' name='email' placeholder="Email" value="{{old('email')}}"/></div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_lock"></i></div>
								<div class="textbox-login"><input type="password" class="form-control" id='password' name='password' placeholder="Password" /></div>
							</div>
							<div class="input-box">
								<div class="left-icon-login btn-info"><i class="icon icon_lock"></i></div>
								<div class="textbox-login"><input type="password" class="form-control" id='password_confirm' name='password_confirmation'  placeholder="Confirm Password"/></div>
							</div>
							<div class="bottom-login">
								<div class="remember-text-login">
									<span class="checkbox-custom checkbox-primary">
									<input id="requiredCheckbox" name="agreements" class="all-selectable" type="checkbox">
									<label for="requiredCheckbox">Saya Setuju dengan Kebijakan & Persyaratan Privasi.</label>
									</span>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-info mobile-btn-login btn-sign waves-effect waves-dark" type="submit">Mendaftar</button>
							</div>
						</form>
						<!-- End Register Form -->
						<div class="sign-up-text left-align-login">Sudah Memiliki Akun? <a class="underline" href="{{url('/login?utm_source=register_page&hash_id=' . md5(uniqid()))}}">Masuk Sekarang</a>.</div>
            <hr>
            <p class="login-copyright">Hak Cipta &copy; {{date('Y')}} devscratch.com.</p>
          </div>
				</div>
			</div>
		</div>
		<div class="main-login-form">
			<div class="content-login">
				<div class="login-page login-page-inner">
					<div class="right-login2">
						<div class="right-in-login2">
							<div class="icon-logo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


@endsection
