@extends('layouts.admin.master')

@section('text')
<title>Register</title>
<span class="login100-form-title p-b-41">
    Account Register
</span>
<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="wrap-input100 validate-input" data-validate="Enter Name">
        <input class="input100" type="text" name="name" placeholder="name">
        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter username">
        <input class="input100" type="text" name="username" placeholder="username">
        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter phone">
        <input class="input100" type="text" name="phone" placeholder="phone">
        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter address">
        <input class="input100" type="text" name="address" placeholder="address">
        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter Email Address">
        <input class="input100" type="email" name="email" placeholder="email">
        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Enter Password">
        <input class="input100" type="password" name="password" placeholder="password">
        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Confirm Password">
    <input class="input100" type="password" name="password_confirmation" placeholder="confirm password">
    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
</div>
    <div class="container-login100-form-btn m-t-32">
        <button class="login100-form-btn">
            confirm
        </button>
    </div>

</form>
@endsection