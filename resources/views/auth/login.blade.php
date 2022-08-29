@extends('layouts.admin.master')

@section('text')
<title>Login</title>
<span class="login100-form-title p-b-41">
    Account Login
</span>
<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
@csrf
<div class="wrap-input100 validate-input" data-validate = "Enter username">
    <input class="input100" type="text" name="username" placeholder="username " id="username">
    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
</div>

<div class="wrap-input100 validate-input" data-validate="Enter password">
    <input class="input100" type="password" name="password" placeholder="password" id="password">
    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
<div style="padding-left: 65%;" class="ml-auto "><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password</a></div>
<div class="container-login100-form-btn m-t-32">
    <button class="login100-form-btn">
    Login
    </button>
    
</div>

</form>
@endsection
