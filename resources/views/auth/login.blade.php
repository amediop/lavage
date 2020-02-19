@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<title>Connexion</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/app.css')}}" rel="stylesheet" />
<link href="{{asset('css/all.css')}}" rel="stylesheet" />
</head>
<body>
<div class="limiter">
<div class="container-login100" style=" background-image: url('{{asset("img/com9.png")}}')">
<div class="wrap-login100 p-t-30 p-b-50">
<span class="login100-form-title p-b-41">
Connexion
</span>
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
{{ __('Mots de passe oublie?') }}
</a>
@endif
</div>
</div>
</form>
</div>
</div>
</div>

<div id="dropDownSelect1"></div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/animsitionmin.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/countdowntime.js')}}"></script>
<script src="{{asset('js/daterangepicker.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
</body>
</html>

@endsection