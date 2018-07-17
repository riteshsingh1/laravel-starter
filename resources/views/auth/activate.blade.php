@extends('layouts.auth')

@section('content')
<div class="login-box">
    @include('layouts.alert')
    <h2 class="text-center">Your account is not active. <br/>
        Please activate your account by confirming your email.</h2>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="{{ route('resendEmail') }}" class="btn btn-primary text-center">
    Resend Activation Email</a>    
  </div>
@endsection