<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- End layout styles -->
  
</head>
<body >
<form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="body-wrapper">
    <div class="main-wrapper">
      <div class="page-wrapper full-page-wrapper d-flex">
        <main class="auth-page login-bg">
          <div class="mdc-layout-grid m-0 p-0">
            <div class="mdc-layout-grid__inner full-height">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-8-tablet">
                <div class="mdc-card">
                  <div class="d-flex align-items-center justify-content-center h-100">
                      
                      <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div>
                              <h4 class="font-weight-medium">Welcome back!</h4>
                              <h6 class="font-weight-light">Happy to see you again!</h6>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input class="mdc-text-field__input" id="text-field-hero-input">
                                <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                  <div class="mdc-notched-outline__leading"></div>
                                  <div class="mdc-notched-outline__notch" style="">
                                    <label for="text-field-hero-input" class="mdc-floating-label" style="">Name</label>
                                  </div>
                                  <div class="mdc-notched-outline__trailing"></div>
                                </div>
                              </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <div class="mdc-text-field mdc-text-field--outlined">
                              <input class="mdc-text-field__input" type="password" id="text-field-hero-input">
                              <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                  <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                              </div>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <div class="mdc-form-field">
                              <div class="mdc-checkbox">
                                <input type="checkbox"
                                        class="mdc-checkbox__native-control"
                                        id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                  <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                    <path class="mdc-checkbox__checkmark-path"
                                          fill="none"
                                          d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                  </svg>
                                  <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                              </div>
                              <label for="checkbox-1">Remember me</label>
                            </div>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                            <a href="#">Forgot Password</a>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                            <a href="#" class="mdc-button mdc-button--raised w-100">
                              Login
                            </a>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <a href="#" class="mdc-button mdc-button--raised btn-facebook w-100">
                              <i class="mdi mdi-facebook mr-1"></i>Facebook
                            </a>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                            <a href="#" class="mdc-button mdc-button--raised filled-button--danger w-100"><i class="mdi mdi-google-plus mr-1"></i>
                              Google plus
                            </a>
                          </div>
                          <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12 justify-content-center">
                            <p class="sign-up">Don't have an Account?<a href="#"> Sign Up</a></p>
                          </div>  
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
             
          </div>
        </main>
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('js/material.js') }}"></script>
  <script src="{{ asset('js/misc.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/material-admin/jquery/template/demo_1/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jun 2020 15:12:55 GMT -->
</html>



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
