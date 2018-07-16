@extends('layouts.auth')

@section('content')
<div class="login-box">
    @include('layouts.alert')
    <form class="login-form" method="POST" action="{{ route('register') }}">
        @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
      <div class="form-group">
        <label class="control-label">NAME</label>
        <input class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}" autofocus>
      </div>
      <div class="form-group">
        <label class="control-label">EMAIL</label>
        <input class="form-control" type="text" placeholder="Email" name="email" value="{{ old('email') }}" autofocus>
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD</label>
        <input class="form-control" type="password" placeholder="Password" name="password" required>
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD CONFIRMATION</label>
        <input class="form-control" type="password" placeholder="Password Confirmation" name="password_confirmation" required>
      </div>
      <div class="form-group">
        <div class="utility">
        <p class="semibold-text mb-2"><a href="{{ route('login') }}">Already Registered ?</a></p>
        </div>
      </div>
      <div class="form-group btn-container">
        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
      </div>
    </form>
  </div>
@endsection

@section('css')
<style>
    .login-content .login-box {
        position: relative;
        min-width: 350px;
        min-height: 552px;
        background-color: #fff;
    }
</style>
@endsection