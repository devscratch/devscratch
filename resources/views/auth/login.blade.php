@extends('layouts.auth')
@section('title', 'Masuk')
@section('body')

  <body class="login-form login-form-second page-login-second">
    <div class="login-page-second">
      <div class="main-login-form">
        <div class="content-login">
          <div class="login-page login-page-inner">
            <div class="logo-title left-align-login">
            </div>
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
                  <input id="requiredCheckbox" class="all-selectable" type="checkbox">
                  <label for="requiredCheckbox">Ingat Saya</label>
                  </span>
                </div>
                <div class="remember-text-login forget-password-login"><a href="{{url('/recover?utm_source=login_page&hash_id=' . md5(uniqid()))}}">Lupa Password?</a></div>
              </div>
              <div class="form-group">
                <button class="btn btn-info btn-sign waves-effect waves-dark" type="submit">Masuk</button>
              </div>
            </form>
            <div class="sign-up-text left-align-login">Belum memiliki Akun?  <a class="underline" href="{{url('/register?utm_source=login_page&hash_id=' . md5(uniqid()))}}">Daftar Sekarang</a>.</div>
            <hr>
            <p class="login-copyright">Hak Cipta &copy; {{date('Y')}} devscratch.com.</p>
            <!-- End Login Form -->
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
                <!-- Template Logo -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
